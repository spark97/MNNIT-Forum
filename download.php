<?php
session_start();
$userid=$_SESSION['id'];
include('function.php');
$id=validate($_GET['postid']);
$query="SELECT * FROM posts WHERE id='$id'";
$con=con();
$res=$con->query($query);
$len=0;
$filepath="";
$filename="";
$filetype="";
while($arr=$res->fetch_array())
{
      $filepath=$arr['filepath'];
      $filename=substr($filepath, 9);
      $filetype=$arr['filetype'];
      $len=filesize($filepath);
}
ob_clean();
header("Pragma:public");
header("Expires: 0");
header("Cache-Control:must_revalidate,post-check=0,pre-check=0");
header("Cache-Control:private",false);
header("Content-Description:File Transfer");
header("Content-Type:".$filetype);
$header="Content-Disposition:attachment;filename=".$filename;
header($header);
header("Content-Transfer-Encoding:binary");
header("Content-Length:".$len);
if($len > 8*1024*1024)
{
	$handle=fopen($filepath,'rb');
	$buffer="";
	while(!feof($handle))
	{
		$buffer=fread($handle,$chunksize);
		print $buffer;
		ob_flush();
		flush();
	}
}else{
readfile($filepath);
ob_clean();
flush();
exit;
}
?>