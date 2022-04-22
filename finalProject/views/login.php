<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>

    <!-- External CSS Link -->
    <link rel="stylesheet" href="../assets/css/login.css">

</head>

<body>

    <div class="login-page">

        <table>
            <td style="width: 35%;">

            </td>

            <td style="width: 30%;">

                <h2>Login Form</h2>

                <form action="../controllers/loginCheck.php" method="POST">
                    <div class="container">

                        <label for="users"><b>User Type</b></label>
                        <select name="users">
                            <option value="admin">Admin</option>
                            <option value="teacher">Teacher</option>
                            <option value="student">Student</option>
                        </select>
                        <label for="uname"><b>Username</b></label>
                        <input type="text" placeholder="Enter Username" name="username" id="username" onkeyup="uCheck()"
                            required>

                        <div class="uError"></div>

                        <label for="password"><b>Password</b></label>
                        <input type="password" placeholder="Enter Password" name="password" id="password"
                            onkeyup="pCheck()" required>

                        <div class="pError"></div>

                        <div class="error">
                            <?php

                        if(!empty($_REQUEST["error"])){

                            $error = $_REQUEST["error"];
                                if($error == "incorrect"){
                                echo "Incorrect Username/Password";

                                header('Refresh: 3; URL=../views/login.php');
                        }

                        }

                    ?>
                        </div>

                        <button type="submit" name="login" onclick="Check()">Login</button>
                        <button> <a href="registration.php">Create an account?</a> </button>
                    </div>

                </form>

            </td>

            <td style="width: 35%;">

            </td>
        </table>

    </div>

    <!-- External Js Link -->
    <script src="../assets/js/login.js"></script>

</body>

</html>