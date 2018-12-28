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

<body style="background-image:url(Images/board-background.png)" onclick="gotopage()">

    <div class="homeContainer valign-wrapper">
        <div style="width:100%" class="center">
        <img src="Images/b-pawn.png" alt="">
        </div>
        <div style="width:100%;">
        <h5 class="center">Tactical</h5>
        </div>
    </div>

    <script>
        function gotopage() {
            window.location.replace("login.php");
        }
    </script>
    
</body>
</html>

