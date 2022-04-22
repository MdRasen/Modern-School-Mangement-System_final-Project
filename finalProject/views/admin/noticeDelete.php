<?php
    require("../../controllers/header.php");

    require("../../models/noticesModel.php");

    $notice_id = $_REQUEST["notice_id"];


    $result = deleteNotice($notice_id);

    if($result){

    header("location: noticeUpdateDelete.php");
                                                                
    }

    else{
    echo "Invalid data!";
    }

?>