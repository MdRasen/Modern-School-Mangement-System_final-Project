<?php
    require("../../controllers/header.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify/Block Students</title>

    <!-- External CSS Link -->
    <link rel="stylesheet" href="../../assets/css/adminStudentsAction.css">

</head>
<body>

    <div class="top-section">

        <table style="width: 100%;">

            <tr>
                <td class="logo-title"><h3><a href="../adminHome.php">MSM SYSTEM</a></h3></td>
                <td style="width: 35%;">
                    <span class="welcome">Welcome! <span style="color: red;"> <b>
                        <a href="adminProfile.php?username=<?php echo $_COOKIE["loggedName"]; ?>" style="text-decoration: none;"><?php echo $_COOKIE["loggedName"]; ?></a>
                    </b></span></span>
                    <span class="top-menu">
                    <a href="../adminHome.php">Home</a>  |  
                        <a href="../../views/admin/adminNoticesList.php">Notices</a>  |  
                    <a href="../../controllers/logout.php">Logout</a>
                    </span>
                </td>
            </tr>

        </table>

    </div>
    
    <div class="main-section">
    <center>
    <h1 style="color: #B8C6CC;">Students</h1>
    <table border="2" style="width: 100%;">
        <tr>
            <td style="width: 100%; padding: 20px;">

<html>
    <h2 style="color: #B8C6CC;">Verify/Block Students :-</h2>
    <center>
    <table border="1" class="student-table">
    <tr>
        <th style="width: 100px;">Username</th>
        <th style="width: 150px;">Name</th>
        <th style="width: 200px;">Email</th>
        <th style="width: 100px;">Phone</th>
        <th style="width: 100px;">Date of Birth</th>
        <th style="width: 100px;">Gender</th>
        <th style="width: 150px;">Address</th>
        <th style="width: 100px;">Password</th>
        <th style="width: 100px;">Status</th>
        <th style="width: 150px;">Action</th>
    </tr>
</table>
    </center>
</html>

<?php

        $con = mysqli_connect('localhost', 'root', '', 'webtech');
        $sql = "select * from users where users = 'student' and status = 'unverified' or status = 'blocked'";
        $res = mysqli_query($con, $sql);

        while($userArray = mysqli_fetch_assoc($res)){
                
?>

        <html>
        <center>
        <table border="1" class="student-table">
            <tr>
                <td style="width: 100px; "><?=$userArray['username']?></td>
                <td style="width: 150px; "><?=$userArray['name']?></td>
                <td style="width: 200px; "><?=$userArray['email']?></td>
                <td style="width: 100px; "><?=$userArray['phone']?></td>
                <td style="width: 100px; "><?=$userArray['dob']?></td>
                <td style="width: 100px; "><?=$userArray['gender']?></td>
                <td style="width: 150px; "><?=$userArray['address']?></td>
                <td style="width: 100px; "><?=$userArray['password']?></td>
                <td style="width: 100px; "><?=$userArray['status']?></td>
                <td class="action" style="width: 150px;"><a href="StudentsverifyBlock.php?username=<?=$userArray['username']?>">Verify/Block</a></td>
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