<?php

session_start();
setcookie("status", "true", time()-3600, "/");
setcookie("loggedName", $username, time()-3600, "/");
unset($_SESSION['status']);
header("location: ../views/login.php");

?>