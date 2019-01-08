<?php 
session_start();

require "database/dataconnect.php";

if (!isset($_SESSION['username']) && !isset($_SESSION['uid']))
exit(header("location: login.php"));

require "includes/onlineheader.php";

$rslt = $con->query("select lastlogin from login where uid=" . $_SESSION['uid']);
while ($row = $rslt->fetch_assoc())
    $lastlog = $row['lastlogin'];



$uid = $_SESSION['uid'];
$count_moves = "select *from game where uid=" . $uid;
$gamerslt = $con->query($count_moves);
    if($gamerslt->num_rows > 0)
    {
		while ($row=$gamerslt->fetch_assoc()) {
            
            $playedgame[] = $row['gameid'];
           
    }

    }


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
                    <li class="tab col s3"><a href="#games">Stored Games</a></li>
                    <li class="tab col s3"><a href="#activity">Activity</a></li>
                </ul>
            </div>
                <div id="games" class="col s12">

                <?php if (isset($playedgame)): ?>
            
                <ul>
                <?php foreach ($playedgame as $game): ?>
                    <li>
                        <a href="copyindex.php?gameid=<?= $game ?>">
                            User: <?= $_SESSION['uid'] ?> and gameid: <?= $game ?>
                        </a>
                    </li>
                <?php endforeach; ?>
                </ul>

                <?php else: ?>

                <div>No Game Played Yet</div>

                <?php endif; ?>
            
            </div>
            <div id="activity" class="col s12">
            
                <ul class=" activitylist">
                    <li> Last Login: <?= $lastlog ?> </li>
                </ul>
            
            </div>
        </div>

    </div>
    <!-- .profileContainer -->

</div>

<?php 

require "includes/foot.php";

?>