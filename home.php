<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/home.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>

<body style="background-image:url(Images/background.jpg)">

    <div style="position:absolute; height: 100%; width: 100%;" onclick="gotopage()"><br>
    <h5 class="homeTag" style="font-size: 70px; margin-top:20%;">Tactical</h5>
    </div>

    <script>
        function gotopage() {
            console.log("working");
            window.location.replace("login.php");
        }
    </script>
    
</body>
</html>

