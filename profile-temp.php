<?php
session_start();
if(isset($_SESSION['id']))
{    
	$id=$_SESSION['id'];
}
else
{
	session_destroy();
	echo "<script>alert(\"Unauthorized Activity\");window.location=\"signup.php\";</script>" ;
}
?>
<html>
<head>
<script type="text/javascript" src="jsfunctions.js"></script>
<script>
</script>
</head>
<body>
<p>Create A New Thread</p>
<form id="threads" name="threads" action="createthread.php" method="post">
Name Of Thread:<input type="text" name="nameofthread" id="nameofthread"></input>
<br>
Select type of thread:<select name="typeofthread">
	<option value="1">Private</option>
	<option value="2">Public</option>
	<option value="3">Closed</option>
</select>
Description:<input type="text" name="description" id="description"></input>
<br>
<button type="submit" name="submit" id="submit">Create Thread</button>
</form>
<h2>All Threads</h2>
<div name="allthreads" id="allthreads">
Seaching For Threads..........
</div>
<h2>All Requests</h2>
<div name="requests" id="requests">
Loading Requests..............
</div>
<h2>Notifications</h2>
<div name="notification" id="allnotifications">
Loading Notifications..............
</div>
</body>
</html>