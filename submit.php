<!DOCTYPE html>
  <html>
    <head>
        <title>Study Central | Home PageTest</title>
        <link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <?php include 'inc/faviconInclude.html'; ?>
    </head>
    <body>
        <?php include 'inc/header.php';?>

        
        
            <?php

//5. Assign each form input a PHP variable
$name = trim($_POST["name"]);
$email = trim($_POST["email"]);
$studyGuideName = trim($_POST["studyGuideName"]);
$studyGuideLink = $_POST["studyGuideLink"];
$message = trim($_POST["message"]);
$capthca = $_POST["g-recaptcha-response"];
$dropOne = trim($_POST["dropOne"]);
$dropTwo = trim($_POST["dropTwo"]);
$dropThree = trim($_POST["dropThree"]);

//1. Check to see that all of the form spots are filled out
if($name == "") {
    $errorMessgae = $errorMessage . "Please specify a value for name.<br>";
}
if($email == "") {
    $errorMessgae = $errorMessage . "Please specify a value for email.<br>";
}
if($studyGuideName == "") {
    $errorMessgae = $errorMessage . "Please specify a value for Study Guide Name.<br>";
}
if($studyGuideLink == "") {
    $errorMessgae  = $errorMessage . "Please specify a value for Study Guide Link.<br>";
}
if($dropOne == "" OR $dropTwo == "" OR $dropThree == "") {
    $errorMessgae = $errorMessage . "Please Complete ALL drop down menus <br>";
}


//2. Check to see that the email form spot has a legit email
    foreach( $_POST as $value ){
        if( stripos($value,'Content-Type:') !== FALSE ) {
            $errorMessage = $errorMessage . "There was a problem with the information you entered. <br>";
        }
    }
    
//3. Watch treehouse video and impliment intrusion protection
if ($_POST["address"] != "") {
    $errorMessage = $errorMessage . "Your form submission has an error. <br>";
}
//3.5 Whiteboard sketch out on getting the actual $pageclassvar
  //database file
  include 'inc/database.php';
  $results = $db->query("SELECT classVar FROM classPages WHERE classFormName = '$dropOne' && teacherFormName = '$dropThree' && levelFormName = '$dropTwo'");
  $pageRedirect = $results->fetchALL(PDO::FETCH_ASSOC);
//4. Check to see that the $pageRedirect variable from app.js is a real one
    //Classes database file
                  include 'classes.php';
            //Checks to see if the $pageRedirect variable exists as a class
                //Sets $classes to the classes database array
                $classes = get_classes_all($pageRedirect);
                //Checks to see if there is a class that exists with that name
                if(isset($classes[0]["classVar"])) {
                } else {
                    $errorMessage = $errorMessage . "A Page does not exist for the class specified. <br>";
                }
//4.25 Thank You Email
  //Checks to see if email is kylexy32@gmail.com, if not it sends a thank you email
  if($email !== "kylexy32@gmail.com") {
    //Send Email Notification
      $to      = $email;
      $subject = 'Thank You For Your Submission!';
      $emailMessage = 'Dear ' . $name . ', <br>  Thank you for your submission to Study Central! Thanks to your generosity, members of the Study Central community will be able to learn from your study guide, ' . $studyGuideName . '. Your study guide is now accessible from the website, feel free to check it out at the link below. <br> Thanks again!<br>Sincerely, <br>-The Study Central Team';
      $headers = 'From: Study Central' . "\r\n" .
          'Reply-To: No Reply' . "\r\n";
      $headers .= "CC: susan@example.com\r\n";
      $headers .= "MIME-Version: 1.0\r\n";
      $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

      mail($to, $subject, $emailMessage, $headers);
  }

//4.5 Confirm Capthca Response

$response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LfYThQTAAAAAM4EtCmKUiw2qCrLfxuq3xli19Q6&response=" . $capthca);

if($response["success"] != true) {
    $errorMessage = "asdf";
}

//6. Connect to the database and Submit Results
if(isset($errorMessgae)) {
    echo "There is an error with your Submission";
    exit;
}

include 'inc/database.php';
    //6.1 Post to the studyguides table using the PHP variables
    $realPageClassVar = $pageRedirect[0]['classVar'];
    try {
        $db->exec("INSERT INTO `studyGuides` (`pageClassVar`, `studyGuideName`, `submitName`, `submitEmail`, `submitLink`, `submitText`, `submitTime`) VALUES('$realPageClassVar', '$studyGuideName', '$name', '$email', '$studyGuideLink', '$message', CURRENT_TIMESTAMP);");
        echo "<h2 class = 'submissionText'>Thanks for your submission!</h2>";
        echo "<a href = 'classPage.php?class=".$pageRedirect[0]['classVar']."'><h3 class = 'submissionReturnHome'>Click HERE to see your submission</h3></a>";
    } catch(Exception $e) {
        echo "DATABASE ERROR 2";
        exit;
    }
    ?>
            
    </body>
  </html>
  

    

    