<?php
session_start();

$localhost = "localhost";
$username = "root";
$password = "";
$data_base = "practice";
$con = new mysqli($localhost, $username, $password,$data_base);
$duration = "";
$show_moves = "select *from timertest";
$rslt = $con->query($show_moves);
    if($rslt->num_rows > 0)
    {
		while ($row=$rslt->fetch_assoc()) {
            echo "" . $row['duration'];
            $duration = $row['duration'];
        }
    }

    $_SESSION["duration"] = $duration;
    $_SESSION["start_time"]= date("Y-m-d H:i:s");

    $end_time = date("Y-m-d H:i:s" ,strtotime('+'.$_SESSION["duration"].'minutes', strtotime($_SESSION["start_time"])));
    $_SESSION["end_time"] =$end_time;
?>
<script type="text/javascript">
window.location="test3.php";
</script>
