<?php

function login($user, $username, $password){

    $con = mysqli_connect('localhost', 'root', '', 'webtech');
    $sql = "select * from users where users = '{$user}' and username = '{$username}' and password = '{$password}' and status = 'verified'";

    $result = mysqli_query($con, $sql);

    if(mysqli_num_rows($result)){
        return true;
    }

    else{
        return false;
    }

}

function reg($users, $username, $name, $email, $phone, $dob, $gender, $address, $password, $cpassword){

    $con = mysqli_connect('localhost', 'root', '', 'webtech');
    $sql = "insert into users values('{$users}','{$username}', '{$name}', '{$email}', '{$phone}', '{$dob}', '{$gender}', '{$address}','{$password}', '{$cpassword}', 'unverified')";

    if(mysqli_query($con, $sql)){
		return true;
	}
    else{
		return false;
	}

}

function update($username, $action){

    $con = mysqli_connect('localhost', 'root', '', 'webtech');
    $sql = "update users set status='$action' where username='$username'";

    //$result = mysqli_query($con, $sql);

    if(mysqli_query($con, $sql)){
		return true;
	}
    else{
		return false;
	}

}

function updateUser($user, $username, $name, $email, $phone, $dob, $gender, $address, $password, $confirmPass, $action){

    $con = mysqli_connect('localhost', 'root', '', 'webtech');
    $sql = "update users set users='$user', name='$name', email='$email', phone='$phone', dob='$dob', gender='$gender',address='$address', password='$password', cpassword='$confirmPass', status='$action' where username='$username'";

    //$result = mysqli_query($con, $sql);

    if(mysqli_query($con, $sql)){

		return true;
	}
    else{
		return false;
	}

}

function deleteUser($username){

  $con = mysqli_connect('localhost', 'root', '', 'webtech');
  $sql = "delete from users where username='$username'";
  //$result = mysqli_query($con, $sql);

  if(mysqli_query($con, $sql)){

  return true;
}
  else{
  return false;
}

}

?>