<!doctype html>
<html lang=''>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
   <link rel="stylesheet" href="font-awesome-4.5.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="css/header.css">
   <link rel="stylesheet" href="css/common.css">
   <link rel="stylesheet" type="text/css" href="plugins/accordion/css/style.css" />
   <link rel="stylesheet" href="css/profile.css">

   <link href='https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz' rel='stylesheet' type='text/css'>
   <link href='https://fonts.googleapis.com/css?family=PT+Sans+Narrow' rel='stylesheet' type='text/css'>
   <title>FORUM | MNNIT ALLAHABAD</title>
</head>
<body>
    <div id="wrapper"><!-- wrapper -->
      <?php require('header.php'); ?>
      <div class="container" id="maincontainer"><!-- maincontainer -->
          <div class="row no-margin-padding" id="mainrow"><!-- mainrow -->
            
              <div class="col-sm-3 no-margin-padding"  id="navigationcontainer"><!-- profile navigation col -->
                <div class="col-sm-10 col-sm-offset-1" id="navigationinnercontainer"><!-- navigation inner container -->
                  <div class="col-sm-12 no-margin-padding" id="userimage"><!-- image container -->
                    <img src="images/user.png">
                  </div><!-- end of image container -->
                  <div class="col-sm-12  no-margin-padding" id="profilenavigation"><!-- profilenavigation -->
                    
                    <div class="col-sm-12 no-margin-padding" id="navlist">
                      <div id="link"><p><a onclick="simulateclick(0);" href="profile.php#myid"><span class="fa fa-user"></span>YOUR INFO</p></a></div>
                    </div>
                    <div class="col-sm-12 no-margin-padding" id="navlist">
                      <div id="link"><p><a onclick="simulateclick(1);" href="profile.php#myid"><span class="fa fa-users"></span>NOTIFICATION</p></a></div>
                    </div>
                    <div class="col-sm-12 no-margin-padding" id="navlist">
                      <div id="link"><p><a onclick="simulateclick(2);" href="profile.php#myid"><span class="fa fa-paper-plane"></span>START A NEW THREAD</p></a></div>  
                    </div>
                    <div class="col-sm-12 no-margin-padding" id="navlist">
                      <div id="link"><p><a onclick="simulateclick(3);" href="profile.php#myid"><span class="fa fa-list"></span>VIEW ALL THREADS</p></a></div>  
                    </div>
                    <div class="col-sm-12 no-margin-padding" id="navlist">
                      <div id="link"><p><a onclick="simulateclick(4);" href="profile.php#myid"><span class="fa fa-tag"></span>VIEW YOUR THREADS</a></p></div>  
                    </div>

                  </div><!-- end of profilenavigation -->
                </div><!-- end of navigation inner container -->
              </div><!-- end of profile navigation col -->
              
              <div class="col-sm-9 no-margin-padding" id="infocontainer"><!-- profile info col -->
               
               <div class="col-sm-12" id="gaugeheader"><h4>Your Statistics</h4></div>
                <div class="col-sm-12 no-margin-padding" id="gaugecontainer"><!-- gauge -->
                  <div class="col-sm-4 no-margin-padding"><div id="g1"></div></div>
                  <div class="col-sm-4 no-margin-padding"><div id="g2"></div></div>
                  <div class="col-sm-4 no-margin-padding"><div id="g3"></div></div>
               </div><!-- end of gauge-->

                <div class="col-sm-12 no-margin-padding">
                  <section class="ac-container"><!-- accordion container -->
                  <div>
                  <input id="ac-0" name="accordion-0" type="checkbox" checked/>
                  <label for="ac-0"><span class="fa fa-plus"></span>&nbsp;&nbsp;Info</label>
                  <article class="infoarticle"><!-- info article -->
                    <div class="row no-margin-padding" id="infoaccordiancontainer"><!-- infoaccordiancontainer --> 
                     
                      <div class="col-sm-8 no-margin-padding"><p><b>NAME: </b><span id="infoaccordianval">Urjit Patel</span></p></div>
                      <div class="col-sm-4 no-margin-padding"><p><b>EMAIL: </b><span id="infoaccordianval">urjit1596@gmail.com</span></p></div>
                      <div class="col-sm-12 no-margin-padding"><p><b>PROGRAMME: </b><span id="infoaccordianval">B.Tech</span></p></div>
                      <div class="col-sm-4 no-margin-padding"><p><b>BRANCH: </b><span id="infoaccordianval">Information Technology</span></p></div>
                      <div class="col-sm-4 no-margin-padding"><p><b>REG.NO.: </b><span id="infoaccordianval">20148035</span></p></div>
                      <div class="col-sm-4 no-margin-padding"><p><b>YEAR: </b><span id="infoaccordianval">2</span></p></div>

                    </div><!--end of infoaccordiancontainer -->
                  </article><!--end of info article -->
                </div>
                  <div>
                  <input id="ac-1" name="accordion-1" type="checkbox"/>
                  <label for="ac-1"><span class="fa fa-plus"></span>&nbsp;&nbsp;Notifications</label>
                  <article class="notificationarticle"><!-- notificationarticle-->
                      <div class="row no-margin-padding" id="notificationaccordiancontainer"><!-- notificationaccordiancontainer --> 

                          <div class="col-sm-12 no-margin-padding" id="notificationcontainer"><!--notificationcontainer-->

                            <div class="col-sm-12" id="individualnotification" style="background:#D8DBD5 "><!-- individualnotification-->
                              <div class="col-sm-1 no-margin-padding"><center><img src="images/user.png" class="img-responsive"></center></div>
                              <div class="col-sm-9 no-margin-padding"><p class="no-margin-padding" style="padding:0; "><b>Urjit Patel</b> posted in webdevelopement</p></div>
                            </div><!--end of individualnotification-->

                            <div class="col-sm-12" id="individualnotification" style="background: white"><!-- individualnotification-->
                              <div class="col-sm-1 no-margin-padding"><center><img src="images/user.png" class="img-responsive"></center></div>
                              <div class="col-sm-9 no-margin-padding"><p class="no-margin-padding" style="padding:0; "><b>Urjit Patel</b> has accepted your request ot join MNNIT-2k16 thread</p></div>
                            </div><!--end of individualnotification-->

                           <div class="col-sm-12" id="individualnotification" style="background: #D8DBD5"><!-- individualnotification-->
                              <div class="col-sm-1 no-margin-padding"><center><img src="images/user.png" class="img-responsive"></center></div>
                              <div class="col-sm-9 no-margin-padding"><p class="no-margin-padding" style="padding:0; "><b>Urjit Patel</b> has requested to join your thread - Web development</p></div>
                              <div></div>
                              <div class="col-sm-2 no-margin-padding" id="acceptrejectcontainer">
                                <center><div class="col-sm-6 no-margin-padding"><button class="btn">Accept</button></div></center>
                                <center><div class="col-sm-6 no-margin-padding"><button class="btn">Reject</button></div></center>
                              </div>
                            </div><!--end of individualnotification-->

                             <div class="col-sm-12" id="individualnotification" style="background: white"><!-- individualnotification-->
                              <div class="col-sm-1 no-margin-padding"><center><img src="images/user.png" class="img-responsive"></center></div>
                              <div class="col-sm-9 no-margin-padding"><p class="no-margin-padding" style="padding:0; "><b>Urjit Patel</b> has accepted your request ot join MNNIT-2k16 thread</p></div>
                            </div><!--end of individualnotification-->

                            <div class="col-sm-12" id="individualnotification" style="background: #D8DBD5"><!-- individualnotification-->
                              <div class="col-sm-1 no-margin-padding"><center><img src="images/user.png" class="img-responsive"></center></div>
                              <div class="col-sm-9 no-margin-padding"><p class="no-margin-padding" style="padding:0; "><b>Urjit Patel</b> has requested to join your thread - Web development</p></div>
                              <div></div>
                              <div class="col-sm-2 no-margin-padding" id="acceptrejectcontainer">
                                <center><div class="col-sm-6 no-margin-padding"><button class="btn">Accept</button></div></center>
                                <center><div class="col-sm-6 no-margin-padding"><button class="btn">Reject</button></div></center>
                              </div>
                            </div><!--end of individualnotification-->

                          </div><!--end of notificationcontainer-->

                      </div><!--end of notificationaccordiancontainer --> 
                  </article><!-- end of notificationarticle-->
                </div>



                <div>
                  <input id="ac-2" name="accordion-1" type="checkbox"  />
                  <label for="ac-2"><span class="fa fa-plus"></span>&nbsp;&nbsp;Start a new thread</label>
                  <article class="newthreadarticle"><!-- newthreadarticle-->
                    
                    <div class="row no-margin-padding" id="newthreadaccordiancontainer"><!-- newthreadaccordiancontainer -->

                    <div class="col-sm-12 no-margin-padding" id="threadname">
                        <div class="col-sm-2 no-margin-padding"><p><b>THREAD NAME: </b></p></div>
                        <div class="col-sm-10 no-margin-padding"><p><input type="text"></input></p></div>
                    </div>
                    <div class="col-sm-12 no-margin-padding" id="threadcontent">
                        <div class="col-sm-2 no-margin-padding"><p><b>DESCRIPTION: </b></p></div>
                        <div class="col-sm-10 no-margin-padding"><p><textarea rows="3"></textarea></p></div>
                    </div>

                    <div class="col-sm-12 no-margin-padding" id="threadtype">
                       <div class="col-sm-2 no-margin-padding"><p><b>TYPE: </b></p></div>
                        <div class="col-sm-10">
                            <input type="radio" name="type"> Public<br>
                            <input type="radio" name="type"> Private<br>
                        </div>
                    </div>
                    
                    <div class="col-sm-1 col-sm-push-5"><center><button class="btn">Submit</button></center></div>

                      
                    </div><!--end of newthreadaccordiancontainer -->
                  
                  </article><!-- end of newthreadarticle -->
                </div>




                <div>
                  <input id="ac-3" name="accordion-1" type="checkbox" />
                  <label for="ac-3"><span class="fa fa-plus"></span>&nbsp;&nbsp;View All Threads</label>
                  <article class="allthreadarticle">
                    <?php require('profile_allthreads.php');?>
                  </article>
                </div>



                <div>
                  <input id="ac-4" name="accordion-1" type="checkbox" />
                  <label for="ac-4"><span class="fa fa-plus"></span>&nbsp;&nbsp;View Your Threads</label>
                  <article class="yourthreadarticle">
            
                    <?php require('profile_yourthreads.php');?>

                  </article>
                </div>

                  </section><!--end of accordion container -->
                </div>

              </div><!-- end of profile info col -->

          </div><!-- end of main row-->
      </div><!-- end of maincontainer-->
    </div><!-- end of wrapper -->
