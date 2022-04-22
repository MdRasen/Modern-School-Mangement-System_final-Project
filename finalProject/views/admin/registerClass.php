<?php
    require("../../controllers/header.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class Registration Page</title>

    <!-- External CSS Link -->
    <link rel="stylesheet" href="../../assets/css/registerClass.css">

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

    <div class="registerClass">
        <center>
            <form action="../../controllers/classsRegCheck.php" method="POST">
                <fieldset>
                    <legend>Class Registration Form</legend>

                    <table>

                        <tr>
                            <td><label for="classId"><b>Class ID:</b></label></td>
                            <td><input type="text" name="class_id" id="classId" onkeyup="cCheck()" required></td>
                        </tr>

                        <tr>
                            <td><label for="class"><b>Class:</b></label></td>
                            <td><select name="class" id="rClass" required>
                                    <option value="01">01</option>
                                    <option value="02">02</option>
                                    <option value="03">03</option>
                                    <option value="03">04</option>
                                    <option value="03">05</option>
                                </select></td>
                        </tr>

                        <tr>
                            <td><label for="section"><b>Section:</b></label></td>
                            <td><select name="section" id="section" required>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                </select></td>
                        </tr>

                        <tr>
                            <td><label for="room"><b>Room Number:</b></label></td>
                            <td><input type="text" name="room" id="room" onkeyup="rCheck()" required></td>
                        </tr>

                        <tr>
                            <td><label for="teacher"><b>Teacher:</b></label></td>


                            <td>

                                <!-- <input type="text" name="teacher" id="teacher" onkeyup="tCheck()" required> -->

                                <select name="teacher" id="teacher" id="teacher" onkeyup="tCheck()" required>
                                    <option value="Null">Select a Teacher</option>

                                    <?php
                            $con = mysqli_connect('localhost', 'root', '', 'webtech');
                            $sql = "select * from users where users = 'teacher' and status = 'verified'";
                            $res = mysqli_query($con, $sql);

                            while($userArray = mysqli_fetch_assoc($res)){

                                ?>

                                    <option value="<?=$userArray['name']?>"><?=$userArray['name']?></option>

                                    <?php

                            }

                            ?>

                                </select>



                            </td>


                        </tr>

                        <tr>
                            <td><label for="teacherPhone"><b>Teacher Phone:</b></label></td>
                            <td><input type="phone" name="phone" id="tPhone" onkeyup="tpCheck()" required></td>
                        </tr>

                        <tr>
                            <td><label for="teacherEmail"><b>Teacher Email:</b></label></td>
                            <td><input type="email" name="email" id="tEmail" onkeyup="eCheck()" required></td>
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
                                <input class="submit" type="submit" name="register" value="Register">

                            </td>
                        </tr>

                    </table>
                </fieldset>
            </form>
        </center>
    </div>

    <div style="padding-top: 20px;" class="json-check">

        <input type="button" name="" value="Check JSON" onclick="json()">
        <br><br>
        
    </div>

    <!-- External Js Link -->
    <script src="../../assets/js/registerClass.js"></script>

</body>

</html>