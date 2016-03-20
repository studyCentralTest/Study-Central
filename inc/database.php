<?php 
try {
    $db = new PDO("mysql:host=HOSTNAME;dbname=DATABASENAME;port=PORTNUMBER","USERNAME","PASSWORD");
    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $db->exec("SET NAMES 'utf8'");
} catch (Exception $e) {
    echo "error out in database.php";
    exit;
}
?>