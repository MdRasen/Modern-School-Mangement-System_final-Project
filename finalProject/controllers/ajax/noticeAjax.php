<?php

$noticeId = $_GET['noticeId'];

$con = mysqli_connect('localhost', 'root', '', 'webtech');

$sql = "select * from notices where notice_id like '{$noticeId}%' ";

$res = mysqli_query($con, $sql);

?>

<html>

    <center>
    <table border="1" class="notice-table">
    <tr>
        <th style="width: 80px;">Notice ID</th>
        <th style="width: 250px;">Title</th>
        <th style="width: 90px;">Recipient</th>
        <th style="width: 90px;">Date</th>
        <th style="width: 400px;">Notice</th>
    </tr>
    </table>
    </center>

</html>

<?php

while($noticeArray = mysqli_fetch_assoc($res)){

    ?>

    <html>
    <center>
    <table class="notice-table" border="1">
        <tr>
            <td style="width: 80px; "><?=$noticeArray['notice_id']?></td>
            <td style="width: 250px; "><?=$noticeArray['notice_title']?></td>
            <td style="width: 90px; "><?=$noticeArray['recipient']?></td>
            <td style="width: 90px; "><?=$noticeArray['date']?></td>
            <td style="width: 400px; "><?=$noticeArray['notice']?></td>
        </tr>
    </table>
    </center>
    </html>
    
    <?php

}

?>