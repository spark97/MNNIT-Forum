function displaythreads()
{
var request1 = new XMLHttpRequest();
request1.onreadystatechange = function()
{
	if(request1.readyState == 4 && request1.status == 200)
	{
		document.getElementById('allthreads').innerHTML=request1.responseText;
	}
}
request1.open("GET","displaythreads.php",true);
request1.send();
};
function displayrequests()
{
	var request2=new XMLHttpRequest();
	request2.onreadystatechange = function()
{
	if(request2.readyState == 4 && request2.status == 200)
	{
		document.getElementById('requests').innerHTML=request2.responseText;
	}
}
request2.open("GET","requests.php",true);
request2.send();
}
//Function for sending requests to join thread
function sendrequest(threadid,id)
{
	var userid = id ;
	var request4 = new XMLHttpRequest();
request4.onreadystatechange = function()
{
	if(request4.readyState == 4 && request4.responseText == "done")
	{
		alert('Request Sent Successfully');
	}
	if(request4.readyState == 4 && request4.responseText == "sent")
	{
		alert('Request Already Sent');
	}
}
request4.open("POST","sendrequest.php?userid="+userid+"&threadid="+threadid,true);
request4.send();
};
//Function to respond to a request for a joining a thread
function respond(requestid,status)
{
	
	var request3 = new XMLHttpRequest();
request3.onreadystatechange = function()
{
	if(request3.readyState == 4 && request3.responseText == "done")
	{
		
	}
}
request3.open("POST","respondrequest.php?requestid="+requestid+"&status="+status,true);
request3.send();
};
function displaynotifications()
{
var request4 = new XMLHttpRequest();
request4.onreadystatechange = function()
{
	if(request4.readyState == 4 && request4.status == 200)
	{
		document.getElementById('allnotifications').innerHTML=request4.responseText;
	}
}
request4.open("GET","displaynotifications.php",true);
request4.send();
};
setInterval(displaythreads,4000);
setInterval(displayrequests,4000);
setInterval(displaynotifications,4000);
