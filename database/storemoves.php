<?php 
session_start();
require "dataconnect.php";
$dragfrom = $_POST['drag_from'];
$dropto = $_POST['drop_to'];
$dragele = $_POST['drag_ele'];
$uid = $_SESSION['uid'];

// $insert_data = "insert into moves(uid) values('$uid')";
$insert_data = "insert into moves(uid,dragfrom,dropto,dragele) values('$uid','$dragfrom','$dropto','$dragele')";
if ($con->query($insert_data) == false)
    echo "error in insert" . $con->error;
?>