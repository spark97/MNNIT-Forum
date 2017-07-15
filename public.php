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
<!doctype html>
<html lang=''>
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
   <script type="text/javascript" src="threadfunctions.js"></script>
   <script type="text/javascript" src="jquery.min.js"></script>
   <!-- JS functions -->
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
    document.getElementById('comment').value="";
request6.onreadystatechange = function()
{
  if(request6.readyState == 4 && request6.status == 200)
  {
  
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
    document.getElementById('individualpost').innerHTML=request4.responseText;
  }
}
request4.open("GET","displaypost.php?threadid="+threadid+"",true);
request4.send();
};
 setInterval(function(){displaypost(tid);},4000);
 function showmembers()
 {
  var tid=<?php echo $threadid ;?>;
  var memberrequest = new XMLHttpRequest();
memberrequest.onreadystatechange = function()
{
  if(memberrequest.readyState == 4 && memberrequest.status == 200)
  {
    document.getElementById('memberlist').innerHTML=memberrequest.responseText;
  }
}
memberrequest.open("GET","displaymembers.php?threadid="+tid+"",true);
memberrequest.send();
 }
 showmembers();
 </script>
   <!-- JS functions end -->
   <title>FORUM | MNNIT ALLAHABAD</title>
</head>
<body>
    <div id="wrapper"><!-- wrapper -->
      <?php //require('header.php'); ?>
      <div class="container" id="maincontainer"><!-- maincontainer -->
          <div class="row no-margin-padding" id="mainrow"><!-- mainrow -->
                
                <div class="col-sm-3 no-margin-padding" id="memberlistcontainer"><!-- Member list container-->
                  <div class="col-sm-12 no-margin-padding" id="memberlistrow"><!-- member list row-->
                      <div class="col-sm-12 no-margin-padding" id="memberlisthead"><p>Members</p></div>
                      <div class="col-sm-12 no-margin-padding" id="memberlist"><!-- memberlist-->
                      <!--  <div class="col-sm-12 no-margin-padding" id="members"><p><span class="fa fa-user"></span> Urjit Patel</p></div>
                        <div class="col-sm-12 no-margin-padding" id="members"><p><span class="fa fa-user"></span> Harshit Shah</p></div>
                        <div class="col-sm-12 no-margin-padding" id="members"><p><span class="fa fa-user"></span> Anshul Singh</p></div>-->
                      </div><!--end of memberlist-->
                  </div><!-- end of member list row-->
                </div><!--End of Member list container-->


                <!-- MODAL BODY STARTING -->
 <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" id="modalid">
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



                <div class="col-sm-9 no-margin-padding" id="threadscontainer"><!-- Threads container-->
                  <div class="col-sm-12 no-margin-padding" id="threadsrow"><!-- threadsrow -->
                   








                    <div class="col-sm-12 no-margin-padding" id="individualpost"><!-- individual post-->
                    </div><!-- end of individual post-->












                  </div><!--end of  threadsrow -->
                </div><!--End of Threads container-->
              
          </div><!-- end of main row-->
      </div><!-- end of maincontainer-->
    </div><!-- end of wrapper -->
</body>
 <script src="js/jquery-2.2.1.min.js" type="text/javascript"></script>
 <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
</html>