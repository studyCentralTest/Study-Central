<?php

    if(isset($_POST['action']) && !empty($_POST['action'])) {
        $action = $_POST['action'];
        switch($action) {
            case 'always' : test();break;
            // ...etc...
        }
    }
    
    
    function test() {
        //Connecting to the database
        include 'database.php';
        
        $classValue = $_GET["classvalue"]; //$classValue is the class selection
        $levelVariable = $_GET["levelvalue"]; //$testVariable is equal to the level selection
        try {
           $results = $db->query("SELECT teacherName , teacherFormName FROM classPages WHERE levelName = '$levelVariable' && classFormName = '$classValue' && display = 1");
           //SELECT teacherName FROM classPages WHERE levelName = 'Honors' && classFormName = 'usHistory';
        } catch(Exception $e) {
            echo "ERROR IN CLASSES.PHP";
            exit;
        }
        $finalResults = $results->fetchALL(PDO::FETCH_ASSOC);
        
        ?><option name = "select">Select</option><?php
       foreach($finalResults as $finalResult) { ?>
            <option name="<?php echo $finalResult['teacherFormName']?>" value="<?php echo $finalResult['teacherFormName'];?>"><?php echo $finalResult['teacherName']?></option>
       <?php }
    }
    
    
    
    ?>