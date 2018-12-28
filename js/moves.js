var turn = 0
var row,col;
var node;
var black=16,white=16 ;
var validMoves=[];
var dragfrom, dropto, dragele;
var  whitetimeout, blacktimeout;
// var from,to,piece_id;
// var timeleft = 2*60;

//AJAX CODE FOR DISPLAY THE MOVES ONTO THE SAME PAGE
var xhttp = new XMLHttpRequest();

function forward() {
	console.log("foward moving");	
	xhttp.onreadystatechange = function() {
	
		if (this.readyState == 4 && this.status == 200) {
			
			var temp = this.responseText;
			console.log("Data coming: "+temp)	
			var from = temp.slice(0,4);
			var to = temp.slice(4,8);
			console.log("from : " + from + " to : " + to);
			
			var to_img = document.getElementById(to);
			var from_img = document.getElementById(from);
			var piece_id = document.getElementById(to_img.childNodes[0].id)
		
			console.log("to_img:" +to_img);
			console.log(from_img);
			console.log(piece_id);
			
			piece_id.remove(piece_id);
			from_img.appendChild(piece_id);

			console.log("delet: "+piece_id);

			// /console.log(from_img);
			//document.getElementById(to).style.background = "blue";
		}
	  };
	xhttp.open("GET", "./database/forward.php", true);
	xhttp.send();
	return false;
}


