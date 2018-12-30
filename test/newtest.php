<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript">
    var time;
    // var timeleft = 2*60;
    function yourFunction() {
    return "Refreshing page you will lost";
}
function timeout(timeleft)
{
    var minute=Math.floor(timeleft/60);
    var second=timeleft%60;
    if(timeleft<=0)
    {   
        console.log("shivupavithra")
    }
    else
    {
        document.getElementById('timer').innerHTML= minute+":"+second;
    }
    // timeleft--;
    time = setTimeout(function() {
        timeout(--timeleft);
    }, 1000);
}

function timestop(){

    clearTimeout(time);
   // reset();
}




</script>
</head>
<body onbeforeunload="return yourFunction()">
    
<script type="text/javascript">

</script>
<div id="timer">

</div>
<div class="div" id="stop">
<input type="button" value="stop" onclick="timestop()">
</div>
<div class="div" id="start">
    <input type="button" value="start" onclick="timeout(120)">
</div>
</body>
</html>