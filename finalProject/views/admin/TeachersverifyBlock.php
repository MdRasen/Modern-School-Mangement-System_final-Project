<?php
    require("../../controllers/header.php");

    $username = $_REQUEST["username"];

    $con = mysqli_connect('localhost', 'root', '', 'webtech');
    $sql = "select * from users where username = '$username'";
    $res = mysqli_query($con, $sql);

    $userArray = mysqli_fetch_assoc($res);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teachers Verify/Block</title>

    <!-- External CSS Link -->
    <link rel="stylesheet" href="../../assets/css/teachersVB.css">

</head>

<body>

<center>
<form action="../../controllers/verifyBlockCheck.php" method="POST">
        <fieldset>
            <legend>Teachers Verify/Block</legend>

            <table>
                <tr>
                <td><label for="users"><b>User Type:</b></label></td>
                    <td><select name="users" >
                            <option value="admin" <?php if($userArray['users'] == "admin"){echo "selected";} ?>>Admin</option>
                            <option value="teacher" <?php if($userArray['users'] == "teacher"){echo "selected";} ?>>Teacher</option>
                            <option value="student" <?php if($userArray['users'] == "student"){echo "selected";} ?>>Student</option>
                        </select></td>
                </tr>

                <tr>
                    <td><label for="username"><b>Username:</b></label></td>
                    <td><input type="text" name="username" value="<?=$userArray['username']?>"></td>
                </tr>

                <tr>
                    <td><label for="name"><b>Name:</b></label></td>
                    <td><input type="text" name="name" value="<?=$userArray['name']?>"></td>
                </tr>

                <tr>
                    <td><label for="email"><b>Email:</b></label></td>
                    <td><input type="email" name="email" value="<?=$userArray['email']?>"></td>
                </tr>

                <tr>
                    <td><label for="phone"><b>Phone:</b></label></td>
                    <td><input type="text" name="phone" value="<?=$userArray['phone']?>"></td>
                </tr>

                <tr>
                    <td><label for="dob"><b>Date Of Birth:</b></label></td>
                    <td><input type="date" name="dob" value="<?=$userArray['dob']?>"></td>
                </tr>

                <tr>
                    <td><label for="gender"><b>Gender:</b></label></td>
                    <td><input type="gender" name="gender" value="<?=$userArray['gender']?>"></td>
                </tr>

                <!-- <tr>
                <td><label for="gender"><b>Gender</b></label></td>
                    <td><input type="radio" name="gender" value="male" <?php if($userArray['gender'] == "male"){echo "checked";} ?>> Male
                        <input type="radio" name="gender" value="female" <?php if($userArray['gender'] == "female"){echo "checked";} ?>> Female
                        <input type="radio" name="gender" value="others" <?php if($userArray['gender'] == "others"){echo "checked";} ?>> Others
                    </td>
                </tr> -->

                <tr>
                    <td><label for="address"><b>Address:</b></label></td>
                    <td><input type="" name="address" value="<?=$userArray['address']?>"></td>
                </tr>

                <tr>
                    <td><label for="password"><b>Password:</b></label></td>
                    <td><input type="password" name="password" value="<?=$userArray['password']?>"></td>
                </tr>

                <tr>
                    <td><label for="cpassword"><b>Confirm Password:</b></label></td>
                    <td><input type="password" name="cPassword" value="<?=$userArray['cpassword']?>"></td>
                </tr>

                <tr>
                    <td><label for="action"><b>Action:</b></label></td>
                    <td><select name="action">
                            <option value="verified">Verify</option>
                            <option value="blocked">Block</option>
                        </select></td>
                </tr>

                <tr>
                    <td></td>
                    <td>
                        <input type="submit" name="confirm" value="confirm">
                    </td>
                </tr>

            </table>
        </fieldset>
    </form>
</center>

</body>

</html>