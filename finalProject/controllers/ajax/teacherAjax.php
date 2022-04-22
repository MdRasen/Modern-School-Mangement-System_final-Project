<?php

$username = $_GET['username'];

$con = mysqli_connect('localhost', 'root', '', 'webtech');

$sql = "select * from users where username like '{$username}%' and users = 'teacher' and status = 'verified'";

$res = mysqli_query($con, $sql);

?>

<html>

    <center>
    <table border="1" class="teacher-table">
    <tr>
        <th style="width: 90px;">Username</th>
        <th style="width: 150px;">Name</th>
        <th style="width: 200px;">Email</th>
        <th style="width: 120px;">Phone</th>
        <th style="width: 120px;">Date Of Birth</th>
        <th style="width: 80px;">Gender</th>
        <th style="width: 100px;">Address</th>
    </tr>
    </table>
    </center>

</html>

<?php


while($userArray = mysqli_fetch_assoc($res)){

    ?>

    <html>
    <center>
    <table class="teacher-table" border="1">
        <tr>
            <td style="width: 90px;"><?=$userArray['username']?></td>
            <td style="width: 150px;"><?=$userArray['name']?></td>
            <td style="width: 200px;"><?=$userArray['email']?></td>
            <td style="width: 120px;"><?=$userArray['phone']?></td>
            <td style="width: 120px;"><?=$userArray['dob']?></td>
            <td style="width: 80px;"><?=$userArray['gender']?></td>
            <td style="width: 100px;"><?=$userArray['address']?></td>
        </tr>
    </table>
    </center>
    </html>
    
    <?php

}

?>