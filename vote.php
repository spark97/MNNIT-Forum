<?php
session_start();
$userid=$_SESSION['id'];
include('function.php');
$postid=validate($_GET['postid']);
$type=validate($_GET['type']);
$con=con();
$recnamequery="SELECT * FROM posts WHERE id='$postid'";
$recres=$con->query($recnamequery);
$recid="";
$threadid="";
while($arr=$recres->fetch_array())
{
	$recid = $arr['userid'];
	$threadid=$arr['threadid'];
}
if($type=='2'){
$query="SELECT * FROM postresponse WHERE type='2' AND userid='$userid' AND postid='$postid'";
$con=con();
$res=$con->query($query);
if($res->num_rows == 0)
{
$query2="SELECT * FROM postresponse WHERE type='3' AND userid='$userid' AND postid='$postid'";
$res2=$con->query($query2);
if($res2->num_rows == 0)
{
	$query3="INSERT INTO postresponse (postid,type,userid) VALUES ('$postid','2','$userid') ";
	$res3=$con->query($query3);
	$notifyquery="INSERT INTO notification (rid,sid,threadid,type,postid) VALUES ('$recid','$userid','$threadid',3,'$postid')";
    $notifyres=$con->query($notifyquery);
}
else
{
	$query3="UPDATE postresponse SET type='2' WHERE postid='$postid' AND userid='$userid'";
	$res3=$con->query($query3);
	$notifyquery="INSERT INTO notification (rid,sid,threadid,type,postid) VALUES ('$recid','$userid','$threadid',3,'$postid')";
    $notifyres=$con->query($notifyquery);
}
}
}
else if($type=='3'){
$query="SELECT * FROM postresponse WHERE type='3' AND userid='$userid' AND postid='$postid'";
$con=con();
$res=$con->query($query);
if($res->num_rows == 0)
{
$query2="SELECT * FROM postresponse WHERE type='2' AND userid='$userid' AND postid='$postid'";
$res2=$con->query($query2);
if($res2->num_rows == 0)
{
	$query3="INSERT INTO postresponse (postid,type,userid) VALUES ('$postid','3','$userid') ";
	$res3=$con->query($query3);
	$notifyquery="INSERT INTO notification (rid,sid,threadid,type,postid) VALUES ('$recid','$userid','$threadid',4,'$postid')";
    $notifyres=$con->query($notifyquery);
}
else
{
	$query3="UPDATE postresponse SET type='3' WHERE postid='$postid' AND userid='$userid' AND postid='$postid'";
	$res3=$con->query($query3);
	$notifyquery="INSERT INTO notification (rid,sid,threadid,type,postid) VALUES ('$recid','$userid','$threadid',4,'$postid')";
    $notifyres=$con->query($notifyquery);
}
}
}
?>