<?php
    require("../../controllers/header.php");

    require("../../models/csModel.php");

    $class_id = $_REQUEST["class_id"];


    $result = deletecs($class_id);

    if($result){

    header("location: classUpdateDelete.php");
                                                                
    }

    else{
    echo "Invalid data!";
    }

?>