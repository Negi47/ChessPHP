<?php include "includes/header.php" ?>

<div class="bg-img"></div>

<div class="login">
    <div class="divloginleft">
        <form action="" method ="POST" class="loginform" >
            <p class="log_text2">Sign In</p>

            <label class="log_text">Username or email</label>
            <input type="text" name="username" id="user">

            <label class="log_text">password</label>
            <input type="text" name="password" id="pswd">
            <hr>
            <!-- <input type="submit" name="submit" value="Sign in"><i class="material-icons"></i> -->
            <button type="submit" name="submit" onclick="return login()" class="btn signup_btn"><i class="material-icons left">input</i>Submit</button>
        </form>
    </div>
    
    <div class="divloginright">
        <p>New to Game</p>
        <button type="submit" class="btn register_btn"><i class="material-icons left">input</i> Register </button>
    </div>

</div>

<div id="show_error">
</div>

<?php include "includes/footer.php"?>


