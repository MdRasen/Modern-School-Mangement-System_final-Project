<?php
    require("../../controllers/header.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notices List</title>

    <!-- External CSS Link -->
    <link rel="stylesheet" href="../../assets/css/adminNoticesList.css">

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
            <h1 style="color: #B8C6CC;">Notices List</h1>
            <table border="2" style="width: 100%;">
                <tr>
                    <td style="width: 100%; padding: 20px;">

                        <html>
                        <center>
                            <table border="1" class="notice-table">
                                <tr>
                                    <th style="width: 80px;">Notice ID</th>
                                    <th style="width: 250px;">Title</th>
                                    <th style="width: 90px;">Recipient</th>
                                    <th style="width: 90px;">Date</th>
                                    <th style="width: 400px;">Notice</th>
                            </table>
                        </center>

                        </html>

                        <?php

    $con = mysqli_connect('localhost', 'root', '', 'webtech');
    $sql = "select * from notices";
    $res = mysqli_query($con, $sql);

    while($noticeArray = mysqli_fetch_assoc($res)){

?>

                        <html>
                        <center>
                            <table border="1" class="notice-table">
                                <tr>
                                    <td style="width: 80px; "><?=$noticeArray['notice_id']?></td>
                                    <td style="width: 250px; "><?=$noticeArray['notice_title']?></td>
                                    <td style="width: 90px; "><?=$noticeArray['recipient']?></td>
                                    <td style="width: 90px; "><?=$noticeArray['date']?></td>
                                    <td style="width: 400px; "><?=$noticeArray['notice']?></td>
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

    <div class="notice-search">

        <center>

            <form action="">

                <fieldset>
                    <legend>Search by Notice ID</legend>

                    <label for="noticeId"><b>Notice ID</b></label>
                    <input type="text" placeholder="Enter Notice ID" name="noticeId" onkeyup="showNotice(this.value)">

                    <br>
                    <div id="txtHint">Details will be shown here...</div>

                </fieldset>
            </form>
        </center>

    </div>

    <!-- External Js Link -->
    <script src="../../assets/js/noticeList.js"></script>

</body>

</html>