function send(dragfrom,dropto) {
	xhttp.onreadystatechange = function() {
	  if (this.readyState == 4 && this.status == 200) {
		// alert(this.responseText);
	  }
	  else {
		  console.log(this.statusText);
	  }
	};
	xhttp.open("POST", "./database/storemoves.php", true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send("drag_from="+dragfrom+"&drop_to="+dropto+"&drag_ele="+dragele);

	setTimeout(function(){ display(); }, 200);
	
}

//DISPLAY FUNCTION
function display() {
	console.log("displaying");

	var steps = document.getElementById("stepstable");
	xhttp.onreadystatechange = function() {
	
		if (this.readyState == 4 && this.status == 200) {
			steps.innerHTML = this.responseText;
			// var temp = this.responseText;
			// var from = temp.slice(4,8);
			// var to = temp.slice(16,20);
			// console.log("from : " + from + " to : " + to);
			// document.getElementById(from).style.background = "red";
			// document.getElementById(to).style.background = "blue";
		}
	  };
	xhttp.open("GET", "./database/display.php", true);
	xhttp.send();
}
//END OF AJAX

//FUNCTION FOR REFRESHING THE PAGE
// function indexrefresh() {
// 	if(confirm("If you refresh of leave this page you will lose the game"))
// 		window.location.replace("login.php");
// }

// function timeout(timeleft, flag)
// {
//     var minute=Math.floor(timeleft/60);
// 	var second=timeleft%60;
// 	// var flag = 0;

//     if(flag == 0)
//     {
//         // clearTimeout(timeout);
// 		document.getElementById('whitetime').innerHTML= minute+":"+second;
// 		console.log(minute + ":" + second);
// 		setTimeout(function() {
// 			if (timeleft > 0) {
// 				console.log("inside settimout " + minute + ":" + second);
// 				timeout(--timeleft, 0);
// 			}
// 			else
// 				timeout(30, 1);
// 		}, 1000);
//     }
//     else
//     {
//         document.getElementById('blacktime').innerHTML= minute+":"+second;
// 		var blacktimeout = setTimeout(function() {
// 			if (timeleft > 0) {
// 				timeout(--timeleft, 1);
// 			}
// 			else
// 				timeout(30, 0);
// 		}, 1000);
//     }
//     // timeleft--;
// }


//SETTING ATTRIBUTE 64 BOX
console.log('working');
for (var i=0; i<64; i++) {

	document.getElementsByClassName('box')[i].setAttribute("ondragover", "allowDrop(event)");
	document.getElementsByClassName('box')[i].setAttribute("ondrop","drop(event)");
	
	if(i<16)
	{	document.getElementsByClassName('black-piece')[i].setAttribute("ondragstart","drag(event)");
		document.getElementsByClassName('black-piece')[i].setAttribute("draggable","true");
		document.getElementsByClassName('white-piece')[i].setAttribute("draggable","true");
		document.getElementsByClassName('white-piece')[i].setAttribute("ondragstart","drag(event)");
	}
}

random_move()

function allowDrop(ev) {
  	ev.preventDefault();
    var node = ev.target.id;
}


// function goback(pre_dragfrom, pre_dropto) {

// 	document.getElementById(pre_dragfrom).style.color = "red !important";
// 	document.getElementById(pre_dropto).style.color = "blue !important";

// }


function drag(ev) {
	console.log("dragged from : " + ev.target.parentNode.id);
	drag_from = ev.target.parentNode.id;	

    var parent = document.getElementById(ev.target.parentNode.id);
	ev.dataTransfer.setData("text", ev.target.id);  
	console.log("dragged element : " + ev.target.id);
	drag_ele = ev.target.id;
	dragele = drag_ele;
	dragfrom = drag_from;
	if(ev.target.id.includes("w-p")||ev.target.id.includes("b-p"))
    {	
		validMoves=pawnMove(ev.target.parentNode.id)
	}
	else if (ev.target.id.includes("w-k")||ev.target.id.includes("b-k"))
    {
    	validMoves=kingMoves(ev.target.parentNode.id)
    }		
    else
    {
    	validMoves=elephantMove(ev.target.parentNode.id)
    }	
	console.log(validMoves)
}

// function timer() {
// 	console.log("timer working")
// 	var minute=Math.floor(timeleft/60);
//     var second=timeleft%60;
//     if(timeleft<=0)
//     {
//         clearTimeout(whitetimeout);
//         document.getElementById('timer').innerHTML= response.Text;
//     }
//     else
//     {
// 		clearTimeout(blacktimeout)
// 		document.getElementById('timer').innerHTML= minute+":"+second;
//     }
//     timeleft--;
//     setTimeout(function() {
//         timeout()
//     }, 1000);
// }

function drop(ev) {

	if(validMoves.includes(ev.target.id) || validMoves.includes(ev.target.parentNode.id))
	{
	
		ev.preventDefault();
		
		var drop_to = ev.target.id;
		
		
		console.log("dropp to : " + drop_to);
	//console.log("dropp to: "+ document.getElementById(drag_from).childNodes[0].id);

		var data = ev.dataTransfer.getData("text");
		console.log("drop data " + data);

		var droppedImg = document.getElementById(data);
		console.log("dropped img : " + droppedImg);

		var move = ev.target.appendChild(document.getElementById(data));
		var further_node = document.getElementById(ev.target.parentNode.id);

		console.log("move ele " + move);

		var child_node;

		if(further_node)
			child_node = document.getElementById(further_node.childNodes[0].id);

		console.log("child node " + child_node);

		if(further_node	!= null)
		{
			further_node.replaceChild(move,child_node)
		}
		if(turn==0)
		{	turn=1;
		}	
		else
		{	turn=0;
		}	
		
		dropto = drop_to;

		send(dragfrom,dropto,dragele);
		// forward();
		random_move();
		// timeout(30, 1);
	

	}
	else
	{
		alert("play valid move" +ev.target.id);
	}
}
function random_move()
{	if(turn==0)
	{	for(var i=0;i<16;i++)
		{	document.getElementsByClassName('black-piece')[i].setAttribute("draggable","false");
			document.getElementsByClassName('white-piece')[i].setAttribute("draggable","true");
		}
	}
	else
	{	for(var i=0;i<16;i++)
		{	document.getElementsByClassName('white-piece')[i].setAttribute("draggable","false");
			document.getElementsByClassName('black-piece')[i].setAttribute("draggable","true");
		}
	}	
}
