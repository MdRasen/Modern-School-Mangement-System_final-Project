<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>

    <!-- External CSS Link -->
    <link rel="stylesheet" href="../assets/css/registration.css">

</head>

<body>

    <div class="registration-page">

        <table>
            <td style="width: 35%;">

            </td>

            <td style="width: 30%;">

                <h3>Registration Form</h3>

                <form action="../controllers/regCheck.php" method="POST">
                    <div class="container">

                        <label for="users"><b>User Type</b></label>
                        <select name="users">
                            <option value="admin">Admin</option>
                            <option value="teacher">Teacher</option>
                            <option value="student">Student</option>
                        </select>
                        <label for="username"><b>Username</b></label>
                        <input type="text" placeholder="Enter Username" name="username" id="username" onkeyup="uCheck()"
                            required>

                        <div class="uError"></div>

                        <label for="name"><b>Name</b></label>
                        <input type="text" placeholder="Enter Name" name="name" id="name" onkeyup="nCheck()" required>

                        <div class="nError"></div>

                        <label for="email"><b>Email</b></label>
                        <input type="email" placeholder="Enter Email" name="email" id="email" onkeyup="eCheck()"
                            required>

                        <div class="eError"></div>

                        <label for="phone"><b>Phone</b></label>
                        <input type="phone" placeholder="Enter Phone" name="phone" id="phone" onkeyup="pCheck()"
                            required>

                        <div class="pError"></div>

                        <label for="dob"><b>Date Of Birth</b></label>
                        <input type="date" placeholder="Enter Date Of Birth" name="dob" id="dob" onkeyup="dCheck()"
                            required>

                        <div class="dError"></div>

                        <label for="gender"><b>Gender</b></label>

                        <select name="gender" id="gender" required>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="others">Others</option>
                        </select>

                        <label for="address"><b>Address</b></label>
                        <input type="text" placeholder="Enter Address" name="address" id="address" onkeyup="aCheck()"
                            required>

                        <div class="aError"></div>

                        <label for="password"><b>Password</b></label>
                        <input type="password" placeholder="Enter Password" name="password" id="password"
                            onkeyup="passCheck()" required>

                        <div class="passError"></div>

                        <label for="cpassword"><b>Confirm Password</b></label>
                        <input type="password" placeholder="Confirm Password" name="cpassword" id="cpassword"
                            onkeyup="cpassCheck()" required>

                        <div class="cpassError"></div>

                        <div class="error">
                            <?php

                        if(!empty($_REQUEST["error"])){

                            $error = $_REQUEST["error"];
                                if($error == "notmatching"){
                                echo "Passwords does not match!";
                        }

                        }

                        ?>
                        </div>

                        <button type="submit" name="register">Register</button>
                        <button type="back" name="back"><a href="login.php">Return Back</a></button>

                    </div>
                </form>

            </td>

            <td style="width: 35%;">

            </td>
        </table>

    </div>


    <!-- External Js Link -->
    <script src="../assets/js/registration.js"></script>

</body>

</html>