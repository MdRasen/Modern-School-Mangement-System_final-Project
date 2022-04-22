<?php

require("../controllers/header.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Home Page</title>
</head>
<body>
    
<div class="top-section">

<table style="width: 100%;">

    <tr>
        <td style="width: 65%; padding: 5px;"><h3>MSM SYSTEM</h3></td>
        <td style="width: 35%;">
            <span style="font-size: 22px;">Welcome! <span style="color: red;"> <b>
                <a href="student/studentProfile.php?username=<?php echo $_COOKIE["loggedName"]; ?>" style="text-decoration: none;"><?php echo $_COOKIE["loggedName"]; ?></a>
            </b></span></span>
            <span style="font-size: 20px; padding-left: 35px;">
            <a href="#">Home</a>  |  
                <a href="../views/student/studentNoticesList.php">Notices</a>  |  
            <a href="../controllers/logout.php">Logout</a>
            </span>
        </td>
    </tr>

</table>

</div>

<div class="main-section">
    <center>
    <h1>Student Dashboard</h1>
    <table border="2" style="width: 100%;">
        <tr>
            <td style="width: 25%; padding: 10px; padding-left: 40px;">
            <a href="../views/student/studentClassSections.php">Class/Sections</a> <br> <br>
            <a href="../views/student/studentTeacher.php">Teacher</a> <br> <br>
            <a href="../views/student/studentNoticesList.php">Notices</a> <br> <br>
            <a href="../views/student/studentMarkSheet.php">Mark Sheet</a> <br> <br>
            <a href="../views/student/studentApplication.php">Application</a> <br> <br>
        </td>
            <td style="width: 75%; padding: 20px;">

            <?php

    $file = fopen("../models/noticeList.txt", "r"); ?>
<html>
    <h2>Notice List :-</h2>
    <center>
    <table border="1" style="width: 1000px; text-align: center;">
    <tr>
        <!-- <th style="width: 80px;">Notice ID</th> -->
        <th style="width: 250px;">Title</th>
        <th style="width: 100px;">Date</th>
        <th style="width: 400px;">Notice</th>
    </tr>
</table>
    </center>
</html>

<?php
        while(!feof($file)){
                $user = fgets($file);
                $userArray = explode("|", $user); ?>

        <html>
        <center>
        <table border="1" style="width: 1000px; text-align: center;">
            <tr>
                <!-- <td style="width: 80px; "><?=$userArray[0]?></td> -->
                <td style="width: 250px; "><?=$userArray[1]?></td>
                <td style="width: 100px; "><?=$userArray[3]?></td>
                <td style="width: 400px; "><?=$userArray[4]?></td>
            </tr>
        </table>
        </center>
        </html>
        <?php
                }

?>
        
        </td>
        </tr>
    </table>
    </center>
    </div>


    
</body>
</html>