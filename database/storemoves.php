<?php 
require "dataconnect.php";
$dragfrom = $_POST['drag_from'];
$insert_data = "insert into moves(dragfrom) values('". $dragfrom . "')";
$con->query($insert_data);
echo "inserted " . $dragfrom;
?>