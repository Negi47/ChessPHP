var xhttp = new XMLHttpRequest();


// function signup(){
//     var user = document.getElementById('user').value;
//     var pswd = document.getElementById('pswd').value;
//     var email = document.getElementById('email').value;

//     console.log("user ab: "+user);
//     var xhttp = new XMLHttpRequest();
//     if(user =="" || pswd =="" || email =="")
//     {
//         // console.log("Please Enter all the data");
//         document.getElementById("Error").innerText = "Please Enter all data";
//     }
//     else
//     {
//         // console.log("user: "+user)
//         // xhttp.onreadystatechange = function() {
	
//         //     if (this.readyState == 4 && this.status == 200) {
//         //             window.location.replace("login.php");
//         //     }
//         //   };
//         //   xhttp.open("POST", "./database/user_register.php", true);
//         //   xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
//         //   xhttp.send("user="+user+"&pswd="+pswd+"&email="+email);
//     }
//     return false;
// }

function checkUsername() {
    var xhttp = new XMLHttpRequest();

    var username = document.getElementById("user").value;

    console.log("username :" + username);

    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("usernameError").innerHTML = this.responseText;
            // console.log(this.responseText);
        }

    };

    xhttp.open("POST","./database/chkdata.php",true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("uname="+username);


}


function checkEmail() {
    var xhttp = new XMLHttpRequest();

    var email = document.getElementById("email").value;

    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("emailError").innerHTML = this.responseText;
            // console.log(this.responseText);
        }

    };

    xhttp.open("POST","./database/chkdata.php",true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("email="+email);


}
