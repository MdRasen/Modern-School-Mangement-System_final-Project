<?php
    require("../../controllers/header.php");

    $class_id = $_REQUEST["class_id"];

    $con = mysqli_connect('localhost', 'root', '', 'webtech');
    $sql = "select * from class_sections where class_id = '$class_id'";
    $res = mysqli_query($con, $sql);

    $csArray = mysqli_fetch_assoc($res);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class Update</title>

    <!-- External CSS Link -->
    <link rel="stylesheet" href="../../assets/css/ClassUpdate.css">

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

    <center>
        <form action="../../controllers/csupdateCheck.php" method="POST">
            <fieldset>
                <legend>Class Update</legend>

                <table>

                    <tr>
                        <td><label for="classId"><b>Class ID:</b></label></td>
                        <td><input type="text" name="class_id" value="<?=$csArray['class_id']?>"></td>
                    </tr>

                    <tr>
                        <td><label for="class"><b>Class:</b></label></td>
                        <td><select name="class">
                                <option value="01" <?php if($csArray['class'] == "1"){echo "selected";} ?>>01</option>
                                <option value="02" <?php if($csArray['class'] == "2"){echo "selected";} ?>>02</option>
                                <option value="03" <?php if($csArray['class'] == "3"){echo "selected";} ?>>03</option>
                                <option value="03" <?php if($csArray['class'] == "4"){echo "selected";} ?>>04</option>
                                <option value="03" <?php if($csArray['class'] == "5"){echo "selected";} ?>>05</option>
                            </select></td>
                    </tr>

                    <tr>
                        <td><label for="section"><b>Section:</b></label></td>
                        <td><select name="section">
                                <option value="A" <?php if($csArray['section'] == "A"){echo "selected";} ?>>A</option>
                                <option value="B" <?php if($csArray['section'] == "B"){echo "selected";} ?>>B</option>
                                <option value="C" <?php if($csArray['section'] == "C"){echo "selected";} ?>>C</option>
                            </select></td>
                    </tr>

                    <tr>
                        <td><label for="room"><b>Room Number:</b></label></td>
                        <td><input type="text" name="room" value="<?=$csArray['room']?>"></td>
                    </tr>

                    <tr>
                        <td><label for="teacher"><b>Teacher:</b></label></td>
                        <td><input type="text" name="teacher" value="<?=$csArray['teacher']?>"></td>
                    </tr>

                    <tr>
                        <td><label for="teacherPhone"><b>Teacher Phone:</b></label></td>
                        <td><input type="phone" name="phone" value="<?=$csArray['teacher_phone']?>"></td>
                    </tr>

                    <tr>
                        <td><label for="teacherEmail"><b>Teacher Email:</b></label></td>
                        <td><input type="email" name="email" value="<?=$csArray['teacher_email']?>"></td>
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

</body>

</html>