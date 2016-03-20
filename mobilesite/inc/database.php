<?php 
try {
    $db = new PDO("mysql:host=studyCentral.db.6291797.hostedresource.com;dbname=studyCentral;port=3306","studyCentral","Kcp@pi1i2");
    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $db->exec("SET NAMES 'utf8'");
} catch (Exception $e) {
    echo "error out in database.php";
    exit;
}
?>