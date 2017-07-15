<?php
session_start();
include('function.php');
$threadid=validate($_GET['threadid']);
$response="";
$username="";
$pdate="";
$content="";
$query="SELECT * FROM posts WHERE threadid='$threadid' order by ptime desc  ";
$con=con();
$res=$con->query($query);
while($arr=$res->fetch_array())
{   
	$content=$arr['content'];
	$postid=$arr['id'];
	$user=$arr['userid'];
	$queryname="SELECT * FROM users WHERE id='$user'";
	$res2=$con->query($queryname);
	$filepath=$arr['filepath'];
	$filetype=$arr['filetype'];
	$filename=strchr($filepath,'/');
	$pdate=$arr['pdate'];
while($arr2=$res2->fetch_array())
{   
	$username=$arr2['name'];
}
$querycomm="SELECT * FROM postresponse WHERE postid='$postid' AND type='1'";
$rescom=$con->query($querycomm);
$commnumber=$rescom->num_rows;
$queryupv="SELECT * FROM postresponse WHERE postid='$postid' AND type='2'";
$resupv=$con->query($queryupv);
$upnumber=$resupv->num_rows;
$querydv="SELECT * FROM postresponse WHERE postid='$postid' AND type='3'";
$resdv=$con->query($querydv);
$dvnumber=$resdv->num_rows;
$querycheck="SELECT * FROM postresponse WHERE postid='$postid' AND type != '1' ";
$rescheck=$con->query($querycheck);
$flag=0;
while($arrcheck=$rescheck->fetch_array())
{
	if($arrcheck['type']=='2')
		$flag=1;
	else
		$flag=2;
}
if($filepath=="")
{
	if($flag==1)
	{
$response=$response."<div class=\"col-sm-12 no-margin-padding\" id=\"posthead\"><!-- post head -->
                          <div class=\"col-sm-8 no-margin-padding\"><p>".$username."</p></div>
                          <div class=\"col-sm-4 no-margin-padding\"><p id=\"posttimehead\">".$pdate."</p></div>
                        </div><!-- end of post head-->
                        <div class=\"col-sm-12 no-margin-padding\" id=\"individualpostcontent\"><!--individualpostcontent-->
                          <div class=\"col-sm-12 no-margin-padding\" id=\"individualpostpara\"><!--individual post paragraphs -->
                          <p>".$content."</p>
                          <div class=\"col-sm-12 no-margin-padding\" id=\"individualpostfooter\"><!-- individualpostfooter -->
                            <div class=\"col-sm-2 no-margin-padding\"><p><span style=\"background-color:blue;\" class=\"fa fa-thumbs-o-up\"></span>".$upnumber."</p></div>
                            <div class=\"col-sm-2 no-margin-padding\"><p><span class=\"fa fa-thumbs-o-down\"></span>".$dvnumber."</p></div>
                            <div class=\"col-sm-3 col-sm-push-6 no-margin-padding\"><p><span class=\"fa fa-comment-o\"></span>".$commnumber."</p></div>
                          </div><!--end of individualpostfooter -->
                          </div><!-- end of individual post paragraphs -->               
                        </div><!--end of individualpostcontent-->";
     }
  else if($flag==2)
  {
  	$response=$response."<div class=\"col-sm-12 no-margin-padding\" id=\"posthead\"><!-- post head -->
                          <div class=\"col-sm-8 no-margin-padding\"><p>".$username."</p></div>
                          <div class=\"col-sm-4 no-margin-padding\"><p id=\"posttimehead\">".$pdate."</p></div>
                        </div><!-- end of post head-->
                        <div class=\"col-sm-12 no-margin-padding\" id=\"individualpostcontent\"><!--individualpostcontent-->
                          <div class=\"col-sm-12 no-margin-padding\" id=\"individualpostpara\"><!--individual post paragraphs -->
                          <p>".$content."</p>
                          <div class=\"col-sm-12 no-margin-padding\" id=\"individualpostfooter\"><!-- individualpostfooter -->
                            <div class=\"col-sm-2 no-margin-padding\"><p><span  class=\"fa fa-thumbs-o-up\"></span>".$upnumber."</p></div>
                            <div class=\"col-sm-2 no-margin-padding\"><p><span style=\"background-color:blue;\" class=\"fa fa-thumbs-o-down\"></span>".$dvnumber."</p></div>
                            <div class=\"col-sm-3 col-sm-push-6 no-margin-padding\"><p><span class=\"fa fa-comment-o\"></span>".$commnumber."</p></div>
                          </div><!--end of individualpostfooter -->
                          </div><!-- end of individual post paragraphs -->               
                        </div><!--end of individualpostcontent-->";
  }
  else
  {
  	$response=$response."<div class=\"col-sm-12 no-margin-padding\" id=\"posthead\"><!-- post head -->
                          <div class=\"col-sm-8 no-margin-padding\"><p>".$username."</p></div>
                          <div class=\"col-sm-4 no-margin-padding\"><p id=\"posttimehead\">".$pdate."</p></div>
                        </div><!-- end of post head-->
                        <div class=\"col-sm-12 no-margin-padding\" id=\"individualpostcontent\"><!--individualpostcontent-->
                          <div class=\"col-sm-12 no-margin-padding\" id=\"individualpostpara\"><!--individual post paragraphs -->
                          <p>".$content."</p>
                          <div class=\"col-sm-12 no-margin-padding\" id=\"individualpostfooter\"><!-- individualpostfooter -->
                            <div class=\"col-sm-2 no-margin-padding\"><p><span class=\"fa fa-thumbs-o-up\"></span>".$upnumber."</p></div>
                            <div class=\"col-sm-2 no-margin-padding\"><p><span class=\"fa fa-thumbs-o-down\"></span>".$dvnumber."</p></div>
                            <div class=\"col-sm-3 col-sm-push-6 no-margin-padding\"><p><span class=\"fa fa-comment-o\"></span>".$commnumber."</p></div>
                          </div><!--end of individualpostfooter -->
                          </div><!-- end of individual post paragraphs -->               
                        </div><!--end of individualpostcontent-->";
  }
}
else
{
	if($flag==1)
	{
		$response=$response."<div class=\"col-sm-12 no-margin-padding\" id=\"posthead\"><!-- post head -->
                          <div class=\"col-sm-8 no-margin-padding\"><p>".$username."</p></div>
                          <div class=\"col-sm-4 no-margin-padding\"><p id=\"posttimehead\">".$pdate."</p></div>
                        </div><!-- end of post head-->
                        <div class=\"col-sm-12 no-margin-padding\" id=\"individualpostcontent\"><!--individualpostcontent-->
                          <div class=\"col-sm-12 no-margin-padding\" id=\"individualpostpara\"><!--individual post paragraphs -->
                          <p>".$content."<b>Attached File ".$filename."</b></p>
                          <div class=\"col-sm-12 no-margin-padding\" id=\"individualpostfooter\"><!-- individualpostfooter -->
                            <div class=\"col-sm-2 no-margin-padding\"><p><span style=\"background-color:blue;\" class=\"fa fa-thumbs-o-up\"></span>".$upnumber."</p></div>
                            <div class=\"col-sm-2 no-margin-padding\"><p><span class=\"fa fa-thumbs-o-down\"></span>".$dvnumber."</p></div>
                            <div class=\"col-sm-3 col-sm-push-6 no-margin-padding\"><p><span class=\"fa fa-comment-o\"></span>".$commnumber."</p></div>
                          </div><!--end of individualpostfooter -->
                          </div><!-- end of individual post paragraphs -->               
                        </div><!--end of individualpostcontent-->";
}	
else if($flag==2)
{
	$response=$response."<div class=\"col-sm-12 no-margin-padding\" id=\"posthead\"><!-- post head -->
                          <div class=\"col-sm-8 no-margin-padding\"><p>".$username."</p></div>
                          <div class=\"col-sm-4 no-margin-padding\"><p id=\"posttimehead\">".$pdate."</p></div>
                        </div><!-- end of post head-->
                        <div class=\"col-sm-12 no-margin-padding\" id=\"individualpostcontent\"><!--individualpostcontent-->
                          <div class=\"col-sm-12 no-margin-padding\" id=\"individualpostpara\"><!--individual post paragraphs -->
                          <p>".$content."<b>Attached File ".$filename."</b></p>
                          <div class=\"col-sm-12 no-margin-padding\" id=\"individualpostfooter\"><!-- individualpostfooter -->
                            <div class=\"col-sm-2 no-margin-padding\"><p><span class=\"fa fa-thumbs-o-up\"></span>".$upnumber."</p></div>
                            <div class=\"col-sm-2 no-margin-padding\"><p><span style=\"background-color:blue;\" class=\"fa fa-thumbs-o-down\"></span>".$dvnumber."</p></div>
                            <div class=\"col-sm-3 col-sm-push-6 no-margin-padding\"><p><span class=\"fa fa-comment-o\"></span>".$commnumber."</p></div>
                          </div><!--end of individualpostfooter -->
                          </div><!-- end of individual post paragraphs -->               
                        </div><!--end of individualpostcontent-->";
}
else
{
		$response=$response."<div class=\"col-sm-12 no-margin-padding\" id=\"posthead\"><!-- post head -->
                          <div class=\"col-sm-8 no-margin-padding\"><p>".$username."</p></div>
                          <div class=\"col-sm-4 no-margin-padding\"><p id=\"posttimehead\">".$pdate."</p></div>
                        </div><!-- end of post head-->
                        <div class=\"col-sm-12 no-margin-padding\" id=\"individualpostcontent\"><!--individualpostcontent-->
                          <div class=\"col-sm-12 no-margin-padding\" id=\"individualpostpara\"><!--individual post paragraphs -->
                          <p>".$content."<b>Attached File ".$filename."</b></p>
                          <div class=\"col-sm-12 no-margin-padding\" id=\"individualpostfooter\"><!-- individualpostfooter -->
                            <div class=\"col-sm-2 no-margin-padding\"><p><span  class=\"fa fa-thumbs-o-up\"></span>".$upnumber."</p></div>
                            <div class=\"col-sm-2 no-margin-padding\"><p><span class=\"fa fa-thumbs-o-down\"></span>".$dvnumber."</p></div>
                            <div class=\"col-sm-3 col-sm-push-6 no-margin-padding\"><p><span class=\"fa fa-comment-o\"></span>".$commnumber."</p></div>
                          </div><!--end of individualpostfooter -->
                          </div><!-- end of individual post paragraphs -->               
                        </div><!--end of individualpostcontent-->";
}
}
}
echo $response;
?>
