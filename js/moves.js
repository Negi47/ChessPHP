var turn = 0
var row,col;
var node;
var black=16,white=16 ;
var validMoves=[];
var dragfrom, dropto, dragele;
var  whitetimeout, blacktimeout;
var select=0;
var stopfun;
var gameId;


//AJAX CODE FOR DISPLAY THE MOVES ONTO THE SAME PAGE
var xhttp = new XMLHttpRequest();

function active() {
	var display = document.getElementById('usrdisplay');
	xhttp.onreadystatechange = function() {
		if(this.readyState == 4 && this.status == 200){
			display.innerHTML = this.responseText;
		}
	};
	xhttp.open("GET", "./database/useractive.php", true);
	xhttp.send();
	return false;
}
setInterval(function() {
	active();
},1000);

function rewind(rewindgame_id) {
	console.log("foward moving");	
	var steps = document.getElementById("stepstable");
	xhttp.onreadystatechange = function() {
	
		if (this.readyState == 4 && this.status == 200) {
			
			var temp = "";
			
			var data = JSON.parse(this.responseText);
			var tmpdata = data.data;
			

			console.log(tmpdata);

			tmpdata.forEach(element => {
				temp += element;
			});

			console.log("Data coming: "+temp)	
			var from = temp.slice(select,select+4);
			var to = temp.slice(select+4,select+8);
			select=select+8;
			console.log("select : " + select);
			console.log("from : " + from + " to : " + to);

			var from_img = document.getElementById(from);
			var to_img = document.getElementById(to);
			var piece_id = document.getElementById(from_img.childNodes[0].id);

			console.log("to_img:" +to_img);
			console.log(from_img);
			console.log(piece_id);
			
			piece_id.remove(piece_id);
			
			
			var fur_node = to_img.appendChild(piece_id);
			console.log("fur_node:" +fur_node);
			
			var parent = document.getElementById(to_img.id);

			console.log("parent moving: " +parent.id);
			if(parent)
			child = document.getElementById(parent.childNodes[0].id)
			if(parent != null)
			{
				parent.replaceChild(fur_node,child);
			}

			console.log("delet: "+piece_id);
		}
	  };
	  xhttp.open("POST", "./database/rewindmove.php");
	  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
	  xhttp.send("rewindgame_id=" + rewindgame_id);
}

function rewindgame(rewindgame_id) {

	console.log("rewind game id : " + rewindgame_id);
	
	xhttp.open("POST", "./database/rewindmove.php");
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
	xhttp.send("rewindgame_id=" + rewindgame_id);

	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {	
			
			var data = JSON.parse(this.responseText);
			console.log(data);

			var datacount = data.rowcount;
			console.log("count: "+datacount);
			var intervalID = setInterval(function () {
				
				if (--datacount <= -1) {
					window.clearInterval(intervalID);
					alert("no more rows");
				}
				rewind(rewindgame_id);
			}, 1000);
		}
	}
}

function backward() {
	console.log("backward moving");	
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
		}
	  };
	xhttp.open("GET", "./database/forward.php", true);
	xhttp.send();
	return false;
}

function forward() {
	console.log("foward moving");	
	xhttp.onreadystatechange = function() {
	
		if (this.readyState == 4 && this.status == 200) {
			
			var temp = this.responseText;
			console.log("Data coming: "+temp)	
			var from = temp.slice(0,4);
			var to = temp.slice(4,8);
			console.log("from : " + from + " to : " + to);
			
			var from_img = document.getElementById(from);
			var to_img = document.getElementById(to);
			var piece_id = document.getElementById(from_img.childNodes[0].id)
		
			console.log("to_img:" +to_img);
			console.log(from_img);
			console.log(piece_id);
			
			piece_id.remove(piece_id);
			to_img.appendChild(piece_id);

			console.log("delet: "+piece_id);
		}
	  };
	xhttp.open("GET", "./database/forward.php", true);
	xhttp.send();
	return false;
}

//DRAG FROM AND DROP DOWN SHOWN IN DIV
function send(dragfrom,dropto) {
	xhttp.onreadystatechange = function() {
	  if (this.readyState == 4 && this.status == 200) {
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
		}
	  };
	xhttp.open("GET", "./database/display.php", true);
	xhttp.send();
}
//END OF AJAX


//SETTING ATTRIBUTE 64 BOX
function startgame(show_my_id){

	console.log("fisrt game: "+gameid);
	
	xhttp.open("POST", "createGameId.php");
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send("gameid="+gameid);

	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200)
			gameId = this.responseText;
			show_my_id(gameId);
	}

	console.log("game id is : " + gameId);
	prepare_pieces();
	
}

function prepare_pieces(){
	random_move()
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
	timeout(30)
}
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

function drop(ev) {

	if(validMoves.includes(ev.target.id) || validMoves.includes(ev.target.parentNode.id))
	{
	
		ev.preventDefault();
		
		var drop_to = (ev.target.parentNode.id == "") ? ev.target.id : ev.target.parentNode.id;
		
		console.log("dropp to : " + drop_to + " drop_to_parent : " + ev.target.parentNode.id);

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
			var cap_pawn=further_node.childNodes[0].id;
			further_node.replaceChild(move,child_node)
			if(cap_pawn.includes("w-ki"))
			{
					alert("Black Wins");
			}	
			else if(cap_pawn.includes("b-ki"))
			{
					alert("White Wins")
			}	
		}
		if(turn==0)
		{	turn=1;
		}	
		else
		{	turn=0;
		}	
		
		dropto = drop_to;

		send(dragfrom,dropto,dragele);
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
