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
        
        $testVariable = $_GET["classvalue"]; //$testVariable is equal to the class selection
        try {
           $results = $db->query("SELECT DISTINCT levelName, levelFormName FROM classPages WHERE classFormName = '$testVariable' && display = 1;");
        } catch(Exception $e) {
            echo "ERROR IN CLASSES.PHP";
            exit;
        }
        $finalResults = $results->fetchALL(PDO::FETCH_ASSOC);
        
        ?><option name="select">Select</option><?php
       foreach($finalResults as $finalResult) { ?>
            <option name="<?php echo $finalResult['levelFormName']?>" value="<?php echo $finalResult['levelFormName'];?>"><?php echo $finalResult['levelName']?></option>
       <?php }
    }
    
    
    
    ?>