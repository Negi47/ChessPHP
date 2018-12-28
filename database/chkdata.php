<?php 

require "dataconnect.php";

if (isset($_POST['uname'])) {

    $uname = $_POST['uname'];
    $rslt = $con->query("select * from login where username='" . $uname . "'");
    $rows = $rslt->num_rows;
    if ($rows > 0)
        echo "Username already exist";
    else
        echo "Username Availabel";

}


if (isset($_POST['email'])) {

    $email = $_POST['email'];
    $rslt = $con->query("select * from login where email='" . $email . "'");
    $rows = $rslt->num_rows;
    if ($rows > 0)
        echo "Email already exist";
    else
        echo "Email Availabel";

}

?>