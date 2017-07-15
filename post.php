<?php
include('function.php');
date_default_timezone_set('Asia/Calcutta');
session_start();
$userid=$_SESSION['id'];
$post=validate($_GET['content']);
$threadid=validate($_GET['threadid']);
$pdate=date("d/m/Y");
$ptime=date("h:i:sa");
if(!empty($_FILES["uploadedfile"]["name"])) {
	$file_name=$_FILES["uploadedfile"]["name"];
	$temp_name=$_FILES["uploadedfile"]["tmp_name"];
	$filetype=$_FILES["uploadedfile"]["type"];
	$fileext=strchr($filetype,'/');
	$filename=date("d-m-Y")."-".time().".".$fileext;
		$target_path = "./uploaded/".$filename;
if(move_uploaded_file($temp_name,$target_path)){
		$query="INSERT INTO posts (threadid,userid,content,pdate,ptime,filepath,filetype) VALUES ('$threadid','$userid','$post','$pdate','$ptime','$target_path','$filetype')";
$con=con();
$res=$con->query($query);
echo "done";
}
else
{
	echo "error";
}
}
else
{
$query="INSERT INTO posts (threadid,userid,content,pdate,ptime) VALUES ('$threadid','$userid','$post','$pdate','$ptime')";
$con=con();
$res=$con->query($query);	
}
?>