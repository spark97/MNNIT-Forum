function postit()
{  
    var data = new FormData();
    data.append( 'uploadedfile',$('#uploadedfile')[0].files[0]);	
	var content = document.getElementById("post").value;
	var threadid = document.getElementById("threadid").value;
	var userid = document.getElementById("userid").value;
	var request = new XMLHttpRequest();
	document.getElementById("post").value="";
	request.onreadystatechange = function()
{
	if(request.readyState == 4 && request.status == 200)
	{
		alert("Your Post Has Been Successfully Posted");

	}
	else if(request.readyState == 4 )
      {
      	alert("Error In Posting Your Post");
      }
}
request.open("POST","post.php?content="+content+"&threadid="+threadid+"&userid="+userid+"",true);
request.send(data);
}

