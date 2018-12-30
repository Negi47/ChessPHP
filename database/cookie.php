<!DOCTYPE html>
<form action="" method ="POST" class="loginform" >
            <p class="log_text2">Sign In</p>
            <div id="show_error"></div>

            <label class="log_text">Username or email</label>
            <input type="text" name="username" id="user">

            <label class="log_text">password</label>
            <input type="text" name="password" id="pswd">
            <hr>
            <input type="submit" name="submit">
        </form>



<?php
require "dataconnect.php";


$user = $_POST['user'];
$pswd = $_POST['pswd'];	

$search_data = "select *from login where username = '$user' and password = '$pswd'";

$search_result = $con->query($search_data);

if($search_result->num_rows > 0)
{
     while($user = $search_result->fetch_assoc()) {          
          
          $b = "hello";
          $cookie_name = "user";

          setcookie($cookie_name, $b);

     }

     echo "true";
}
else
{
     echo 'User name does not exist';
}	
?>
</body>
</html>