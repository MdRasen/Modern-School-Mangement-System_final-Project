<?php
    require("../../controllers/header.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Notices Page</title>

    <!-- External CSS Link -->
    <link rel="stylesheet" href="../../assets/css/adminNotices.css">

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
            <h1 style="color: #B8C6CC;">Notices</h1>
            <table border="2" style="width: 100%;">
                <tr>
                    <td class="left-menu">
                        <a href="registerNotices.php">Add New Notice</a> <br> <br>
                        <a href="adminNoticesList.php">View Notices</a> <br> <br>
                        <a href="noticeUpdateDelete.php">Update/Delete Notices</a> <br> <br>
                    </td>
                    <td style="width: 75%; padding: 20px;">

                        <html>
                        <h2 style="color: #B8C6CC;">Latest Notices :-</h2>
                        <center>
                            <table border="1" class="notice-table">
                                <tr>
                                    <th style="width: 50px;">Notice ID</th>
                                    <th style="width: 180px;">Title</th>
                                    <th style="width: 70px;">Recipient</th>
                                    <th style="width: 200px;">Notice</th>
                                </tr>
                            </table>
                        </center>

                        </html>

                        <?php

    $date = date("Y-m-d", time() - 60 * 60 * 2000);
    //echo $date;

    $con = mysqli_connect('localhost', 'root', '', 'webtech');
    $sql = "select * from notices where date >= '$date'";
    $res = mysqli_query($con, $sql);

    while($noticeArray = mysqli_fetch_assoc($res)){

?>

                        <html>
                        <center>
                            <table border="1" class="notice-table">
                                <tr>
                                    <td style="width: 50px; "><?=$noticeArray['notice_id']?></td>
                                    <td style="width: 180px; "><?=$noticeArray['notice_title']?></td>
                                    <td style="width: 70px; "><?=$noticeArray['recipient']?></td>
                                    <td style="width: 200px; "><?=$noticeArray['notice']?></td>
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