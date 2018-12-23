var turn = 0
var row,col;
var node;
var black=16,white=16 ;
var validMoves=[];
var dragfrom, dropto, dragele;

//AJAX CODE FOR DISPLAY THE MOVES ONTO THE SAME PAGE
var xhttp = new XMLHttpRequest();

function send(dragfrom) {
	xhttp.onreadystatechange = function() {
	  if (this.readyState == 4 && this.status == 200) {
		alert(this.responseText);
	  }
	  else {
		  console.log(this.statusText);
	  }
	};
	xhttp.open("POST", "./database/storemoves.php");
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send("drag_from="+dragfrom);

	display();
}

function display() {
	console.log("displaying");

	var steps = document.getElementById("stepsshow");
	xhttp.onreadystatechange = function() {
	
		if (this.readyState == 4 && this.status == 200) {
			steps.innerHTML = this.responseText;
			var temp = this.responseText;
			var from = temp.slice(4,8);
			var to = temp.slice(16,20);
			console.log("from : " + from + " to : " + to);
			document.getElementById(from).style.background = "red";
			document.getElementById(to).style.background = "blue";
		}
	  };
	xhttp.open("GET", "./database/display.php", true);
	xhttp.send();
}
//END OF AJAX

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

function drag(ev) {
	console.log("dragged from : " + ev.target.parentNode.id);
	drag_from = ev.target.parentNode.id; 
    var parent = document.getElementById(ev.target.parentNode.id);
	ev.dataTransfer.setData("text", ev.target.id);  
	console.log("dragged element : " + ev.target.id);
	drag_ele = ev.target.id;
	dragfrom = drag_from;
	validMoves = elephantMove(ev.target.parentNode.id);
}

function drop(ev) {

	if(validMoves.includes(ev.target.id) || validMoves.includes(ev.target.parentNode.id))
	{
	
		ev.preventDefault();
		
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
		send(dragfrom);
		random_move();
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
