<?php
session_start();
require "dataconnect.php";
$uid = $_SESSION['uid'];
$show_moves = "select *from game where uid=" . $uid;
$rslt = $con->query($show_moves);
    if($rslt->num_rows > 0)
    {
		while ($row=$rslt->fetch_assoc()) { 
            echo "<br> uid = " . $row['uid'] . " and game id : " . $row['gameid'];     
        }
    }

?>

