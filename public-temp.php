<?php
session_start();
$threadid=0;
if(!isset($_SESSION['id']))
{
	echo "<script>alert('Unauthorized Activity');window.location=\"signup.html\"</script>";
}
else
{   
	$userid=$_SESSION['id'];
	$threadid=base64_decode($_GET['tid']);
}
?>
 <html>
 <head>
 <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
   <link rel="stylesheet" href="font-awesome-4.5.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="css/header.css">
   <link rel="stylesheet" href="css/common.css">
   <link rel="stylesheet" href="css/public.css">
   <link rel="stylesheet" type="text/css" href="plugins/accordion/css/style.css" />
   <link href='https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz' rel='stylesheet' type='text/css'>
   <link href='https://fonts.googleapis.com/css?family=PT+Sans+Narrow' rel='stylesheet' type='text/css'>
 <script type="text/javascript" src="threadfunctions.js">
 </script>
 <script type="text/javascript" src="jquery.min.js"></script>
 <script>
 function upvote(postid)
 {
   var request8= new XMLHttpRequest();
request8.onreadystatechange = function()
{
  if(request8.readyState == 4 && request8.status == 200)
  {
    //alert('upvoted');
  }
}
request8.open("POST","vote.php?postid="+postid+"&type=2",true);
request8.send();
 }
 function downvote(postid)
 {
   var request9= new XMLHttpRequest();
request9.onreadystatechange = function()
{
  if(request9.readyState == 4 && request9.status == 200)
  {
    //alert('downvoted');
  }
}
request9.open("POST","vote.php?postid="+postid+"&type=3",true);
request9.send();
 }
 function download(postid)
{
  window.location="download.php?postid="+postid+"";
   /*var downloadrequest = new XMLHttpRequest();
   downloadrequest.onreadystatechange = function()
   {
    if(downloadrequest.readyState == 4 && downloadrequest.status == 200)
  {
    alert("File Download Complete");
  }
   }
   downloadrequest.open("POST","download.php?postid="+postid+"",true);
   downloadrequest.send();*/
}

 function submitcomment(postid)
 {
  console.log(postid);
  var request6 = new XMLHttpRequest();
  var comment=document.getElementById('comment').value;
request6.onreadystatechange = function()
{
  if(request6.readyState == 4 && request6.status == 200)
  {
    document.getElementById('comment').value="";
  }
}
request6.open("POST","submitcomment.php?postid="+postid+"&comment="+comment+"",true);
request6.send();
 }

function displaycomment()
{ 
  var postid=document.getElementById('invisible').value;
  console.log(postid);
  var request7 = new XMLHttpRequest();
request7.onreadystatechange = function()
{
  if(request7.readyState == 4 && request7.status == 200)
  {
    document.getElementById('individualcommentcontainer').innerHTML=request7.responseText;
  }
}
request7.open("GET","showcomment.php?postid="+postid+"",true);
request7.send();
}
 function comments(postid)
 {
  document.getElementById('invisible').value=postid;
 	var request5 = new XMLHttpRequest();
request5.onreadystatechange = function()
{
	if(request5.readyState == 4 && request5.status == 200)
	{
		document.getElementById('wholemodal').innerHTML=request5.responseText;
    setInterval(displaycomment,4000);
	}
}
request5.open("GET","displaycomments.php?postid="+postid+"",true);
request5.send();
 }
 var tid=<?php echo $threadid ;?>;
 function displaypost(threadid)
{ 
var request4 = new XMLHttpRequest();
request4.onreadystatechange = function()
{
	if(request4.readyState == 4 && request4.status == 200)
	{
		document.getElementById('allpost').innerHTML=request4.responseText;
	}
}
request4.open("GET","displaypost.php?threadid="+threadid+"",true);
request4.send();
};
 setInterval(function(){displaypost(tid);},4000);
 </script>
 </script>
 </head>
 <body>
 <center><!--<form action="post.php" method="post" enctype="multipart/form-data">-->
 <div >
 <textarea id="post" name="content" cols="100" rows="5"></textarea> 
 <input type="file"  id="uploadedfile" name="uploadedfile"></input>
 <input type="hidden" name="threadid" id="threadid" value="<?php echo $threadid ;?>"></input>
 <input type="hidden" name="userid" id="userid" value="<?php echo $userid ;?>"></input>
 <button onclick="postit()" value="Post" style="height: 100;width:100 "></button></center>
 </div>
<h2>Posts</h2>
<div id="allpost" name="allpost">
Loading posts....
</div>
<!-- MODAL BODY STARTING -->
 <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" id="myModal">
                 <input type="hidden" id="invisible" value="">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Comments</h4>
                      </div>
                      <div class="modal-body" id="wholemodal">
                      </div><!-- end of modal body -->
                      </div>
                      </div>
                      </div>
<!--MODAL BODY ENDING -->
</body>
 <script src="js/jquery-2.2.1.min.js" type="text/javascript"></script>
 <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
</html>