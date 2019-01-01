<?php
session_start();
require "dataconnect.php";

if (isset($_POST['gameid'])) {

    $gameid = $_POST['gameid'];

    $show_moves = "select * from moves where gameid='" . $gameid . "' ORDER BY id DESC";
    $rslt = $con->query($show_moves);
    $steps = array();
    if($rslt->num_rows > 0)
    {
        while ($row=$rslt->fetch_assoc()) {
     
            array_push($steps, $row);
        }    
    }
    
    
    $data = [
        'data' => $steps,
        'rowcount' => $rslt->num_rows
    ];
    
    echo json_encode($data);
}





?>

