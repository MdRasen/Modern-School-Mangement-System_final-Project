<?php

require("../models/usersModel.php");

if(isset($_REQUEST["register"])){

    $users = $_REQUEST["users"];

    if(!empty($_REQUEST["username"])){
        if(strlen($_REQUEST["username"]) >= 2){
            $username = $_REQUEST["username"];

            if(!empty($_REQUEST["name"])){
                $name = $_REQUEST["name"];

                if(!empty($_REQUEST["email"])){
                    $email = $_REQUEST["email"];

                    if(!empty($_REQUEST["phone"])){
                        if(strlen($_REQUEST["phone"]) == 11){
                            $phone = $_REQUEST["phone"];

                            if(!empty($_REQUEST["dob"])){
                                $dob = $_REQUEST["dob"];

                                if(!empty($_REQUEST["gender"])){
                                    $gender = $_REQUEST["gender"];

                                    if(!empty($_REQUEST["address"])){
                                        $address = $_REQUEST["address"];

                                        if(!empty($_REQUEST["password"])){
                                            if(!empty($_REQUEST["cpassword"])){
                                                if($_REQUEST["password"] == $_REQUEST["cpassword"]){
                                                    $password = $_REQUEST["password"];
                                                    $confirmPass = $_REQUEST["cpassword"];

                                                    $result = reg($users, $username, $name, $email, $phone, $dob, $gender, $address, $password, $confirmPass);

                                                    if($result){
                                                        header("location: ../views/adminHome.php");
                                                    }

                                                    else{
                                                        echo "Invalid data!";
                                                    }
                    
                                                }
                                                else{
                                                    //echo "Passwords does not match!";
                                                    //header("location: ../views/registration.php");
                                                    header("location: ../views/registration.php?error=notmatching");
                                                }
                                            }
                                            else{
                                                //echo "cPassword is null!";
                                                header("location: ../views/registration.php");
                                            }
                                        }
                                        else{
                                            //echo "Password is null!";
                                            header("location: ../views/registration.php");
                                        }
                                    }
                                    else{
                                        //echo "Address is null!";
                                        header("location: ../views/registration.php");
                                    }
                                }
                                else{
                                    //echo "Gender is null!";
                                    header("location: ../views/registration.php");
                                }
                            }
                            else{
                                //echo "Date of Birth is null";
                                header("location: ../views/registration.php");
                            }
                        }
                        else{
                            //echo "Invalid phone number, Please enter a 11 digit phone number!";
                            header("location: ../views/registration.php");
                        }
                    }
                    else{
                        //echo "Phone number is null!";
                        header("location: ../views/registration.php");
                    }
                }
                else{
                    //echo "Email is null!";
                    header("location: ../views/registration.php");
                }
            }
            else{
                //echo "Name is null";
                header("location: ../views/registration.php");
            }
        }
        else{
            //echo "Invalid username, Must contain at least 2 letter!";
            header("location: ../views/registration.php");
        }
    }
    else{
        //echo "Username is null!";
        header("location: ../views/registration.php");
    }
}

?>