<?php
include('function.php');
$userid=validate($_GET['userid']);
$threadid=validate($_GET['threadid']);
$con=con();
$selquery="SELECT * FROM request WHERE userid=$userid AND threadid=$threadid";
$selres=$con->query($selquery);
if($selres->num_rows!=0)
echo "sent";
else{
$query="INSERT INTO request (userid,threadid) VALUES ('$userid','$threadid')";
$res=$con->query($query);
echo "done";
}
?>