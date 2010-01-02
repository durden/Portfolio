function setContentWidth(pageType)
{
	if(pageType)
	{ document.getElementById('content').style.width = 500 + 'px';	}	// mozilla has to have 'px'
}

function setSidebarHeight()
{
	var content_height = document.getElementById('content').offsetHeight;
	var sidebar_height = document.getElementById('sidebar').offsetHeight;
	
	if( parseInt(content_height) > parseInt(sidebar_height))
		document.getElementById('sidebar').style.height = content_height + 'px';	
}

function confirmDel(msgId)
{
	var msg = "";
	
	switch(msg)
	{
		case 0:
			msg = "Are you sure you want to delete this blog?";
			break;
		case 1:
			msg = "Are you sure you want to delete this featured work?";
			break;		
	}//switch
	
	return confirm(msg);
}