<?php 
session_start();

require "database/dataconnect.php";

if (isset($_POST['gameid'])) {
    $gameid=$_POST['gameid'];
    $uid = $_SESSION['uid'];

    $_SESSION['gameId'] = $gameid

    $con->query("insert into game(gameid, uid) values('$gameid', '$uid')");
    
    echo $_POST['gameid'];
}

?>