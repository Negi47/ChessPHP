<?php
session_start();
require "dataconnect.php";

if (isset($_POST['rewindgame_id'])) {

    $uid = $_SESSION['uid'];
    $rewindgame_id = $_POST['rewindgame_id'];

    $show_moves = "select *from moves where uid='" . $uid. "' and gameid='" . $rewindgame_id . "'";
    $rslt = $con->query($show_moves);
    
    if($rslt->num_rows > 0)
    {
        while ($row=$rslt->fetch_assoc()) {
        // echo "" . $row['dragfrom'];
        // echo "" . $row['dropto'];
        
            $steps[] = $row['dragfrom'] . $row['dropto'];
        }    
    }
    
    
    $data = [
        'data' => $steps,
        'rowcount' => $rslt->num_rows
    ];
    
    echo json_encode($data);
}





?>

