<?php

require("header.php");

require("../models/noticesModel.php");

if(isset($_REQUEST["post"])){
    if(!empty($_REQUEST["notice_id"])){
        $notice_id = $_REQUEST["notice_id"];

        if(!empty($_REQUEST["title"])){
            $title = $_REQUEST["title"];
            $recipient = $_REQUEST["recipient"];

            if(!empty($_REQUEST["date"])){
                $date = $_REQUEST["date"];

                if(!empty($_REQUEST["notice"])){
                    $notice = $_REQUEST["notice"];
                    //echo $notice;

                    $result = updateNotice($notice_id, $title, $recipient, $date, $notice);

                        if($result){

                            header("location: ../views/admin/adminNoticesList.php");
                                                        
                        }

                        else{
                        echo "Invalid data!";
                        }
                }
                else{
                    echo "Notice is null!";
                }
    
            }
            else{
                echo "Notice date is null!";
            }

        }
        else{
            echo "Notice title is null!";
        }
    }
    else{
        echo "Notice ID is null!";
    }
}
?>