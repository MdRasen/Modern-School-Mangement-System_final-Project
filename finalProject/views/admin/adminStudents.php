<?php
    require("../../controllers/header.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Teachers Page</title>

    <!-- External CSS Link -->
    <link rel="stylesheet" href="../../assets/css/adminStudents.css">

</head>

<body>

    <div class="top-section">

        <table style="width: 100%;">

            <tr>
                <td class="logo-title">
                    <h3><a href="../adminHome.php">MSM SYSTEM</a></h3>
                </td>
                <td style="width: 35%;">
                    <span class="welcome">Welcome! <span style="color: red;"> <b>
                                <a href="adminProfile.php?username=<?php echo $_COOKIE["loggedName"]; ?>"
                                    style="text-decoration: none;"><?php echo $_COOKIE["loggedName"]; ?></a>
                            </b></span></span>
                    <span class="top-menu">
                        <a href="../adminHome.php">Home</a> |
                        <a href="../../views/admin/adminNoticesList.php">Notices</a> |
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
                    <td class="left-menu">
                        <a href="../registration.php">Add New Student</a> <br> <br>
                        <a href="adminStudentsAction.php">Verify/Block Students</a> <br> <br>
                        <a href="adminStudentsList.php">Students List</a> <br> <br>
                        <a href="StudentsupdateDelete.php">Update/Remove Students</a> <br> <br>
                        <!-- <a href="#">Notices For Students</a> <br> <br> -->
                    </td>
                    <td style="width: 75%; padding: 20px;">

                        <html>
                        <h2 style="color: #B8C6CC;">Pending Students List :-</h2>
                        <center>
                            <table border="1" class="student-table">
                                <tr>
                                    <th style="width: 200px;">Username</th>
                                    <th style="width: 200px;">Email</th>
                                    <th style="width: 200px;">Password</th>
                                    <th style="width: 200px;">Status</th>
                                </tr>
                            </table>
                        </center>

                        </html>

                        <?php
    $con = mysqli_connect('localhost', 'root', '', 'webtech');
    $sql = "select * from users where users = 'student' and status = 'unverified'";
    $res = mysqli_query($con, $sql);
   
    while($userArray = mysqli_fetch_assoc($res)){
                
?>

                        <html>
                        <center>
                            <table border="1" class="student-table">
                                <tr>
                                    <td style="width: 200px; "><?=$userArray['username']?></td>
                                    <td style="width: 200px; "><?=$userArray['email']?></td>
                                    <td style="width: 200px; "><?=$userArray['password']?></td>
                                    <td style="width: 200px; "><?=$userArray['status']?></td>
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