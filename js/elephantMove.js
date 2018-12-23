function elephantMove(pos)
{	
    var values=pos.split('');
	var row=values[1];
	var column=values[3];
	var moves=[];
	var j=0;
	var i=row;
	var id;
	while(i<8)
	{	id="r"+(++i)+"c"+column;
		if(document.getElementById(id).hasChildNodes() && (document.getElementById(pos).childNodes[0].className==document.getElementById(id).childNodes[0].className))
		{	
			break
		}	
		else
		{	moves[j++]=id;
		}	
	}
	i=row
	while(i>1)
	{	id="r"+(--i)+"c"+column;
		if(document.getElementById(id).hasChildNodes() && (document.getElementById(pos).childNodes[0].className==document.getElementById(id).childNodes[0].className))
		{
			break
		}	
		else
		{	moves[j++]=id;
		}	
	}
	console.log(moves);
	return moves
}