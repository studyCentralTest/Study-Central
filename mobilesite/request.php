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
    //1. Assign each form input a PHP variable
        $name = trim($_POST["name"]);
        $email = trim($_POST["email"]);
        $className = trim($_POST["className"]);
        $classLevel = trim($_POST["classLevel"]);
        $teacherName = trim($_POST["teacherName"]);
        $capthca = $_POST["g-recaptcha-response"];
        
    //2. Check to see that all of the form spots are filled out
        if($name == "") {
            $errorMessgae = $errorMessage . "Please specify a value for name.<br>";
        }
        if($email == "") {
            $errorMessgae = $errorMessage . "Please specify a value for email.<br>";
        }
        if($className == "") {
            $errorMessgae = $errorMessage . "Please specify a value for Study Guide Name.<br>";
        }
        if($classLevel == "") {
            $errorMessgae  = $errorMessage . "Please specify a value for Study Guide Link.<br>";
        }
        if($teacherName == "") {
            $errorMessgae  = $errorMessage . "Please specify a value for Study Guide Link.<br>";
        }
    //3. Check to see that the email form spot has a legit email
        foreach( $_POST as $value ){
            if( stripos($value,'Content-Type:') !== FALSE ) {
                $errorMessage = $errorMessage . "There was a problem with the information you entered. <br>";
            }
        }
    //4. Honeydick
        if ($_POST["address"] != "") {
            $errorMessage = $errorMessage . "Your form submission has an error. <br>";
        }
    //5, Confirm Capthca Response
        $response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LeKXBQTAAAAAKnLf2ZxOTX0qBaSQRs9rMKDoPOI&response=" . $capthca);
        if($response["success"] != true) {
            $errorMessage = "asdf";
        }
    //6. Connect to the database and Submit Results
        if(isset($errorMessgae)) {
            echo "There is an error with your Submission";
            exit;
        }
        include 'inc/database.php';
            //6.1 Post to the classPages table using the PHP variables AND Set display col to FALSE
                try {
                    $db->exec("INSERT INTO `classPages` (`className`, `levelName` , `teacherName`, `display`, `submitTime`, `submitterName`, `submitterEmail`) VALUES('$className', '$classLevel', '$teacherName', '0', CURRENT_TIMESTAMP, '$name', '$email');");
                    echo "<h2 class = 'submissionText'>Thanks for your submission!</h2>";
                    echo "<p class = 'submissionReturnHome'>Your request is now under review</p>";
                    echo "<a href = 'index.php'><h3 class = 'submissionReturnHome'>Click HERE to return home</h3></a>";
                } catch(Exception $e) {
                    echo "DATABASE ERROR 2";
                    exit;
                }
?>