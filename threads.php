<?php
session_start();
if(!isset($_SESSION['id']))
{
	echo "<script>alert('Unauthorized Activity');window.location=\"signup.html\"</script>";
}
else
{   
	$userid=$_SESSION['id'];
    $type=0;
    $status=0;
	$threadid=base64_decode($_GET['tid']);
	$tid=base64_encode($threadid);
	include('function.php');
	$con=con();
    $queryad="SELECT * FROM threads WHERE id='$threadid' ";
    $resad=$con->query($queryad);
    while($arr=$resad->fetch_array())
    {   
        $type=$arr['type'];
    	if($userid==$arr['admin'])
    	{header("location:public.php?tid=$tid");
            //echo $userid;
            die();
        }
        
    }
	$query="SELECT status FROM request where userid=$userid and threadid='$threadid'";
	$res=$con->query($query);
	while($a=$res->fetch_array())
	{
		$status=$a['status'];
	}
	if($status==1)
	header("location:public.php?tid=$tid");	
    else
    {
    	if($type==1)
    	{
          header("location:private.php?tid=$tid");
            
    	}else if($type==2)
    	{
          header("location:public.php?tid=$tid");
    	}
    	else
    	{
            echo("<script>alert('This is a closed group you need to be a member of this group.');window.location='profile.php';</script>");
    	}
    }
}
?>