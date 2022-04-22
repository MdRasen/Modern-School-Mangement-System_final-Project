<?php
    require("../../controllers/header.php");

    require("../../models/usersModel.php");

    $username = $_REQUEST["username"];


    $result = deleteUser($username);

    if($result){

    header("location: TeachersupdateDelete.php");
                                                                
    }

    else{
    echo "Invalid data!";
    }

?>