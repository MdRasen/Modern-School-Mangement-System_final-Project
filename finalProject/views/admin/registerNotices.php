<?php
    require("../../controllers/header.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notice Form</title>

    <!-- External CSS Link -->
    <link rel="stylesheet" href="../../assets/css/registerNotices.css">


</head>

<body>

    <div class="top-section">

        <table style="width: 100%;">

            <tr>
                <td class="logo-title">
                    <h3><a href="../adminHome.php">MSM SYSTEM</a></h3>
                </td>
                <td style="width: 35%;">
                    <span class="welcome">Welcome! <span> <b>
                                <a
                                    href="adminProfile.php?username=<?php echo $_COOKIE["loggedName"]; ?>"><?php echo $_COOKIE["loggedName"]; ?></a>
                            </b></span></span>
                    <span class="top-menu">
                        <a href="../adminHome.php">Home</a> |
                        <a href="adminNoticesList.php">Notices</a> |
                        <a href="../../controllers/logout.php">Logout</a>
                    </span>
                </td>
            </tr>

        </table>

    </div>

    <div class="registerNotices">
        <center>
            <form action="../../controllers/regNoticeCheck.php" method="POST">
                <fieldset>
                    <legend>Notice Form</legend>

                    <table>

                        <tr>
                            <td><label for="noticeId"><b>Notice ID:</b></label></td>
                            <td><input type="text" name="notice_id" id="noticeId" onkeyup="nIdCheck()" required></td>
                        </tr>

                        <tr>
                            <td><label for="title"><b>Title:</b></label></td>
                            <td><input type="text" name="title" id="title" onkeyup="tCheck()" required></td>
                        </tr>

                        <tr>
                            <td><label for="recipient"><b>Recipient:</b></label></td>
                            <td><select name="recipient">
                                    <option value="everyone">Everyone</option>
                                    <option value="teacher">Teacher</option>
                                    <option value="student">Student</option>
                                </select></td>
                        </tr>

                        <tr>
                            <td><label for="date"><b>Date:</b></label></td>
                            <td><input type="date" name="date" id="date" onkeyup="dCheck()" required></td>
                        </tr>

                        <tr>
                            <td><label for="notice"><b>Notice:</b></label></td>
                            <td><textarea name="notice" cols="30" rows="10" id="notice" onkeyup="nCheck()"
                                    required></textarea></td>
                        </tr>

                        <tr>
                            <td></td>
                            <td>
                                <div class="error"></div>
                            </td>
                        </tr>

                        <tr>
                            <td></td>
                            <td>
                                <input class="submit" type="submit" name="post" value="Post">
                            </td>
                        </tr>

                    </table>
                </fieldset>
            </form>
        </center>
    </div>

    <!-- External Js Link -->
    <script src="../../assets/js/registerNotices.js"></script>

</body>

</html>