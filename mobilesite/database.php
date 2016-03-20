<?php 
try {
    $db = new PDO("mysql:host=localhost;dbname=studyCentral;port=3306","root","root");
    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $db->exec("SET NAMES 'utf8'");
} catch (Exception $e) {
    echo "error out";
    exit;
}
?>