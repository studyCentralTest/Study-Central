<?php

function get_classes_all($pageClassVar) {
    include 'inc/database.php';
    
    
    try {
        $results = $db->query("SELECT classVar, className,levelName,teacherName FROM classPages WHERE classVar = '$pageClassVar'");
    } catch(Exception $e) {
        return "ERROR IN CLASSES.PHP";
        exit;
    }
    
    $classes = $results->fetchALL(PDO::FETCH_ASSOC);

    return $classes;

}
?>