<?php

session_start();
require("../models/usersModel.php");

if(isset($_REQUEST["login"])){
    
    $user = $_REQUEST["users"];
    if(!empty($_REQUEST["username"])){
        $username = $_REQUEST["username"];

        if(!empty($_REQUEST["password"])){
            $password = $_REQUEST["password"];

            $result = login($user, $username, $password);

            if($result){
                //Using setcookie method
                setcookie("status", "true", time()+3600, "/");
                setcookie("loggedName", $username, time()+3600, "/");

                if($user == "admin"){
                    header("location: ../views/adminHome.php");
                }

                if($user == "teacher"){
                    header("location: ../views/teacherHome.php");
                }

                if($user == "student"){
                    header("location: ../views/studentHome.php");
                }
            }
        
            else{
                //echo "Invalid username/password!";
                header("location: ../views/login.php?error=incorrect");
            }

    }
    else{
        //echo "Password is null!";
        header("location: ../views/login.php");
    }
    
}
else{
    //echo "Username is null!";
    header("location: ../views/login.php");
}

}

if(isset($_REQUEST["register"])){
    header("location: ../views/registration.php");
}

?>