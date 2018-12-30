<?php
session_start();
require "dataconnect.php";
$uid = $_SESSION['uid'];
$show_moves = "select *from moves where uid=" . $uid;
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
        
  

?>

