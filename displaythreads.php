<?php

include('function.php');
session_start();
$userid=$_SESSION['id'];
if(!isset($_SESSION['id']))
{
	echo "<script>alert('Unauthorized Activity');window.location=\"signup.html\"</script>";
}
$response="";
$query="SELECT * FROM threads ORDER BY id DESC ";
$con=con();
$res=$con->query($query);
while($arr=$res->fetch_array())
{   
	
	$tid=$arr['id'];
	$encodedid=base64_encode($tid);
	$query1="SELECT * FROM request WHERE userid=$userid AND threadid=$tid";
    $res1=$con->query($query1);
    if($res1->num_rows==0 && $arr['admin']!=$userid)
    {
    	   //  $response=$response."<a href=\"threads.php?tid=".$encodedid."\"><p>".$arr['name']."</p></a>";
    	$response=$response."<a href=\"threads.php?tid=".$encodedid."\"><p>".$arr['name']."</a>    "."<button class=\"button\" onclick=sendrequest(".$tid.",".$userid.")>JOIN</button>"."</p>";
    }
    else if($res1->num_rows==0 && $arr['admin']==$userid)
    {
    	$response=$response."<a href=\"threads.php?tid=".$encodedid."\"><p>".$arr['name']."</a></p>";
    }
    while($arr1=$res1->fetch_array()){
	if($arr1['status']!=1 && $arr['admin']!=$userid)
	$response=$response."<a href=\"threads.php?tid=".$encodedid."\"><p>".$arr['name']."</a>    "."<button class=\"button\" onclick=sendrequest(".$tid.",".$userid.")>JOIN</button>"."</p>";
    else
    $response=$response."<a href=\"threads.php?tid=".$encodedid."\"><p>".$arr['name']."</a></p>";
}
}
echo $response;
?>