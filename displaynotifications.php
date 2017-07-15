<?php
include('function.php');
session_start();
$userid=$_SESSION['id'];
$response="";
$rname="";
$sname="";
$threadname="";
$query="SELECT * FROM notification  WHERE rid='$userid'";
$con=con();
$res=$con->query($query);
while($arr=$res->fetch_array())
{   
    $sid=$arr['sid'];
    $rid=$arr['rid'];
    $tid=$arr['threadid'];
	$query2 = "SELECT * FROM users where id=$sid " ;
    $res2=$con->query($query2);
    while($a=$res2->fetch_array())
    {
        $sname=$a['name'];
    }
    $query3="SELECT * FROM users where id=$rid " ;
    $res3=$con->query($query3);
    while($a=$res3->fetch_array())
    {
        $rname=$a['name'];
    }
    $query4="SELECT * FROM threads where id=$tid " ;
    $res4=$con->query($query4);
    while($a=$res4->fetch_array())
    {
        $threadname=$a['name'];
    }
    if($arr['type']==1)
    {
        $response=$response."<p><b>".$sname."</b> accepted your request to join <b>".$threadname."</b></p>";
    }
    if($arr['type']==2)
    {
        $response=$response."<p><b>".$sname."</b> commented on your post in <b>".$threadname."</b></p>";
    }
    if($arr['type']==3)
    {
        $response=$response."<p><b>".$sname."</b> upvoted your post in <b>".$threadname."</b></p>";
    }
    if($arr['type']==4)
    {
        $response=$response."<p><b>".$sname."</b> downvoted your post in <b>".$threadname."</b></p>";
    }
}
echo $response;
?> 