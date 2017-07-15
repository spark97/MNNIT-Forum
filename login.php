<?php
require('function.php');
$email=validate($_POST['email']);
$password=validate($_POST['password']);
if($email==""||$password=="")
echo('<script>alert("Please enter some text");window.location=("loginform.php");</script>');
$query="SELECT * from users WHERE email='$email'";
$con=con();
$password=md5($password);
$res=$con->query($query);
if($res->num_rows==0)
{
	echo('<script>alert("No such email-id exist");window.location=("loginform.php");</script>');
}
else
{
	while($arr=$res->fetch_array())
	{
		if($password!=$arr['password'])
		{
			echo('<script>alert("Wrong password");window.location=("loginform.php");</script>');
		}
		else
		{
			session_start();
			$_SESSION['id']=$arr['id'];
			echo('<script>alert("Welcome");window.location=("profile.php");</script>');
		}
	}
}
?>