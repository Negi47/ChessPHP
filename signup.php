<?php 

include "includes/header.php";

if (isset($_POST['submit'])) {

    $all = "";
    $userError = "";

    if (empty($_POST['username']) || empty($_POST['password']) || empty($_POST['email'])) {
        $all = "please enter all details";
    }
    else {
        $user = $_POST['username'];
        $pswd = $_POST['password'];	
        $email = $_POST['email'];


        if( (strlen($user) < 5) || (strlen($pswd) < 5) ) {   
            
            $userError = "Username and password should be within 4 to 8 characters";

        }
        else {
            $insert_data = "insert into login(username,password,email) values('$user','$pswd','$email')";
    
            $con->query($insert_data);
    
            header("location: login.php");
        }


    }
}
?>

<div class="bg-img"></div>

<div class="signup">
    <div class="divsignupleft">
        <form action="" method ="POST" class="signupform" >
            <div style="display:flex; justify-content:space-between; margin-bottom: 15px;">
                <span >Register</span>
                <a href="login.php"><button type="button" class="btn register_btn"><i class="material-icons left">input</i> Login </button></a>
            </div>


            <?php 
                // if (isset($all))               {
                    if (!empty($all)) 
                        echo "<div>$all</div>";

                    if (!empty($userError)) 
                        echo "<div>$userError</div>";
                // }
                    
                // else if()
            ?>

            <label class="signup_text">Username</label>
            <p style="margin:0;"><small id="usernameError"></small></p>
            <input type="text" name="username" id="user" onkeyup="checkUsername()">

            <label class="signup_text">password</label>
            <input type="text" name="password" id="pswd">

            <label class="signup_text">Email</label>
            <p style="margin:0;"><small id="emailError"></small></p>
            <input type="text" name="email" id="email" onkeyup="checkEmail()">
            <hr>
            <!-- <button type="submit" name="submit" onclick="return signup()" class="btn signup_btn"><i class="material-icons left">input</i>Register</button> -->
            <button type="submit" name="submit" class="btn signup_btn"><i class="material-icons left">input</i>Register</button>
        </form>
    </div>
</div>

<?php include "includes/foot.php" ?>