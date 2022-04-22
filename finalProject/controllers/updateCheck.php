<?php

require("header.php");

require("../models/usersModel.php");

if(isset($_REQUEST["update"])){

    $user = $_REQUEST["users"];

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
                                            if(!empty($_REQUEST["cPassword"])){
                                                if($_REQUEST["password"] == $_REQUEST["cPassword"]){
                                                    $password = $_REQUEST["password"];
                                                    $confirmPass = $_REQUEST["cPassword"];
                                                    $action = $_REQUEST["action"];
                                          
                                                    $result = updateUser($user, $username, $name, $email, $phone, $dob, $gender, $address, $password, $confirmPass, $action);

                                                        if($result){

                                                            header("location: ../views/adminHome.php");
                                                        
                                                        }

                                                        else{
                                                        echo "Invalid data!";
                                                        }

                                                }
                                                else{
                                                    echo "Passwords does not match!";
                                                }
                                            }
                                            else{
                                                echo "cPassword is null!";
                                            }
                                        }
                                        else{
                                            echo "Password is null!";
                                        }
                                    }
                                    else{
                                        echo "Address is null!";
                                    }
                                }
                                else{
                                    echo "Gender is null!";
                                }
                            }
                            else{
                                echo "Date of Birth is null";
                            }
                        }
                        else{
                            echo "Invalid phone number, Please enter a 11 digit phone number!";
                        }
                    }
                    else{
                        echo "Phone number is null!";
                    }
                }
                else{
                    echo "Email is null!";
                }
            }
            else{
                echo "Name is null";
            }
        }
        else{
            echo "Invalid username, Must contain at least 2 letter!";
        }
    }
    else{
        echo "Username is null!";
    }
}

?>