<?php 
require "dataconnect.php";
$dragfrom = $_POST['drag_from'];
$dropto = $_POST['drop_to'];
$insert_data = "insert into moves(dragfrom,dropto) values('$dragfrom','$dropto')";
$con->query($insert_data);
echo "inserted " . $dragfrom;
?>