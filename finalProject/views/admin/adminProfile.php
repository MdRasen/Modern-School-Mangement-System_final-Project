<?php
    require("../../controllers/header.php");

    $username = $_REQUEST["username"];                       
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Profile</title>

    <!-- External CSS Link -->
    <link rel="stylesheet" href="../../assets/css/adminProfile.css">

</head>

<body>

    <div class="top-section">

        <table style="width: 100%;">

            <tr>
                <td class="logo-title">
                    <h3><a href="#">MSM SYSTEM</a></h3>
                </td>
                </td>
                <td style="width: 35%;">
                    <span class="welcome">Welcome! <span style="color: red;"> <b>
                                <a href="#" style="text-decoration: none;"><?php echo $_COOKIE["loggedName"]; ?></a>
                            </b></span></span>
                    <span class="top-menu">
                        <a href="../adminHome.php">Home</a> |
                        <a href="../admin/adminNoticesList.php">Notices</a> |
                        <a href="../../controllers/logout.php">Logout</a>
                    </span>
                </td>
            </tr>

        </table>

    </div>

    <div class="main-section">

        <center>

            <h1 style="color: #B8C6CC;">Admin Profile</h1>

            <table border="2" style="width: 100%;">
                <tr>

                    <?php
$con = mysqli_connect('localhost', 'root', '', 'webtech');
$sql = "select * from profile_details where username = '$username'";
$res = mysqli_query($con, $sql);

while($userArray = mysqli_fetch_assoc($res)){
           
?>
                    <td style="width: 30%; padding: 10px; padding-left: 40px;">
                        <img src="../../models/uploads/<?=$userArray['file_name']?>" alt="admin icon"
                            style="width: 150px;">
                        <br> <br>
                        <?php
        }

?>
                        <form
                            action="../../controllers/fileUploadCheck.php?username=<?php echo $_COOKIE["loggedName"]; ?>"
                            method="POST" enctype="multipart/form-data">
                            <label for="myfile"><b>Select image:</b></label> <br>
                            <input type="file" name="myfile"> <br> <br>
                            <input type="submit" name="submit">
                        </form>
                    </td>
                    <td style="width: 70%; padding: 20px;">


                        <?php
$con = mysqli_connect('localhost', 'root', '', 'webtech');
$sql = "select * from users where username = '$username'";
$res = mysqli_query($con, $sql);

$userArray = mysqli_fetch_assoc($res);                        
?>

                        <form action="../../controllers/updateCheck.php" method="POST">
                            <fieldset>
                                <legend>My Profile</legend>

                                <table>
                                    <tr>
                                        <td><label for="users"><b>User Type:</b></label></td>
                                        <td><select name="users" value="<?=$userArray['users']?>">
                                                <option value="admin"
                                                    <?php if($userArray['users'] == "admin"){echo "selected";} ?>>Admin
                                                </option>
                                                <option value="teacher"
                                                    <?php if($userArray['users'] == "teacher"){echo "selected";} ?>>
                                                    Teacher
                                                </option>
                                                <option value="student"
                                                    <?php if($userArray['users'] == "student"){echo "selected";} ?>>
                                                    Student
                                                </option>
                                            </select></td>
                                    </tr>

                                    <tr>
                                        <td><label for="username"><b>Username:</b></label></td>
                                        <td><input type="text" name="username" value="<?=$userArray['username']?>"></td>
                                    </tr>

                                    <tr>
                                        <td><label for="name">Name:</label></td>
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
                                        <td><label for="dob"><b>Date of Birth:</b></label></td>
                                        <td><input type="date" name="dob" value="<?=$userArray['dob']?>"></td>
                                    </tr>

                                    <tr>
                                        <td><label for="gender"><b>Gender:</b></label></td>
                                        <!-- <td>
                                <input type="radio" name="gender" value="male"
                                    <?php if($userArray['gender'] == "male"){echo "checked";} ?>> Male
                                <input type="radio" name="gender" value="female"
                                    <?php if($userArray['gender'] == "female"){echo "checked";} ?>> Female
                                <input type="radio" name="gender" value="others"
                                    <?php if($userArray['gender'] == "others"){echo "checked";} ?>> Others
                            </td> -->

                                        <td><select name="gender" value="<?=$userArray['gender']?>">
                                                <option value="male"
                                                    <?php if($userArray['gender'] == "male"){echo "selected";} ?>>Male
                                                </option>
                                                <option value="female"
                                                    <?php if($userArray['gender'] == "female"){echo "selected";} ?>>
                                                    Female
                                                </option>
                                                <option value="others"
                                                    <?php if($userArray['gender'] == "others"){echo "selected";} ?>>
                                                    Othersss
                                                </option>
                                            </select>
                                        </td>

                                    </tr>

                                    <tr>
                                        <td><label for="address"><b>Address:</b></label></td>
                                        <td><input type="" name="address" value="<?=$userArray['address']?>"></td>
                                    </tr>

                                    <tr>
                                        <td><label for="password"><b>Password:</b></label></td>
                                        <td><input type="password" name="password" value="<?=$userArray['password']?>">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td><label for="cPassword"><b>Confirm Password:</b></label></td>
                                        <td><input type="password" name="cPassword"
                                                value="<?=$userArray['cpassword']?>">
                                        </td>
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
                                            <input type="submit" name="update" value="Update">
                                        </td>
                                    </tr>

                                </table>

                            </fieldset>
                        </form>

                    </td>
                </tr>
            </table>
        </center>

    </div>

</body>

</html>