<?php
    require "dataconnect.php";
        
        $sql = "Select * from login";
    
        $result = $con->query($sql);
    
        if($result->num_rows > 0)
        {
            while($data = $result->fetch_assoc())
            {
                $activeList[] = $data;
            }
        }
?>

<ul id="usrdisplay" style="padding:15px;">

    <?php foreach ($activeList as $active): ?>

        <li>
            <p class="activeLists">
                <?= $active['username'] ?> 
                <span class='valign-wrapper'>
                <?php 
                    if($active['active'] == 'active')
                        echo "<i class='material-icons tiny' style='color:green'>fiber_manual_record</i>";
                    else
                        echo "<i class='material-icons tiny' style='color:grey'>fiber_manual_record</i>";
                ?>
                </span>
            </p>    
        </li>

    <?php endforeach; ?>
    
</ul>