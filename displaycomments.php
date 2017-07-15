<?php 
session_start();
$userid=$_SESSION['id'];
include('function.php');
$postid=validate($_GET['postid']);
$query="SELECT * FROM postresponse 	WHERE postid=$postid and type='1' order by id desc ";
$con=con();
$res=$con->query($query);
$response="<div class=\"col-sm-12 no-margin-padding\" id=\"commentscontainer\"><!-- comments container--><div class=\"col-sm-12 no-margin-padding\" id=\"individualcommentcontainer\"></div>";
while($arr=$res->fetch_array())
{
	$uname="";
$userid=$arr['userid'];
$query1="SELECT * FROM users WHERE id =$userid  ";
$con1=con();
$res1=$con1->query($query1);
while($arr1=$res1->fetch_array())
{
	$uname=$arr1['name'];
}
$response=$response."
                             <div class=\"col-sm-12 no-margin-padding\" id=\"individualcommentcontainer\"><!-- individualcommentcontainer -->
                                <!--<div class=\"col-sm-2 no-margin-padding\" id=\"commentauthor\">".$uname."</div>
                                <div class=\"col-sm-10 no-margin-padding\" id=\"comments\">".$arr['comment']."
                                </div>-->
                              </div><!--end of individualcommentcontainer -->"
                        ;
}
$response=$response." </div><!-- end of comments container--><div class=\"col-sm-12 no-margin-padding\" id=\"commentinputcontainer\"><!-- commentinputcontainer -->
                        
                            <div class=\"col-sm-10 no-margin-padding\" id=\"commentinput\">
                              <input id=\"comment\" type=\"text\" placeholder=\"Your Comment\">
                            </div>
                            <div class=\"col-sm-2 no-margin-padding\" id=\"commentsubmit\">
                              <button class=\"btn\" onclick=\"submitcomment(".$postid.")\">Comment</button>
                            </div>
                        </div> <!--end of commentinputcontainer --> ";
echo $response;
?>