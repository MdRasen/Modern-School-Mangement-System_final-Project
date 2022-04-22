<?php 
	$data = $_POST['data'];
	$json = json_decode($data);

	echo $json->task;
?>