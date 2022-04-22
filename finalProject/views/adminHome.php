<?php
    require("../controllers/header.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Home Page</title>

    <!-- External CSS Link -->
    <link rel="stylesheet" href="../assets/css/adminHome.css">

</head>

<body>

    <div class="top-section">

        <table style="width: 100%;">

            <tr>
                <td class="logo-title">
                    <h3><a href="#">MSM SYSTEM</a></h3>
                </td>
                <td style="width: 35%;">
                    <span class="welcome">Welcome! <span> <b>
                                <a
                                    href="admin/adminProfile.php?username=<?php echo $_COOKIE["loggedName"]; ?>"><?php echo $_COOKIE["loggedName"]; ?></a>
                            </b></span></span>
                    <span class="top-menu">
                        <a href="#">Home</a> |
                        <a href="../views/admin/adminNoticesList.php">Notices</a> |
                        <a href="../controllers/logout.php">Logout</a>
                    </span>
                </td>
            </tr>

        </table>

    </div>

    <div class="main-section">
        <center>
            <h1 style="color: #B8C6CC;">Admin Dashboard</h1>
            <table border="2" style="width: 100%;">
                <tr>
                    <td class="left-menu">
                        <a href="admin/adminTeachers.php">Teachers</a> <br> <br>
                        <a href="admin/adminStudents.php">Students</a> <br> <br>
                        <a href="admin/adminClassSections.php">Classes/Sections</a> <br> <br>
                        <a href="admin/adminNotices.php">Notices</a> <br> <br>
                    </td>
                    <td style="width: 75%; padding: 20px;">

                        <html>
                        <h2 style="color: #B8C6CC;">Admin List :-</h2>
                        <center>
                            <table border="1" class="admin-table">
                                <tr>
                                    <th style="width: 200px;">Username</th>
                                    <th style="width: 200px;">Name</th>
                                    <th style="width: 200px;">Email</th>
                                    <th style="width: 200px;">Phone</th>
                                </tr>
                            </table>
                        </center>

                        </html>

                        <?php

        $con = mysqli_connect('localhost', 'root', '', 'webtech');
        $sql = "select * from users where users = 'admin' and status = 'verified'";
        $res = mysqli_query($con, $sql);

        while($userArray = mysqli_fetch_assoc($res)){
                
?>

                        <html>
                        <center>
                            <table class="admin-table" border="1">
                                <tr>
                                    <td style="width: 200px;"><?=$userArray['username']?></td>
                                    <td style="width: 200px;"><?=$userArray['name']?></td>
                                    <td style="width: 200px;"><?=$userArray['email']?></td>
                                    <td style="width: 200px;"><?=$userArray['phone']?></td>
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

    <div class="admin-search">

        <center>

            <form action="">
                <fieldset>
                    <legend>Search by username</legend>

                    <label for="username"><b>Username:</b></label>
                    <input type="text" placeholder="Enter Username" name="username" onkeyup="showAdmin(this.value)">

                    <br>
                    <div id="txtHint">Details will be shown here...</div>

                </fieldset>
            </form>
        </center>

    </div>

    <!-- External Js Link -->
    <script src="../assets/js/adminHome.js"></script>

</body>

</html>