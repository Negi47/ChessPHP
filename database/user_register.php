<?php

require "dataconnect.php";

    
    $user = $_POST['user'];
    $pswd = $_POST['pswd'];	
    $email = $_POST['email'];


    $insert_data = "insert into login(username,password,email) values('$user','$pswd','$email')";

    $res = $con->query($insert_data)
    
?>