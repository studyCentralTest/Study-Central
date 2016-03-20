<?php
    //Connecting to the database
include 'inc/database.php';
    
    try {
        $results = $db->query("SELECT DISTINCT className, classFormName FROM classPages WHERE display = 1;");
        
        $classes = $results->fetchALL(PDO::FETCH_ASSOC);
    } catch(Exception $e) {
        echo "ERROR IN dropOneOptions.PHP";
        exit;
    }
?>

        <option selected="selected">Select</option>
        <?php $counter = 0; ?>
        <?php foreach ($classes as $class) { ?>
            <option value= "<?php echo $classes[$counter]['classFormName'];?>"><?php echo $classes[$counter]['className'];?></option>
            <?php $counter = $counter + 1; ?>
        <?php } ?>