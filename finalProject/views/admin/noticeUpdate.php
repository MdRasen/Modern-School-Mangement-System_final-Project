<?php
    require("../../controllers/header.php");

    $notice_id = $_REQUEST["notice_id"];

    $con = mysqli_connect('localhost', 'root', '', 'webtech');
    $sql = "select * from notices where notice_id = '$notice_id'";
    $res = mysqli_query($con, $sql);

    $noticeArray = mysqli_fetch_assoc($res);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notice Update</title>

    <!-- External CSS Link -->
    <link rel="stylesheet" href="../../assets/css/noticeUpdate.css">
</head>

<body>

<div class="top-section">

<table style="width: 100%;">

    <tr>
        <td class="logo-title"><h3><a href="../adminHome.php">MSM SYSTEM</a></h3></td>
        <td style="width: 35%;">
            <span class="welcome">Welcome! <span> <b>
                <a href="adminProfile.php?username=<?php echo $_COOKIE["loggedName"]; ?>"><?php echo $_COOKIE["loggedName"]; ?></a>
            </b></span></span>
            <span class="top-menu">
            <a href="../adminHome.php">Home</a>  |  
                <a href="adminNoticesList.php">Notices</a>  |  
            <a href="../../controllers/logout.php">Logout</a>
            </span>
        </td>
    </tr>

</table>

</div>

<div class="notice-update">
<center>
<form action="../../controllers/noticeupdateCheck.php" method="POST">
<fieldset>
            <legend>Notice Update</legend>

            <table>

                <tr>
                    <td><label for="noticeId"><b>Notice ID:</b></label></td>
                    <td><input type="text" name="notice_id" value="<?=$noticeArray['notice_id']?>"></td>
                </tr>

                <tr>
                    <td><label for="title"><b>Title:</b></label></td>
                    <td><input type="text" name="title" value="<?=$noticeArray['notice_title']?>"></td>
                </tr>

                <tr>
                    <td><label for="recipient"><b>Recipient:</b></label></td>
                    <td><select name="recipient" >
                            <option value="everyone" <?php if($noticeArray['recipient'] == "everyone"){echo "selected";} ?>>Everyone</option>
                            <option value="teacher" <?php if($noticeArray['recipient'] == "teacher"){echo "selected";} ?>>Teacher</option>
                            <option value="student" <?php if($noticeArray['recipient'] == "student"){echo "selected";} ?>>Student</option>
                        </select></td>
                </tr>

                <tr>
                    <td><label for="date"><b>Date:</b></label></td>
                    <td><input type="date" name="date" value="<?=$noticeArray['date']?>"></td>
                </tr>

                <tr>
                    <td><label for="notice"><b>Notice:</b></label></td>
                    <td><textarea name="notice" id="" cols="30" rows="10"><?=$noticeArray['notice']?></textarea></td>
                </tr>

                <tr>
                    <td></td>
                    <td>
                        <input type="submit" name="update" value="Update">
                    </td>
                </tr>

            </table>
        </fieldset>
    </form>
</center>
</div>

</body>

</html>