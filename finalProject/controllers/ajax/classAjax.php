<?php

$classId = $_GET['classId'];

$con = mysqli_connect('localhost', 'root', '', 'webtech');

$sql = "select * from class_sections where class_id like '{$classId}%'";

$res = mysqli_query($con, $sql);

?>

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


while($csArray = mysqli_fetch_assoc($res)){

    ?>

    <html>
    <center>
    <table class="class-table" border="1">
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