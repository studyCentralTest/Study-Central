<?php

function get_studyGuides_class($pageClassVar) {
    include 'inc/database.php';
    
    try {
        $results = $db->query("SELECT * FROM studyGuides WHERE pageClassVar = '$pageClassVar' ORDER BY submitTime DESC");
    } catch(Exception $e) {
        exit;
    }
    
    $studyGuidesForClass = $results->fetchALL(PDO::FETCH_ASSOC);


    return $studyGuidesForClass;

}
?>