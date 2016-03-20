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
    include 'inc/database.php';
    if(isset($_GET["studyGuide"])) { //In this case, $studyGuide is the timestamp because currently there is no unique identifier (close enough)
        $studyGuide = $_GET["studyGuide"];
    }
    try {
        $db->exec("UPDATE studyGuides SET flag= 'YES' WHERE submitTime = '$studyGuide'");
    }catch(Exception $e) {
        echo "SERVER ERROR";
        exit;
    }
    try {
      $results = $db->query("SELECT * FROM studyGuides WHERE submitTime = '$studyGuide'");
    } catch(Exception $e) {
      echo "SERVER ERROR";
      exit;
    }
    $finalResults = $results->fetchALL(PDO::FETCH_ASSOC);
    //Send Email Notification
      $to      = 'kylexy32@gmail.com';
      $subject = 'Flag has been Submitted';
      $message = 'Flag submitted on study guide';
      $headers = 'From: kylexy32@gmail.com' . "\r\n" .
          'Reply-To: kylexy32@gmail.com' . "\r\n";
      mail($to, $subject, $message, $headers);
      
    echo "<h2 class = 'submissionText'>Thanks for your contribution!</h2>";
    echo "<center><a href = 'index.php'><h3 class = 'submissionReturnHome'>Click HERE to return home</h3></a></center>";
?>
    </body>
</html>