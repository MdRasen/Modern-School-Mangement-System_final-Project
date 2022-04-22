<?php

function reg($class_id, $class, $section, $room, $teacher, $phone, $email){
    $con = mysqli_connect('localhost', 'root', '', 'webtech');
    $sql = "insert into class_sections values('{$class_id}','{$class}', '{$section}', '{$room}', '{$teacher}', '{$phone}', '{$email}')";

    if(mysqli_query($con, $sql)){
    return true;
  }
    else{
    return false;
  }
}


function updatecs($class_id, $class, $section, $teacher, $phone, $email){

    $con = mysqli_connect('localhost', 'root', '', 'webtech');
    $sql = "update class_sections set class='$class', section='$section', teacher='$teacher', teacher_phone='$phone', teacher_email='$email' where class_id='$class_id'";

    if(mysqli_query($con, $sql)){
		return true;
	}
    else{
		return false;
	}

}

function deletecs($class_id){
  $con = mysqli_connect('localhost', 'root', '', 'webtech');
  $sql = "delete from class_sections where class_id='$class_id'";
  //$result = mysqli_query($con, $sql);

  if(mysqli_query($con, $sql)){

  return true;
}
  else{
  return false;
}
}

?>