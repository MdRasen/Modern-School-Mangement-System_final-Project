<?php

function updateNotice($notice_id, $title, $recipient, $date, $notice){
    $con = mysqli_connect('localhost', 'root', '', 'webtech');
    $sql = "insert into notices values('{$notice_id}','{$title}', '{$recipient}', '{$date}', '{$notice}')";

    if(mysqli_query($con, $sql)){
		return true;
	}
    else{
		return false;
	}
}

function updatepreNotice($notice_id, $title, $recipient, $date, $notice){
  $con = mysqli_connect('localhost', 'root', '', 'webtech');
  $sql = "update notices set notice_id='$notice_id', notice_title='$title', recipient='$recipient', date='$date', notice='$notice' where notice_id='$notice_id'";

  if(mysqli_query($con, $sql)){
  return true;
}
  else{
  return false;
}
}

function deleteNotice($notice_id){
  $con = mysqli_connect('localhost', 'root', '', 'webtech');
  $sql = "delete from notices where notice_id='$notice_id'";
  //$result = mysqli_query($con, $sql);

  if(mysqli_query($con, $sql)){

  return true;
}
  else{
  return false;
}
}

?>