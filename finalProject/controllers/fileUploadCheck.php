<?php

    require("header.php");

    if(isset($_REQUEST["submit"])){

        $username = $_REQUEST["username"];
        //File upload starts//

        $src = $_FILES["myfile"] ["tmp_name"];
        $des = "../models/uploads/".$_FILES["myfile"] ["name"];

        $file_name = $_FILES["myfile"] ["name"];
        //echo $file_name;

        //print_r($_FILES["myfile"]);
        if(move_uploaded_file($src, $des)){
            //echo "Success";

            $con = mysqli_connect('localhost', 'root', '', 'webtech');
            $sql = "insert into profile_details value('{$username}', '{$file_name}')";
            if(mysqli_query($con, $sql)){
                echo "File data is updated!";
            }

        }
        else{
            echo "Failed";
        }
        
        //File upload ends//
    }

?>