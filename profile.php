<?php 

require "database/dataconnect.php";

require "includes/header.php";

$rslt = $con->query("select lastlogin from login where uid=" . $_SESSION['uid']);
while ($row = $rslt->fetch_assoc())
    $lastlog = $row['lastlogin'];





?>

<div class="container">
    <h5 style="margin-top: 20px; margin-bottom:20px;"> 
        <span class="valign-wrapper">
        <i class="material-icons small" style="color:green;">fiber_manual_record</i>
        <?= $_SESSION['username'] ?> 
        </span>
    </h5>

    <div class="profileContainer">

        <div class="row">
            <div class="col s12">
                <ul class="tabs">
                    <li class="tab col s3"><a class="active" href="#followers">Followers</a></li>
                    <li class="tab col s3"><a href="#followings">Followings</a></li>
                    <li class="tab col s3"><a href="#games">Games</a></li>
                    <li class="tab col s3"><a href="#activity">Activity</a></li>
                </ul>
            </div>
            <div id="followers" class="col s12">Test 1</div>
            <div id="followings" class="col s12">Test 2</div>
            <div id="games" class="col s12">Test 3</div>
            <div id="activity" class="col s12">
            
                <ul class=" activitylist">
                    <li> <?= $lastlog ?> </li>
                </ul>
            
            </div>
        </div>

    </div>
    <!-- .profileContainer -->

</div>


<?php 

require "includes/foot.php";

?>