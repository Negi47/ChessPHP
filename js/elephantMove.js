function elephantMove(pos)
{	var values=pos.split('');
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
			if(document.getElementById(id).hasChildNodes())
			{
				break;
			}	
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
			if(document.getElementById(id).hasChildNodes())
			{
				break;
			}
		}	
	}
	i=column
	while(i<8)
	{	id="r"+row+"c"+(++i);
		if(document.getElementById(id).hasChildNodes() && (document.getElementById(pos).childNodes[0].className==document.getElementById(id).childNodes[0].className))
		{	
			break
		}	
		else
		{	
			moves[j++]=id;
			if(document.getElementById(id).hasChildNodes())
			{
				break;
			}
		}	
	}
	i=column
	while(i>1)
	{	id="r"+row+"c"+(--i);
		if(document.getElementById(id).hasChildNodes() && (document.getElementById(pos).childNodes[0].className==document.getElementById(id).childNodes[0].className))
		{
			break
		}	
		else
		{	moves[j++]=id;
			if(document.getElementById(id).hasChildNodes())
			{
				break;
			}
		}	
	}
	console.log(moves);
	return moves
}
function pawnMove(pos)
{	var values=pos.split('');
	var row=values[1];
	var column=values[3];
	var moves=[];
	i=row;
	j=0;
	console.log(document.getElementById(pos).childNodes[0].className)
	if(document.getElementById(pos).childNodes[0].className=="white-piece")
	{	id="r"+(++i)+"c"+column;
		if(!document.getElementById(id).hasChildNodes())
			moves[j++]=id;
		if(row=='2')
		{	id="r"+(++i)+"c"+column;
			if(!document.getElementById(id).hasChildNodes())
				moves[j++]=id
		}
		row++;
		id="r"+(row)+"c"+(++column);
		console.log(id)
		if(column<=8 && document.getElementById(id).hasChildNodes())
		{	if(document.getElementById(id).childNodes[0].className=="black-piece")
			{	moves[j++]=id;
			}
		}
		column--
		id="r"+(row)+"c"+(--column);
		if(column>=1 && document.getElementById(id).hasChildNodes() && document.getElementById(id).childNodes[0].className=="black-piece")
			moves[j++]=id;

	}
	i=row
	if(document.getElementById(pos).childNodes[0].className=="black-piece")
	{	id="r"+(--i)+"c"+column;
		if(!document.getElementById(id).hasChildNodes())
			moves[j++]=id;
		if(row=='7')
		{	id="r"+(--i)+"c"+column;
			if(!document.getElementById(id).hasChildNodes())
				moves[j++]=id
		}
		row--;
		id="r"+(row)+"c"+(++column);
		console.log(id)
		if(id<=8 && document.getElementById(id).hasChildNodes())
		{	if(document.getElementById(id).childNodes[0].className=="white-piece")
			{	moves[j++]=id;
			}
		}
		column--
		id="r"+(row)+"c"+(--column);
		if(document.getElementById(id).hasChildNodes() && document.getElementById(id).childNodes[0].className=="white-piece")
			moves[j++]=id;
	}	
	return moves;

}

function kingMoves(pos)
{
	var values=pos.split('');
	var row=values[1];
	var column=values[3];
	var moves=[];
	j=0;
	id=id="r"+(row)+"c"+(--column);
	if(column>0)
	{
		if(!document.getElementById(id).hasChildNodes()||(document.getElementById(id).childNodes[0].className!=document.getElementById(pos).childNodes[0].className))
		{
			moves[j++]=id;
		}	
	} 
	column++;
	id=id="r"+(row)+"c"+(++column);
	if(column<=8)
	{
		if(!document.getElementById(id).hasChildNodes()||(document.getElementById(id).childNodes[0].className!=document.getElementById(pos).childNodes[0].className))
		{
			moves[j++]=id;
		}
	}	
	column--;
	id=id="r"+(--row)+"c"+(column);
	if(row>0)
	{
		if(!document.getElementById(id).hasChildNodes()||(document.getElementById(id).childNodes[0].className!=document.getElementById(pos).childNodes[0].className))
		{
			moves[j++]=id;
		}
	}	
	row++;
	id=id="r"+(++row)+"c"+(column);
	if(row<=8)
	{
		if(!document.getElementById(id).hasChildNodes()||(document.getElementById(id).childNodes[0].className!=document.getElementById(pos).childNodes[0].className))
		{
			moves[j++]=id;
		}
	}

	row=values[1];
	column=values[3];
	id=id="r"+(++row)+"c"+(--column);
	if(row<=8 && column>0)
	{
		if(!document.getElementById(id).hasChildNodes()||(document.getElementById(id).childNodes[0].className!=document.getElementById(pos).childNodes[0].className))
		{
			moves[j++]=id;
		}
	}
	column++;
	id=id="r"+(row)+"c"+(++column);
	if(row<=8 && column<=8)
	{
		if(!document.getElementById(id).hasChildNodes()||(document.getElementById(id).childNodes[0].className!=document.getElementById(pos).childNodes[0].className))
		{
			moves[j++]=id;
		}
	}
	row=values[1];
	column=values[3];
	id=id="r"+(--row)+"c"+(--column);
	if(row>0 && column>0)
	{
		if(!document.getElementById(id).hasChildNodes()||(document.getElementById(id).childNodes[0].className!=document.getElementById(pos).childNodes[0].className))
		{
			moves[j++]=id;
		}
	}
	column++;
	id=id="r"+(--row)+"c"+(++column);
	if(row>0 && column<=8)
	{
		if(!document.getElementById(id).hasChildNodes()||(document.getElementById(id).childNodes[0].className!=document.getElementById(pos).childNodes[0].className))
		{
			moves[j++]=id;
		}
	}
	return moves;
}