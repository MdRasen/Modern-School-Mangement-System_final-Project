<?php
    require("../../controllers/header.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class/Sections List</title>

    <!-- External CSS Link -->
    <link rel="stylesheet" href="../../assets/css/adminClassList.css">

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
            <h1 style="color: #B8C6CC;">Class/Sections List</h1>
            <table border="2" style="width: 100%;">
                <tr>
                    <td style="width: 100%; padding: 20px;">

                        <html>
                        <center>
                            <table border="1" class="class-table">
                                <tr>
                                    <th style="width: 100px;">Class ID</th>
                                    <th style="width: 100px;">Class</th>
                                    <th style="width: 100px;">Section</th>
                                    <th style="width: 100px;">Room</th>
                                    <th style="width: 150px;">Teacher</th>
                                    <th style="width: 150px;">Teacher Phone</th>
                                    <th style="width: 200px;">Teacher Email</th>

                                </tr>
                            </table>
                        </center>

                        </html>

                        <?php
        $con = mysqli_connect('localhost', 'root', '', 'webtech');
        $sql = "select * from class_sections";
        $res = mysqli_query($con, $sql);
        
        while($csArray = mysqli_fetch_assoc($res)){    
?>
                        <html>
                        <center>
                            <table border="1" class="class-table">
                                <tr>
                                    <td style="width: 100px; "><?=$csArray['class_id']?></td>
                                    <td style="width: 100px; "><?=$csArray['class']?></td>
                                    <td style="width: 100px; "><?=$csArray['section']?></td>
                                    <td style="width: 100px; "><?=$csArray['room']?></td>
                                    <td style="width: 150px; "><?=$csArray['teacher']?></td>
                                    <td style="width: 150px; "><?=$csArray['teacher_phone']?></td>
                                    <td style="width: 200px; "><?=$csArray['teacher_email']?></td>
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

    <div class="class-search">

        <center>

            <form action="">

                <fieldset>
                    <legend>Search by Class ID</legend>

                    <label for="username"><b>Class ID</b></label>
                    <input type="text" placeholder="Enter Class ID" name="classId" onkeyup="showClass(this.value)">

                    <br>
                    <div id="txtHint">Details will be shown here...</div>

                </fieldset>
            </form>
        </center>

    </div>

    <!-- External Js Link -->
    <script src="../../assets/js/classList.js"></script>

</body>

</html>