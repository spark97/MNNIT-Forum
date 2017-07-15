<?php 
session_start();
$userid=$_SESSION['id'];
include('function.php');
$postid=validate($_GET['postid']);
$query="SELECT * FROM postresponse 	WHERE postid=$postid and type='1' order by id desc ";
$con=con();
$res=$con->query($query);
$response="";
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
                             
                                <div class=\"col-sm-2 no-margin-padding\" id=\"commentauthor\">".$uname."</div>
                                <div class=\"col-sm-10 no-margin-padding\" id=\"comments\">".$arr['comment']."<!-- comments -->
                                </div><!--end of comments -->
                              "
                        ;
}

echo $response;
?>