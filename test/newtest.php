<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript">
function timeout()
{
    var minute=Math.floor(timeleft/60);
    var second=timeleft%60;
    if(timeleft<=0)
    {
        clearTimeout(timeout);
        document.getElementById('timer').innerHTML= response.Text;
    }
    else
    {
        document.getElementById('timer').innerHTML= minute+":"+second;
    }
    timeleft--;
    setTimeout(function() {
        timeout()
    }, 1000);
}
</script>
</head>
<body onload ="timeout()">
    
<script type="text/javascript">
var timeleft = 2*60;
</script>
<div id="timer">

</div>
</body>
</html>