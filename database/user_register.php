<?php

require "dataconnect.php";

    
    if (isset($_POST['submit'])) {

        if (isset($_POST['user']) || isset($_POST['pswd']) || isset($_POST['email'])) {
            echo "please fill all the details";
        }
        else {
            $user = $_POST['user'];
            $pswd = $_POST['pswd'];	
            $email = $_POST['email'];
            $insert_data = "insert into login(username,password,email) values('$user','$pswd','$email')";

            $con->query($insert_data);

            header("location: login.php");
        }
    }
    
?>