</body>
 <script src="js/jquery-2.2.1.min.js" type="text/javascript"></script>
 <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
 <script src="plugins/justgage-1.2.2/justgage.js" type="text/javascript"></script>
 <script src="plugins/justgage-1.2.2/raphael-2.1.4.min.js" type="text/javascript"></script>
 <script type="text/javascript" src="plugins/accordion/js/modernizr.custom.29473.js"></script>
 <script>
    var g1, g2, g3;
    var valg1=135,ming1=0,maxg1=100;
    if (valg1>maxg1) {
      ming1=valg1-10 ;
      maxg1=ming1+100;
    }
    document.addEventListener("DOMContentLoaded", function(event) {
        g1 = new JustGage({
            id: "g1",
            value: valg1,
            min: ming1,
            max: maxg1,
            title: "Total number of Post",
            label: "Your Post"
        });

         g2 = new JustGage({
            id: "g2",
            value: getRandomInt(0, 100),
            min: 0,
            max: 100,
            title: "Your Threads",
            label: "Your Threads"
        });

          g3 = new JustGage({
            id: "g3",
            value: getRandomInt(0, 100),
            min: 0,
            max: 100,
            title: "Total number of Post",
            label: "Your Post"
        });
        

        setInterval(function() {
            //g1.refresh(getRandomInt(0, 100));
            g2.refresh(getRandomInt(0, 100));
            g3.refresh(getRandomInt(0, 100));
        }, 2500);
    });
    </script>
    <script>
      function simulateclick(a){
        $("#ac-"+a).click();
      }
    </script>
</html>