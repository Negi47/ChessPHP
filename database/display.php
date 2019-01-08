<?php
session_start();
require "dataconnect.php";
$uid = $_SESSION['uid'];
$gameid =$_SESSION['gameId'];
$show_moves = "select *from moves where uid=" . $uid . " and gameid='" . $gameid . "' ORDER BY id DESC";
$rslt = $con->query($show_moves);
    if($rslt->num_rows > 0)
    {
		while ($row=$rslt->fetch_assoc()) {
            echo "<tr>";
            echo "<td>";
            echo "" . $row['dragfrom'];
            echo "  </td>";
            echo "<td>";
            echo "" . $row['dropto'];
            echo "  </td>";
            echo "<td>";
            echo "" . $row['dragele'];
            echo "  </td>";
            echo "</tr>";       
    }
}


?>

