<?php
session_start();
include('function.php');
$requestid=validate($_GET['requestid']);
$status=validate($_GET['status']);
$con=con();
$rid=0;
$sid=0;
$threadid=0;
if($status==1)
{
	$query="UPDATE request SET status=1 WHERE id=$requestid";
    $res=$con->query($query);
    $query="SELECT * FROM 	request  WHERE id = '$requestid'";
    $res=$con->query($query);
    while($arr=$res->fetch_array())
    {
    	$rid=$arr['userid'];
    	$threadid=$arr['threadid'];
    	$sid=$_SESSION['id'];
    }
    $query1="INSERT INTO notification (rid,sid,threadid,type) VALUES ('$rid','$sid','$threadid',1)";
    $res=$con->query($query1);
}
else
{
$query="UPDATE request SET status=-1 WHERE id=$requestid";
    $res=$con->query($query);
}
echo "done";
?>