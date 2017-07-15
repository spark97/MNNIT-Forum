<?php
include('function.php');
session_start();
if(!isset($_SESSION['id']))
{
	echo "<script>alert('Unauthorized Activity');window.location=\"signup.html\"</script>";
}
else
{
	$admin=$_SESSION['id'];
	$name=validate($_POST['nameofthread']);
	$type=validate($_POST['typeofthread']);
	$description=validate($_POST['description']);
	if($name=="" || $type=="" || $description=="")
	{
		echo "<script>alert('Please fill all the details');window.location=\"profile.php\";</script>";
	}
	else
	{
		//echo $type;
		$query="INSERT INTO threads (name,type,description,admin) VALUES ('$name','$type','$description','$admin')";
		$con=con();
		$res=$con->query($query);
        $selectquery="SELECT * FROM threads WHERE name='$name'";
        $res1=$con->query($selectquery);
         if($res1->num_rows>0)
         {
         	echo "<script>alert('Thread name is already occupied');window.location=\"profile.php\"</script>";
         }
		while($arr=$res1->fetch_array())
		{
			$threadid=$arr['id'];
		}
		$threadid=base64_encode($threadid);
		header("location:threads.php?tid=".$threadid."");
}
}
?>