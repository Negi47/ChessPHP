function login(e){
    e.preventDefault();
    var user = document.getElementById('user').value;
    var pswd = document.getElementById('pswd').value;

    console.log("user ab: "+user);
    var xhttp = new XMLHttpRequest();
    if(user =="" || pswd =="")
    {
        console.log("Please Enter the data")
    }
    else
    {
        console.log("user: "+user)
        xhttp.onreadystatechange = function() {
	
            if (this.readyState == 4 && this.status == 200) {
                if (this.responseText == "true")
                    window.location.replace("./play.php");
                else
                    document.getElementById("show_error").innerHTML = this.responseText;
            }
          };
          xhttp.open("POST", "./database/chkuser.php", true);
          xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
          xhttp.send("user="+user+"&pswd="+pswd);
    }
    return false;
}
