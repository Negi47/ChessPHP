function signup(){
    var user = document.getElementById('user').value;
    var pswd = document.getElementById('pswd').value;
    var email = document.getElementById('email').value;

    console.log("user ab: "+user);
    var xhttp = new XMLHttpRequest();
    if(user =="" || pswd =="" || email =="")
    {
        console.log("Please Enter all the data");
    }
    else
    {
        console.log("user: "+user)
        xhttp.onreadystatechange = function() {
	
            if (this.readyState == 4 && this.status == 200) {
                    window.location.replace("login.php");
            }
          };
          xhttp.open("POST", "./database/user_register.php", true);
          xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
          xhttp.send("user="+user+"&pswd="+pswd+"&email="+email);
    }
    return false;
}
