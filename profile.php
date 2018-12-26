<?php 
require "includes/header.php";


?>


<div class="container">

    <h5> <?= $_SESSION['username'] ?> </h5>

    <div class="profileContainer">

    <div class="row">
        <div class="col s12">
            <ul class="tabs">
                <li class="tab col s3"><a class="active" href="#followers">Followers</a></li>
                <li class="tab col s3"><a href="#followings">Followings</a></li>
                <li class="tab col s3"><a href="#games">Games</a></li>
            </ul>
        </div>
        <div id="followers" class="col s12">Test 1</div>
        <div id="followings" class="col s12">Test 2</div>
        <div id="games" class="col s12">Test 3</div>
    </div>

    </div>
    <!-- .profileContainer -->

</div>


<?php 

require "includes/footer.php";

?>