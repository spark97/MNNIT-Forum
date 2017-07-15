<?php
include('function.php');
session_start();
$userid=$_SESSION['id'];
$response="";
$query="SELECT * FROM threads WHERE admin='$userid'";
$con=con();
$res=$con->query($query);
while($arr=$res->fetch_array())
{
	$tid=$arr['id'];
	$tname=$arr['name'];
	$query1=" SELECT * FROM request WHERE threadid='$tid' AND status='0'";
	$res1=$con->query($query1);
while($arr1=$res1->fetch_array())
{
	$uid=$arr1['userid'];
	$requestid=$arr1['id'];
       $query2="SELECT * FROM users WHERE id='$uid'";
       $res2=$con->query($query2);
       while($arr2=$res2->fetch_array())
       {       

         $response=$response."<p>".$arr2['name']." ".$tname."<button onclick=respond(".$requestid.",1);>Accept </button><button onclick=respond(".$requestid.",0);>Reject</button>"."</p>" ;
       }
}
}
echo $response;
?>