<?php

    require("header.php");

    if(isset($_REQUEST["search"])){
       if(!empty($_REQUEST["username"])){
           $username = $_REQUEST["username"];

           $file = fopen("../models/verStudentList.txt", "r");
    
           while(!feof($file)){
               $user = fgets($file);

               $userArray = explode("|", $user);

               if(trim($userArray[1]) == $username){

                $content ="Username: " .$userArray[0] ."<br>"."Name: " .$userArray[2] ."<br>"."Email: " .$userArray[3] ."<br>"."Phone: " .$userArray[4] ."<br>"."Date Of Birth: " .$userArray[5] ."<br>"."Gender: " .$userArray[6] ."<br>"."Address: " .$userArray[7];
                echo $content;

               }
           }
       }
       else{
           echo "Username is null!";
       }
    }

?>