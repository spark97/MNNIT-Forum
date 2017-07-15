<?php
include('function.php');
$name=validate($_POST['name']);
$email=validate($_POST['email']);
$password=validate($_POST['password']);
$regno=validate($_POST['regno']);
$programme=validate($_POST['prog']);
$year=validate($_POST['year']);
$branch=validate($_POST['branch']);
$password=md5($password);
if($name=="" || $email=="" || $password=="" || $regno=="" || $programme=="" || $year=="" || $branch=="" || $password=="" )
{
	echo "<script>alert(\"Please Fill All The Details\");window.location=\"signup.html\";</script>";
}
else
{
$selectquery="SELECT * FROM users WHERE email='$email' OR regno='$regno'";
$selectcon=con();
$selectres=$selectcon->query($selectquery);
if($selectres->num_rows>0)
{
 echo "<script>alert(\"You already have created an account\");window.location=\"signup.html\";</script>";
}
else
{
$query="INSERT INTO users (name,email,password,regno,year,programme,branch) VALUES ('$name','$email','$password','$regno','$year','$programme','$branch')";
$con=con();
$res=$con->query($query);
$selectquery="SELECT * FROM users WHERE email='$email'";
$selectres=$con->query($selectquery);
while($arr=$selectres->fetch_array())
{
	session_start();
	$_SESSION['id']=$arr['id'];
}
echo "<script>alert(\"You Are Successfully Registered\");window.location=\"profile.php\";</script>";
}
}
?>