<?php
session_start();
$userid=$_SESSION['id'];
include('function.php');
$tid=validate($_GET['threadid']);
$con=con();
$query="SELECT * FROM request WHERE threadid='$tid' AND status=1 ";
$res=$con->query($query);
$response="";
while($arr=$res->fetch_array())
{
$id=$arr['userid'];
$name="";
$subquery="SELECT * FROM users WHERE id='$id' ";
$subres=$con->query($subquery);
while($subarr=$subres->fetch_array())
{
	$name=$subarr['name'];
}
$response=$response."<div class=\"col-sm-12 no-margin-padding\" id=\"members\"><p><span class=\"fa fa-user\"></span>".$name."</p></div>";
}
echo $response;
?>