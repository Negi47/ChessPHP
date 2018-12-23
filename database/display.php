<?php
require "dataconnect.php";
$show_moves = "select *from moves ORDER BY id DESC";
$rslt = $con->query($show_moves);
    if($rslt->num_rows > 0)
    {
		while ($row=$rslt->fetch_assoc()) {
            // printf("%s \n",$ob['modelno']);
            // $data[] = $row;
            echo "<br>" . $row['dragfrom'];
    }
    
    // echo json_encode($data);
    }


?>

