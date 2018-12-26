<?php include "includes/header.php" ?>

<div class="bg-img"></div>

<div class="signup">
    <div class="divsignupleft">
        <form action="" method ="POST" class="signupform" >
            <p class="log_text2">Register 
                <button type="submit" class="btn register_btn"><i class="material-icons left">input</i> Register </button>
            </p>

            <label class="signup_text">Username</label>
            <input type="text" name="username" id="user">

            <label class="signup_text">password</label>
            <input type="text" name="password" id="pswd">

            <label class="signup_text">Email</label>
            <input type="text" name="emailid" id="email">
            <hr>
            <button type="submit" name="submit" onclick="return signup()" class="btn signup_btn"><i class="material-icons left">input</i>Register</button>
        </form>
    </div>
</div>

<?php include "includes/foot.php" ?>