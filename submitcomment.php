<?php
session_start();
$uid=$_SESSION['id'];
include('function.php');
$postid=validate($_GET['postid']);
$comment=validate($_GET['comment']);
$query="INSERT INTO postresponse (postid,type,comment,userid) VALUES ('$postid','1','$comment','$uid') ";
$con=con();
$res=$con->query($query);
$recnamequery="SELECT * FROM posts WHERE id='$postid'";
$recres=$con->query($recnamequery);
$recid="";
$threadid="";
while($arr=$recres->fetch_array())
{
	$recid = $arr['userid'];
	$threadid=$arr['threadid'];
}
$notifyquery="INSERT INTO notification (rid,sid,threadid,type,postdi) VALUES ('$recid','$uid','$threadid',2,'$postid')";
$notifyres=$con->query($notifyquery);
?>