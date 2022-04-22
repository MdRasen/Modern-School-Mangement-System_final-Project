<?php
    require("../../controllers/header.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Class Routine</title>

    <!-- External CSS Link -->
    <link rel="stylesheet" href="../../assets/css/adminRoutine.css">

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

    <div class="adminRoutine">
        <center>
            <form action="../../controllers/notesUploadCheck.php" method="POST" enctype="multipart/form-data">
                <fieldset>
                    <legend>Class Routine Upload</legend>

                    <table>

                        <tr>
                            <td><label for="classId"><b>Class ID:</b></label></td>
                            <td><input type="text" name="class_id" id="classId" onkeyup="cIdCheck()" required></td>
                        </tr>

                        <tr>
                            <td><label for="class"><b>Class:</b></label></td>
                            <td><select name="class">
                                    <option value="01">01</option>
                                    <option value="02">02</option>
                                    <option value="03">03</option>
                                    <option value="03">04</option>
                                    <option value="03">05</option>
                                </select></td>
                        </tr>

                        <tr>
                            <td><label for="section"><b>Section:</b></label></td>
                            <td><select name="section">
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                </select></td>
                        </tr>

                        <tr>
                            <td><label for="myfile"><b>Select File:</b></label></td>
                            <td><input type="file" name="myfile" required></td>
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
                                <input type="submit" name="upload" value="Upload">
                            </td>
                        </tr>

                    </table>
                </fieldset>
            </form>
        </center>
    </div>

    <!-- External Js Link -->
    <script src="../../assets/js/adminRoutine.js"></script>

</body>

</html>