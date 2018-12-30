<?php 
session_start();
require "dataconnect.php";
$dragfrom = $_POST['drag_from'];
$dropto = $_POST['drop_to'];
$dragele = $_POST['drag_ele'];
$uid = $_SESSION['uid'];
$gameid=$_SESSION['gameId'];

$insert_data = "insert into moves(uid,dragfrom,dropto,dragele, gameid) values('$uid','$dragfrom','$dropto','$dragele', '$gameid')";
if ($con->query($insert_data) == false)
    echo "error in insert" . $con->error;
?>