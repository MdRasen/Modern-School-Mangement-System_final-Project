<?php

function updateFileDetails($class_id, $class, $section, $file_name){
    $con = mysqli_connect('localhost', 'root', '', 'webtech');
    $sql = "insert into class_routine values('{$class_id}','{$class}', '{$section}', '{$file_name}')";

    if(mysqli_query($con, $sql)){
		return true;
	}
    else{
		return false;
	}
}

?>