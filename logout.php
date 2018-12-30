<?php 
session_start();

setcookie("username", "", time() - 3600);

require "./database/dataconnect.php";

$con->query("update login set active='not active' where uid='" . $_SESSION['uid'] . "'");	

unset($_SESSION['username']);
unset($_SESSION['uid']);


session_destroy();

header("Location: login.php");

?>