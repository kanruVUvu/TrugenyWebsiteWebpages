<?php 
include "config.php";
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->
  <link rel="stylesheet" href="./css/bootstrap/w3.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i"rel="stylesheet">
  <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous"> -->
  <link rel="stylesheet" href="./fonts/fontawesome-free-5.8.2-web/css/all.css" rel="stylesheet"type="text/css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"crossorigin="anonymous">
  <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet"type="text/css">
  <title>truGeny</title>
  <link rel="icon" href="./img/Logo.png" type="image/gif" sizes="16x16">
  
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="./css/jquery.calendar.js"></script>
    <link rel="stylesheet" href="./css/new.css">
  <!-- <link rel="stylesheet" href="stylesheet_custom.css">
  <link rel="stylesheet" href="./css/fonts.css">
    <link rel="stylesheet" href="./css/jquery.calendar.css" />
    <link rel="stylesheet" href="style-mobile.css" />
    <link rel="stylesheet" href="style-mobile2.css" /> -->
    <script>


    </script>

  <style>
  .carousel-control-next-icon {
    background-image: url('');
}
  .hello {
    /* margin-top: 6rem; */
    box-shadow: 0 17px 73px rgba(0, 0, 0, 0.57);
    border-radius: 40px;
    background-color: #eff7ff;
    "

  }

  .title-font-modal {
    width: 514px;
    height: 36px;
    color: #2c333c;
    font-family: "Roboto - Black";
    font-size: 36px;
    font-weight: 400;
  }

  .title-part-modal {
    width: 890px;
    height: 130px;
    background-color: #eff7ff;
  }

  .resize-1 {
    width: 396px;
    height: 60px;
    background-color: #ffffff;
  }

  .textr-box-size {
    /* Style for "Input" */
    width: 396px;
    height: 60px;
    border: 1px solid #ebebeb;
    background-color: #ffffff;
  }
  </style>
 

</head>

<body >


    <!-- <a style="    margin-top: 50vh" class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a>
    <a style="    margin-top: 50vh" class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> -->

    <!-- header -->
    <header id="headbar" class="fixed-top bg-white mainheader">
        <!-- navbar -->
        <nav class="risk-nav navbar container navbar-expand-lg nav-menu p-0 pb-4">
          <!-- <a href="#" class="navbar-brand "> -->
          <a href="indexaftersignin.html" class="navbar-brand ">

            <img class="ml-4" href="indexaftersignin.html" src="./img/Logo.png" width="108" height="60"
              alt="Logo" />
          </a>
          <button class="navbar-toggler nav-button" type="button" data-toggle="collapse" data-target="#myNavbar">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
          </button>
          <div class="collapse navbar-collapse justify-content-start  text-uppercase font-weight-regular"
            id="myNavbar">
            <ul class="navbar-nav ">
              <li class="nav-item">
                <a href="Health-History.html" class="nav-link   menu-item">Health History</a>
              </li>
              <li class="nav-item">
                <a href="Book-session.html" class="nav-link  menu-item nav-active">Book Counseling Appointment</a>
              </li>
              <li class="nav-item">
                <a href="product-page.html" class="nav-link   menu-item">Order truGeny test</a>
              </li>
              <li class="nav-item ">
                <a href="your-reports.html" class="nav-link   menu-item ">Your Reports</a>
              </li>
            </ul>
            <div class="help-btn-wrap">
              <a class="btn btn-outline-secondary rounded-pill font-weight-bold" href="al_help.html"
                role="button">HELP</a>
            </div>
            <!-- eo-help-btn-wrap -->
            <!-- <div class="login-name-wrap d-flex flex-sm-column justify-content-end ">
                <a class=" font-weight-bold " href="Activate-kit.html" role="">John Doe<i class="fas fa-chevron-down"> </i></a>
              </div> -->
            <div class="login-name-wrap d-flex flex-sm-column  dropdown ">
              <a class=" font-weight-bold pt-0 " role="" id="navbarDropdownMenuLink-4" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">John Doe<i class="fas fa-chevron-down"> </i>
                <div class="dropdown-menu dropdown-menu-left dropdown-info mt-0 pt-0" aria-labelledby="navbarDropdownMenuLink-4">
                  <a class="dropdown-item pl-4 " href="Activate-kit.html">Activate Kit</a>
                  <!-- <a class="dropdown-item pl-4" href="#">Profile</a> -->
                  <a class="dropdown-item pl-4" href="#">settings</a>
                  <a class="dropdown-item pl-4" href="signIn.html">Log out</a>
                </div>
              </a>
            </div>
          </div>

        </nav>
        <!-- end of navbar -->
      </header>

    <!-- ========================== New header start ========================== -->
    <div id="main" class="bg-white mobileheader">
    <div id="mySidenav" class="sidebar1">
        <div class="container">
          <div class="row d-flex justify-content-inline">
            <div class="col-4 pr-0">
              <span><img class="img-fluid p-1" src="./img/user.png"></span>
            </div>
            <div class="col-5 pl-0 pt-4"><span>John do</span></div>
            <div class="col-3 d-flex justify-content-end pl-0 pr-0 pt-5"><a href="javascript:void(0)" id="jhon" class="closebtn m-0" onclick="closeNav1()">×</a></div>
          </div>
        </div>




      <hr>
      <span><a href="your-reports.html">Your Report</a></span><hr>
      <span><a href="Health-History.html">Health History</a></span><hr>
      <span><a href="Book-session.html">Book Counseling Appointment</a></span><hr>
      <span><a href="product-page.html">Order truGeny Kit</a></span><hr>
      <span><a href="Activate-kit.html">Activate-kit</a></span>
      <span><a href="setting.html">Setting</a></span>
      <span><a href="signIn.html">Log-Out</a></span>
    </div>

    <div class="row">
      <div class="col-6">
          <div  class="d-flex  justify-content-start">
            <img src="./img/Logo.png" style="height: 38px; width: 60px;">
      </div>
    </div>

    <div class="col-6">
      <div  class="d-flex  justify-content-end">
          <span style="font-size:30px;cursor:pointer" onclick="openNav1()">&#9776; </span>
        </div>

        </div>
    </div>
    </div>
    <script>
    function openNav1() {
      document.getElementById("mySidenav").style.width = "250px";
    }

    function closeNav1() {
      document.getElementById("mySidenav").style.width = "0";
    }
    </script>
     <div style="padding-bottom: 76px;" class="padding2"></div>
    <!-- ========================== New header end ========================= -->

    <!-- end of header -->
    <div style="margin-top:16rem" class="margin">
    </div>



    <!-- -----------------------------------------start book my session------------------------------------------------- -->
    <div class="container hello pl-2" style="background-color: #ffffff;padding-right:0px;padding-left:0px">

      <section class="reasons-sec ">
        <div class="container reasons-sec-wrap gr-sec-wrap pt-0 pb-0">
          <div class="reasons-main-header-wrap ">
            <div class "abc bg-white ">
              <div class="row">
              <div class="col-md-12 col-sm-12 col-lg-8 d-flex p-0 m-0">

              <h2 id="head-tab1" class="ml-4 mt-5 pt-4" style="font-size:2.25rem;font-weight:900px;margin-left:1rem" >Congratulations !</h2>

            </div>
            <div id="d1" class="col-md-12 col-sm-12 col-lg-4 p-0" style="background-color:#eff7ff;display:none;border-top-right-radius: 2rem" >
            <!-- <p id="summery"style="display:none">Summery</p> -->
            </div>
          </div>


              <!-- <div style="padding-bottom:2rem">
              </div> -->


              <div class="row ">


              <div class="col-md-12 col-sm-12 col-lg-8 p-0 m-0 roboto-reg-18px">
                  <p id="p-1" class=" p-0 m-0 ml-3 pl-2" style="font-weight:400;font-size:1rem">You have just taken a step towards better health.</p><br>
              <ul class="nav mb-5 text-uppercase " id="myTab" role="tablist">
                <li class="nav-item ml-4">
                  <a class="nav-link active pl-0" id="home-tab" data-toggle="tab" href="#home" role="tab" onclick="divhidesummery();"
                    aria-controls="home" aria-selected="true" >counselling PLAN<i class="fas fa-caret-right"></i></a>
                </li>
                <li class="nav-item ">
                  <!-- document.getElementById("head-tab1").style.disply = "block"; -->

                  <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" onclick="div2showsummery();"
                    aria-controls="profile" aria-selected="false" >SCHEDULE APPOINTMENT<i class="fas fa-caret-right"></i></a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" id="messages-tab" data-toggle="tab" href="#messages" role="tab" onclick="div3showsummery();"
                    aria-controls="messages" aria-selected="false">REVIEW<i class="fas fa-caret-right"></i></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="settings-tab" data-toggle="tab" href="#settings" role="tab" onclick="div4showsummery();"
                    aria-controls="settings" aria-selected="false">PAYMENT</a>
                </li>
              </ul>
            <!-- eo gr-header -->
          </div>
          <div id="d2" class="col-md-12 col-sm-12 col-lg-4 " style="background-color:#eff7ff;display:none;">
            <p  id="summery"style="display:none;font-size:30px;font-weight:900;color:#4f5be7">Your Order Summary</p>
          </div>
        </div>

      </div>
      </div>

          <!-- eo gr-header -->
          <!-- <div style="padding-bottom:2rem;">
          </div> -->
          <div class="tab-content" style="margin-left:0px;">
            <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">
              <!-- <div style="background-color: #eff7ff;"> -->

              <h2 class="text-center pb-5" style="font-size: 1.8;font-weight: 900;color: #4f5be7;">Select a plan that works best for you</h2>

              <div class="container reasons-card-main-wrap pt-2 mt-2  mb-5 pl-0 pr-0">
                <div class="row" id="hide">
                  <div class="reasons-card-wrap  col-12 col-md-4 col-lg-4 col-xl-4">
                    <div class="card card-1 shadow-lg r4 border-0 mb-5 bg-white">
                      <div class="card-body p-0">
                        <div class="card-top">
                          <div class="text-center ">
                            
                          </div>
                          <!-- eo-hd-img -->

                        </div>
                        <!-- eo-card-top -->
                        <div class="card-btm bg-white">
						<?php
$emp_query2 = "SELECT * FROM bookcounsellingplans WHERE ID='1'";
$emp_query3 = mysqli_query($con,$emp_query2);
$rowcount=mysqli_num_rows($emp_query3);
       if($rowcount > 0){
          
          while($emp_query6 = mysqli_fetch_assoc($emp_query3)){
			  $planname=$emp_query6['PlanName'];
			  $amount=$emp_query6['Amount'];
		  }
	   }
	   echo $planname;
	   echo "<br> Rs ".$amount." /-";
	   ?>
	   
                          <!-- <h5 class= "card-title">Planning a Pregnancy</h5> -->
                          
						  <p class="card-text">

                            <ul class="text-center mx-auto m-0 p-0" style="list-style:none;line-height:1.8">
							
							
                              <li>Order your truGeny test.</li>
                              <li>Get complimentary 30 minutes of Pre-test and 30 minutes
                                of Post-test genetic counselling </li>

                                <div style="padding-bottom:8rem"></div>
                              
							  <input type="hidden" value="<?php echo $planname;?>" name="pname">
							   <input type="hidden" value="<?php echo $amount;?>" name="pamount">
                              <button class=" btn btn-outline-primary btn-hover-white  my-2 my-sm-0 " data-toggle="tab" href="#profile" role="tab" style="color:white;background: #4f5be7;width: 165px;height: 60px;box-shadow: 0 10px 32px rgba(79, 91, 231, 0.48);border-radius: 30px;"
                                type="submit" onclick="myfun();hello()" >
                                <b>Select</b></button>
                            </ul>
                          </p>


                        </div>
                        <!-- eo-card-btm -->

                      </div>
                      <!-- eo-card-body -->

                    </div>
                    <!-- eo-card-1 -->
                  </div>
                  <!-- eo-ns-card-wrap -->
                  <div class="reasons-card-wrap  col-12 col-md-4 col-lg-4 col-xl-4">
                    <div class="card card-1 shadow-lg r4 border-0 mb-5">
                      <div class="card-body p-0">
                        <div class="card-top">
                          <div class="text-center">
                          
                           
                            

                          </div>
                          <!-- eo-hd-img -->

                        </div>
                        <!-- eo-card-top -->
                        <div class="card-btm bg-white">
						<?php
$emp_query2 = "SELECT * FROM bookcounsellingplans WHERE ID='2'";
$emp_query3 = mysqli_query($con,$emp_query2);
$rowcount=mysqli_num_rows($emp_query3);
       if($rowcount > 0){
          
          while($emp_query6 = mysqli_fetch_assoc($emp_query3)){
			  $planname=$emp_query6['PlanName'];
			  $amount=$emp_query6['Amount'];
		  }
	   }
	   echo $planname;
	   echo "<br> Rs ".$amount." /-";
	   ?>
                          <!-- <h5 class= "card-title">Pregnant</h5> -->
                          <!-- <p class="card-text"> -->
                          <ul class="text-center mx-auto m-0 p-0 " style="list-style:none;line-height:1.8">
                            <li> Upload your reports</li>
                            <li> 30 minute genetic counselling session.</li>
                              <li>Assessment of health</li>
                              <li>Review of family health history</li>
                              <li>Discuss Genetic testing options</li>
                              <div style="padding-bottom:6rem"></div>


                            </ul>
                             <button class=" btn btn-outline-primary btn-hover-white  my-2 my-sm-0 " data-toggle="tab" href="#profile" role="tab" style="color:white;background: #4f5be7;width: 165px;height: 60px;box-shadow: 0 10px 32px rgba(79, 91, 231, 0.48);border-radius: 30px;"
                              type="submit" onclick="addtocart_appointment_550();div2showsummery();mello()">
                              <b>Select</b></button>                   </div>
                        <!-- eo-card-btm -->
                      </div>
                      <!-- eo-card-body -->
                    </div>
                    <!-- eo-card-1 -->
                  </div>
                  <div class="reasons-card-wrap  col-12 col-md-4 col-lg-4 col-xl-4">
                    <div class="card card-1 shadow-lg r4 border-0 mb-5">
                      <div class="card-body p-0">
                        <div class="card-top">
                          <div class="text-center mx-auto" style="list-style:none">
                            <!-- <img class="img-fluid mx-auto" src="./img/geneticspage/pregnant.png" /> -->

                          </div>
                          <!-- eo-hd-img -->

                        </div>
                        <!-- eo-card-top -->
                        <div class="card-btm bg-white">
						<?php
$emp_query2 = "SELECT * FROM bookcounsellingplans WHERE ID='3'";
$emp_query3 = mysqli_query($con,$emp_query2);
$rowcount=mysqli_num_rows($emp_query3);
       if($rowcount > 0){
          
          while($emp_query6 = mysqli_fetch_assoc($emp_query3)){
			  $planname=$emp_query6['PlanName'];
			  $amount=$emp_query6['Amount'];
		  }
	   }
	   echo $planname;
	   echo "<br> Rs ".$amount." /-";
	   ?>
                          <!-- <h5 class= "card-title">Pregnant</h5> -->

                          <ul class="text-center mx-auto m-0 p-0 " style="list-style:none;line-height:1.8">
                            <li> Upload your reports</li>
                            <li> 60 minute genetic counselling session.</li>
                              <li> Assessment of health</li>
                              <li> Review of family health history</li>
                              <li> Discuss Genetic testing options</li>
                              <li> 15 days online chat with a licensed genetic counsellor</li>


                              <div style="padding-bottom:2.3rem"></div>

                            </ul>

                              <button class=" btn btn-outline-primary btn-hover-white  my-sm-0 " data-toggle="tab" href="#profile" role="tab" style="color:white;background: #4f5be7;width: 165px;height: 60px;box-shadow: 0 10px 32px rgba(79, 91, 231, 0.48);border-radius: 30px;"
                                type="submit" onclick="addtocart_appointment_750();div2showsummery();nello()">
                                <b>Select</b></button>

                        </div>
                        <!-- eo-card-btm -->
                      </div>
                      <!-- eo-card-body -->
                    </div>
                    <!-- eo-card-1 -->
                  </div>
                  <!-- eo-ns-card-wrap -->
                  <div class="reasons-card-wrap  col-12 col-md-6 col-lg-6 col-xl-6">
                    <div class="card card-1 shadow-lg r4 border-0 mb-5">
                      <div class="card-body p-0">
                        <div class="card-top">
                          <div class="text-center py-5">
                            <!-- <img class="img-fluid mx-auto" src="./img/geneticspage/genetics-heartdisease.png" /> -->
                            <img class="img-fluid mx-auto" src="./img/book-session/Illustration1.png" />

                          </div>
                          <!-- eo-hd-img -->

                        </div>
                        <!-- eo-card-top -->
                        <div class="card-btm bg-white">
                          <h5 class="card-title ">Proactive genetic exploration</h5>
                          <p class="card-text">Our certified genetic counsellors are experts in various
                            genetics specialty areas including cancer, prenatal,
                            cardiovascular and many others. They will help you evaluate
                            your genetic health risks, interpret and evaluate your
                            test reports and guide</p>
                        </div>
                        <!-- eo-card-btm -->
                        <!-- eo-card-btm -->
                      </div>
                      <!-- eo-card-body -->
                    </div>
                    <!-- eo-card-1 -->
                  </div>
                  <!-- eo-ns-card-wrap -->
                  <div class="reasons-card-wrap  col-12 col-md-6 col-lg-6 col-xl-6">
                    <div class="card card-1 shadow-lg r4 border-0 mb-5">
                      <div class="card-body p-0">
                        <div class="card-top">
                          <div class="text-center py-5">
                            <!-- <img class="img-fluid mx-auto" src="./img/geneticspage/genetics-heartdisease.png" /> -->
                            <img class="img-fluid mx-auto" src="./img/book-session/Illustration1.png" />

                          </div>
                          <!-- eo-hd-img -->

                        </div>
                        <!-- eo-card-top -->
                        <div class="card-btm bg-white">
                          <h5 class="card-title">Who are Genetic Counsellors?</h5>
                          <p class="card-text">Genetic counsellors are health professionals with
                            specialised graduate degrees and experience in the areas of medical
                             genetics and Counseling.</p>
                        </div>
                        <!-- eo-card-btm -->
                      </div>
                      <!-- eo-card-body -->
                    </div>
                    <!-- eo-card-1 -->
                  </div>
                  <!-- eo-ns-card-wrap -->

                </div>
                <!-- ======================================================= -->

                <div id="carouselExampleControls" class="carousel slide" data-ride="false">
                    <div class="carousel-inner new">
                      <div class="carousel-item active">
                          <div class="reasons-card-wrap  col-12 col-md-4 col-lg-4 col-xl-4">
                              <div class="card card-1 newcard" style="height: 400px;">
                                <div class="card-body p-0">
                                  <div class="card-top">
                                    <div class="text-center ">
                                      
                                      
                                    </div>
                                    <!-- eo-hd-img -->

                                  </div>
                                  <!-- eo-card-top -->
                                  <div class="card-btm1 bg-white">
								  <?php
$emp_query2 = "SELECT * FROM bookcounsellingplans WHERE ID='1'";
$emp_query3 = mysqli_query($con,$emp_query2);
$rowcount=mysqli_num_rows($emp_query3);
       if($rowcount > 0){
          
          while($emp_query6 = mysqli_fetch_assoc($emp_query3)){
			  $planname=$emp_query6['PlanName'];
			  $amount=$emp_query6['Amount'];
		  }
	   }
	   echo $planname;
	   echo "<br> Rs ".$amount." /-";
	   ?>
                                    <!-- <h5 class= "card-title">Planning a Pregnancy</h5> -->
                                    <p class="card-text">

                                      <ul class="text-center mx-auto m-0 p-0" style="list-style:none;line-height:1.8">
                                        <li>Order your truGeny test.</li>
                                        <li>Get complimentary 30 minutes of Pre-test and 30 minutes
                                          of Post-test genetic counselling </li>

                                          <div style="padding-bottom:8rem"></div>

                                       <button class=" btn btn-outline-primary btn-hover-white  my-2 my-sm-0 " data-toggle="tab" href="#profile" role="tab" style="color:white;background: #4f5be7;width: 165px;height: 60px;box-shadow: 0 10px 32px rgba(79, 91, 231, 0.48);border-radius: 30px;"
                                          type="submit" onclick="myfun();" >
                                          <b>Select</b></button>
                                      </ul>
                                    </p>


                                  </div>
                                  <!-- eo-card-btm -->

                                </div>
                                <!-- eo-card-body -->

                              </div>
                              <!-- eo-card-1 -->
                            </div>
                      </div>
                      <div class="carousel-item">
                          <div class="reasons-card-wrap  col-12 col-md-4 col-lg-4 col-xl-4">
                              <div class="card card-1 newcard" style="height: 400px;">
                                <div class="card-body p-0">
                                  <div class="card-top">
                                    <div class="text-center">
                                      <!-- <img class="img-fluid mx-auto" src="./img/geneticspage/pregnant.png" /> -->
                                      

                                      

                                    </div>
                                    <!-- eo-hd-img -->

                                  </div>
                                  <!-- eo-card-top -->
                                  <div class="card-btm1 bg-white">
								  <?php
$emp_query2 = "SELECT * FROM bookcounsellingplans WHERE ID='2'";
$emp_query3 = mysqli_query($con,$emp_query2);
$rowcount=mysqli_num_rows($emp_query3);
       if($rowcount > 0){
          
          while($emp_query6 = mysqli_fetch_assoc($emp_query3)){
			  $planname=$emp_query6['PlanName'];
			  $amount=$emp_query6['Amount'];
		  }
	   }
	   echo $planname;
	   echo "<br> Rs ".$amount." /-";
	   ?>
                                    <!-- <h5 class= "card-title">Pregnant</h5> -->
                                    <!-- <p class="card-text"> -->
                                    <ul class="text-center mx-auto m-0 p-0 " style="list-style:none;line-height:1.8">
                                      <li> Upload your reports</li>
                                      <li> 30 minute genetic counselling session.</li>
                                        <li>Assessment of health</li>
                                        <li>Review of family health history</li>
                                        <li>Discuss Genetic testing options</li>
                                        <div style="padding-bottom:6rem"></div>


                                      </ul>
                                      <button class=" btn btn-outline-primary btn-hover-white  my-2 my-sm-0 " data-toggle="tab" href="#profile" role="tab" style="color:white;background: #4f5be7;width: 165px;height: 60px;box-shadow: 0 10px 32px rgba(79, 91, 231, 0.48);border-radius: 30px;"
                                        type="submit" onclick="addtocart_appointment_550();div2showsummery();">
                                        <b>Select</b></button>                  </div>
                                  <!-- eo-card-btm -->
                                </div>
                                <!-- eo-card-body -->
                              </div>
                              <!-- eo-card-1 -->
                            </div>
                      </div>
                      <div class="carousel-item">
                          <div class="reasons-card-wrap  col-12 col-md-4 col-lg-4 col-xl-4">
                              <div class="card card-1 newcard"style="height: 400px;">
                                <div class="card-body p-0">
                                  <div class="card-top">
                                    <div class="text-center mx-auto" style="list-style:none">
                                      <!-- <img class="img-fluid mx-auto" src="./img/geneticspage/pregnant.png" /> -->
                                      

                                     

                                    </div>
                                    <!-- eo-hd-img -->

                                  </div>
                                  <!-- eo-card-top -->
                                  <div class="card-btm1 bg-white">
								  <?php
$emp_query2 = "SELECT * FROM bookcounsellingplans WHERE ID='3'";
$emp_query3 = mysqli_query($con,$emp_query2);
$rowcount=mysqli_num_rows($emp_query3);
       if($rowcount > 0){
          
          while($emp_query6 = mysqli_fetch_assoc($emp_query3)){
			  $planname=$emp_query6['PlanName'];
			  $amount=$emp_query6['Amount'];
		  }
	   }
	   echo $planname;
	   echo "<br> Rs ".$amount." /-";
	   ?>
                                    <!-- <h5 class= "card-title">Pregnant</h5> -->

                                    <ul class="text-center mx-auto m-0 p-0 " style="list-style:none;line-height:1.8">
                                      <li> Upload your reports</li>
                                      <li> 60 minute genetic counselling session.</li>
                                        <li> Assessment of health</li>
                                        <li> Review of family health history</li>
                                        <li> Discuss Genetic testing options</li>
                                        <li> 15 days online chat with a licensed genetic counsellor</li>


                                        <div style="padding-bottom:2.3rem"></div>

                                      </ul>
                                       <button class=" btn btn-outline-primary btn-hover-white  my-sm-0 " data-toggle="tab" href="#profile" role="tab" style="color:white;background: #4f5be7;width: 165px;height: 60px;box-shadow: 0 10px 32px rgba(79, 91, 231, 0.48);border-radius: 30px;"
                                type="submit" onclick="addtocart_appointment_750();div2showsummery();">
                                <b>Select</b></button>
                                  </div>
                                  <!-- eo-card-btm -->
                                </div>
                                <!-- eo-card-body -->
                              </div>
                              <!-- eo-card-1 -->
                            </div>
                            <!-- eo-ns-card-wrap -->
                      </div>
                      <div class="carousel-item">
                          <div class="reasons-card-wrap  col-12 col-md-6 col-lg-6 col-xl-6">
                              <div class="card card-1 newcard" style="height: 400px;">
                                <div class="card-body p-0">
                                  <div class="card-top">
                                    <div class="text-center pt-2 pb-0">
                                      <!-- <img class="img-fluid mx-auto" src="./img/geneticspage/genetics-heartdisease.png" /> -->
                                      <img class="img-fluid mx-auto" style="height: 80px;" src="./img/book-session/Illustration1.png" />

                                    </div>
                                    <!-- eo-hd-img -->

                                  </div>
                                  <!-- eo-card-top -->
                                  <div class="card-btm1 bg-white">
                                    <h5 class="card-title ">Proactive genetic exploration</h5>
                                    <p class="card-text">Our certified genetic counsellors are experts in various
                                      genetics specialty areas including cancer, prenatal,
                                      cardiovascular and many others. They will help you evaluate
                                      your genetic health risks, interpret and evaluate your
                                      test reports and guide</p>
                                  </div>
                                  <!-- eo-card-btm -->
                                  <!-- eo-card-btm -->
                                </div>
                                <!-- eo-card-body -->
                              </div>
                              <!-- eo-card-1 -->
                            </div>
                            <!-- eo-ns-card-wrap -->
                      </div>
                        <div class="carousel-item">
                            <div class="reasons-card-wrap  col-12 col-md-6 col-lg-6 col-xl-6">
                                <div class="card card-1 newcard" style="height: 400px;">
                                  <div class="card-body p-0">
                                    <div class="card-top">
                                      <div class="text-center pt-2 pb-0">
                                        <!-- <img class="img-fluid mx-auto" src="./img/geneticspage/genetics-heartdisease.png" /> -->
                                        <img class="img-fluid mx-auto" style="height: 80px;" src="./img/book-session/Illustration1.png" />

                                      </div>
                                      <!-- eo-hd-img -->

                                    </div>
                                    <!-- eo-card-top -->
                                    <div class="card-btm1 bg-white">
                                      <h5 class="card-title">Who are Genetic Counsellors?</h5>
                                      <p class="card-text">Genetic counsellors are health professionals with
                                        specialised graduate degrees and experience in the areas of medical
                                         genetics and Counseling.</p>
                                    </div>
                                    <!-- eo-card-btm -->
                                  </div>
                                  <!-- eo-card-body -->
                                </div>
                                <!-- eo-card-1 -->
                              </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>

                <!-- ======================================================= -->
                <!-- eo-row -->
              </div>
              <!-- gr-card-wrap -->
              <h2 class="text-center" style="font-size: 1.8;font-weight: 900;color: #4f5be7;">Complimentary genetic Counselling service with every truGeny test</h2>
              <p class="text-center pb-5" style="font-size: 1rem;font-weight: 400;color: #2c333c;padding-bottom:5rem!important">
                truGeny offers complimentary pre and post test genetic Counselling session to those who take a truGeny test.</p>

            </div>



            <!-- ----------------------------------------------------schedulde sesseion section start----------------------------------------------------------------------- -->

            <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">
              <!-- <h1 style="font-size:2rem;font-weight:900px;">Our certified genetic counsellor will call you at the time of your appointment.</h1> -->

              <!-- <div style="padding-top:4rem">
              </div> -->

              <!-- <div style="padding-top:1.25rem;">

              </div> -->
              <div class="row">
                <div class="col-lg-8 date-time-sec-wrap px-0" style="">
                  <p class="mb-5"style="font-size:1.25rem;font-weight:400;padding-left:2rem">Select an appointment date and time that is convenient for you.</p>

                  <div class="date-time-sec-main row px-0 ">

                    <div class="date-main-sec col-lg-8 px-0">

                      <section style="max-width:460px;margin:0 auto;">
                        <script>
                        $(function () {
                          $('#pnlSimpleCalendar').calendar();
                        });
                        </script>
                        <div id="pnlEventCalendar" style="width:100%;"></div>

                        <script>
                        $(function () {
                          $('#pnlEventCalendar').calendar({months: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                            days: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],onSelect: function (event) {
                            $('#lblEventCalendar').text(event.label);
                          }});
                        });
                        </script>
                        <script>
                        $(function () {
                          $('#pnlStyleContainer').calendar({
                            color: '#ff0000',
                            months: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                            days: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun']
                          });
                        });
                        </script>
                      </section>
                    </div><!-- end of date-main-sec -->
                    <div class="time-main-sec col-lg-4 px-0 d-flex justify-content-center">
                  <div class="time-main-sec-wrap mx-auto">
                    <div class="time-sec-header">
                      <p>Available time</p>
                    </div><!-- end of end of time-sec-header -->
                    <div class="time-table-wrap text-left mx-auto ">
                       
	   <div class="time-table-row tt-row-1">
	   <?php
$emp_query2 = "SELECT * FROM timingavailability WHERE ID='1'";
$emp_query3 = mysqli_query($con,$emp_query2);
$rowcount=mysqli_num_rows($emp_query3);
       if($rowcount > 0){
          
          while($emp_query6 = mysqli_fetch_assoc($emp_query3)){
			  $timing=$emp_query6['availabletime'];
		  }
	   }
	  // echo $timing;
	   echo "<br>";
	   ?>
                        <button type="button" class="btn btn-outline-primary btn-hover-white" onclick='document.getElementById("time_shedule").innerHTML ="<?php echo $timing; ?>" '>Slots: <?php echo $timing; ?></button>
	<?php
$emp_query2 = "SELECT * FROM timingavailability WHERE ID='2'";
$emp_query3 = mysqli_query($con,$emp_query2);
$rowcount=mysqli_num_rows($emp_query3);
       if($rowcount > 0){
          
          while($emp_query6 = mysqli_fetch_assoc($emp_query3)){
			  $timing=$emp_query6['availabletime'];
		  }
	   }
	   
	   echo "<br>";
	   ?>
                        <button type="button" class="btn btn-outline-primary btn-hover-white" onclick='document.getElementById("time_shedule").innerHTML ="<?php echo $timing; ?>" '>Slots: <?php echo $timing; ?></button>
     <?php
$emp_query2 = "SELECT * FROM timingavailability WHERE ID='3'";
$emp_query3 = mysqli_query($con,$emp_query2);
$rowcount=mysqli_num_rows($emp_query3);
       if($rowcount > 0){
          
          while($emp_query6 = mysqli_fetch_assoc($emp_query3)){
			  $timing=$emp_query6['availabletime'];
		  }
	   }
	   
	   echo "<br>";
	   ?>                   
						<button type="button" class="btn btn-outline-primary btn-hover-white" onclick='document.getElementById("time_shedule").innerHTML ="<?php echo $timing; ?>"'>Slots: <?php echo $timing; ?></button>
                     
                        <?php
$emp_query2 = "SELECT * FROM timingavailability WHERE ID='4'";
$emp_query3 = mysqli_query($con,$emp_query2);
$rowcount=mysqli_num_rows($emp_query3);
       if($rowcount > 0){
          
          while($emp_query6 = mysqli_fetch_assoc($emp_query3)){
			  $timing=$emp_query6['availabletime'];
		  }
	   }
	   
	   echo "<br>";
	   ?>
						<button type="button" class="btn btn-outline-primary btn-hover-white" onclick='document.getElementById("time_shedule").innerHTML = "<?php echo $timing; ?>"'>Slots: <?php echo $timing; ?></button>
          <?php
$emp_query2 = "SELECT * FROM timingavailability WHERE ID='5'";
$emp_query3 = mysqli_query($con,$emp_query2);
$rowcount=mysqli_num_rows($emp_query3);
       if($rowcount > 0){
          
          while($emp_query6 = mysqli_fetch_assoc($emp_query3)){
			  $timing=$emp_query6['availabletime'];
		  }
	   }
	   
	   echo "<br>";
	   ?>             
					   <button type="button" class="btn btn-outline-primary btn-hover-white" onclick='document.getElementById("time_shedule").innerHTML = "<?php echo $timing; ?>"'>Slots: <?php echo $timing; ?></button>
                      <?php
$emp_query2 = "SELECT * FROM timingavailability WHERE ID='6'";
$emp_query3 = mysqli_query($con,$emp_query2);
$rowcount=mysqli_num_rows($emp_query3);
       if($rowcount > 0){
          
          while($emp_query6 = mysqli_fetch_assoc($emp_query3)){
			  $timing=$emp_query6['availabletime'];
		  }
	   }
	   
	   echo "<br>";
	   ?>  
						<button type="button" class="btn btn-outline-primary btn-hover-white" onclick='document.getElementById("time_shedule").innerHTML = "<?php echo $timing; ?>"'>Slots: <?php echo $timing; ?></button>
                      
                      
                        <?php
$emp_query2 = "SELECT * FROM timingavailability WHERE ID='7'";
$emp_query3 = mysqli_query($con,$emp_query2);
$rowcount=mysqli_num_rows($emp_query3);
       if($rowcount > 0){
          
          while($emp_query6 = mysqli_fetch_assoc($emp_query3)){
			  $timing=$emp_query6['availabletime'];
		  }
	   }
	  
	   echo "<br>";
	   ?>
						<button type="button" class="btn btn-outline-primary btn-hover-white" onclick='document.getElementById("time_shedule").innerHTML = "<?php echo $timing; ?>"'>Slots: <?php echo $timing; ?></button>
                       <?php
$emp_query2 = "SELECT * FROM timingavailability WHERE ID='8'";
$emp_query3 = mysqli_query($con,$emp_query2);
$rowcount=mysqli_num_rows($emp_query3);
       if($rowcount > 0){
          
          while($emp_query6 = mysqli_fetch_assoc($emp_query3)){
			  $timing=$emp_query6['availabletime'];
		  }
	   }
	   
	   echo "<br>";
	   ?> 
						<button type="button" class="btn btn-outline-primary btn-hover-white" onclick='document.getElementById("time_shedule").innerHTML = "<?php echo $timing; ?>"'>Slots: <?php echo $timing; ?></button>
                      </div>
                    </div><!-- end of end of time-table-wrap -->
                  </div><!-- end of end of time-main-sec-wrap -->

                    </div><!-- end of date-main-sec -->
                  </div><!-- end of date-time-sec row -->

                </div>
                <!-- ------------------------------eo calender code----------------------- -->
				<script type='text/javascript'>
function addtocart_appointment_0()
{
'<?php
$emp_query2 = "SELECT * FROM bookcounsellingplans WHERE ID='1'";
$emp_query3 = mysqli_query($con,$emp_query2);
$rowcount=mysqli_num_rows($emp_query3);
       if($rowcount > 0){
          
          while($emp_query6 = mysqli_fetch_assoc($emp_query3)){
			  $planname=$emp_query6['PlanName'];
			  $amount=$emp_query6['Amount'];
		  }
	   }
	   echo $planname;
	   echo "<br> Rs ".$amount." /-";
	   ?>'
	   var p1=<?php echo $amount; ?>;
	   var testnames='<?php echo $planname; ?>';
console.log(testnames);
       var p2=((13.7/100)*p1);
	   var p3=((18/100)*p1);
	   var p4=(<?php echo $amount; ?>+((13.7/100)*p1)+((18/100)*p1));
document.getElementById("planname").innerHTML=testnames;

var z = document.getElementById("testname").innerHTML=testnames;
var zz = document.getElementById("testname2").innerHTML=testnames;
var zzz = document.getElementById("testname3").innerHTML=testnames;

var p6=document.getElementById("item_price").innerHTML=p1;
var p7=document.getElementById("Shipping").innerHTML=p2;
var p8=document.getElementById("taxamt").innerHTML=p3;
var p9=document.getElementById("tot").innerHTML=p4;
var p6=document.getElementById("item_price1").innerHTML=p1;
var p7=document.getElementById("Shipping1").innerHTML=p2;
var p8=document.getElementById("taxamt1").innerHTML=p3;
var p9=document.getElementById("tot1").innerHTML=p4;
var p6=document.getElementById("item_price3").innerHTML=p1;
var p7=document.getElementById("Shipping3").innerHTML=p2;
var p8=document.getElementById("taxamt3").innerHTML=p3;
var p9=document.getElementById("tot3").innerHTML=p4;

// window.location.href = 'profile';
var navbaractive1=document.getElementById("home-tab");
var navbaractive2=document.getElementById("profile-tab");

navbaractive1.classList.remove("active");
navbaractive2.classList.add("active");

console.log(p6);
}
function div2showsummery() {
  var x = document.getElementById("summery");
  var y=document.getElementById("head-tab1");
  if (x.style.display === "none") {
    x.style.display = "block";
  }
   y.innerHTML = "Our Certified genetic counsellor will call you at at the time of your appointment.";
   var z=document.getElementById("p-1");
   z.style.display = "none";
   var a=document.getElementById("d1");
   a.style.display = "block";
   var b=document.getElementById("d2");
   b.style.display = "block";

}
function myfun(){
var x=1;
var y=500;

if (x==1){
addtocart_appointment_0();
div2showsummery();

}
else{
alert("hello");

}

}
</script>
<script type='text/javascript'>
function addtocart_appointment_550()
{
'<?php
$emp_query2 = "SELECT * FROM bookcounsellingplans WHERE ID='2'";
$emp_query3 = mysqli_query($con,$emp_query2);
$rowcount=mysqli_num_rows($emp_query3);
       if($rowcount > 0){
          
          while($emp_query6 = mysqli_fetch_assoc($emp_query3)){
			  $planname=$emp_query6['PlanName'];
			  $amount=$emp_query6['Amount'];
		  }
	   }
	   echo $planname;
	   echo "<br> Rs ".$amount." /-";
	   ?>'
	   var p1=<?php echo $amount; ?>;
	   var testnames='<?php echo $planname; ?>';
console.log(testnames);
       var p2=((13.7/100)*p1);
	   var p3=((18/100)*p1);
	   var p4=(<?php echo $amount; ?>+((13.7/100)*p1)+((18/100)*p1));
document.getElementById("planname").innerHTML=testnames;

var z = document.getElementById("testname").innerHTML=testnames;
var zz = document.getElementById("testname2").innerHTML=testnames;
var zzz = document.getElementById("testname3").innerHTML=testnames;

var p6=document.getElementById("item_price").innerHTML=p1;
var p7=document.getElementById("Shipping").innerHTML=p2;
var p8=document.getElementById("taxamt").innerHTML=p3;
var p9=document.getElementById("tot").innerHTML=p4;
var p6=document.getElementById("item_price1").innerHTML=p1;
var p7=document.getElementById("Shipping1").innerHTML=p2;
var p8=document.getElementById("taxamt1").innerHTML=p3;
var p9=document.getElementById("tot1").innerHTML=p4;
var p6=document.getElementById("item_price3").innerHTML=p1;
var p7=document.getElementById("Shipping3").innerHTML=p2;
var p8=document.getElementById("taxamt3").innerHTML=p3;
var p9=document.getElementById("tot3").innerHTML=p4;

// window.location.href = 'profile';
var navbaractive1=document.getElementById("home-tab");
var navbaractive2=document.getElementById("profile-tab");

navbaractive1.classList.remove("active");
navbaractive2.classList.add("active");

console.log(p6);
}
function div2showsummery() {
  var x = document.getElementById("summery");
  var y=document.getElementById("head-tab1");
  if (x.style.display === "none") {
    x.style.display = "block";
  }
   y.innerHTML = "Our Certified genetic counsellor will call you at at the time of your appointment.";
   var z=document.getElementById("p-1");
   z.style.display = "none";
   var a=document.getElementById("d1");
   a.style.display = "block";
   var b=document.getElementById("d2");
   b.style.display = "block";

}
</script>
<script type='text/javascript'>
function addtocart_appointment_750()
{
'<?php
$emp_query2 = "SELECT * FROM bookcounsellingplans WHERE ID='3'";
$emp_query3 = mysqli_query($con,$emp_query2);
$rowcount=mysqli_num_rows($emp_query3);
       if($rowcount > 0){
          
          while($emp_query6 = mysqli_fetch_assoc($emp_query3)){
			  $planname=$emp_query6['PlanName'];
			  $amount=$emp_query6['Amount'];
		  }
	   }
	   echo $planname;
	   echo "<br> Rs ".$amount." /-";
	   ?>'
	   var p1=<?php echo $amount; ?>;
	   var testnames='<?php echo $planname; ?>';
console.log(testnames);
       var p2=((13.7/100)*p1);
	   var p3=((18/100)*p1);
	   var p4=(<?php echo $amount; ?>+((13.7/100)*p1)+((18/100)*p1));
document.getElementById("planname").innerHTML=testnames;

var z = document.getElementById("testname").innerHTML=testnames;
var zz = document.getElementById("testname2").innerHTML=testnames;
var zzz = document.getElementById("testname3").innerHTML=testnames;

var p6=document.getElementById("item_price").innerHTML=p1;
var p7=document.getElementById("Shipping").innerHTML=p2;
var p8=document.getElementById("taxamt").innerHTML=p3;
var p9=document.getElementById("tot").innerHTML=p4;
var p6=document.getElementById("item_price1").innerHTML=p1;
var p7=document.getElementById("Shipping1").innerHTML=p2;
var p8=document.getElementById("taxamt1").innerHTML=p3;
var p9=document.getElementById("tot1").innerHTML=p4;
var p6=document.getElementById("item_price3").innerHTML=p1;
var p7=document.getElementById("Shipping3").innerHTML=p2;
var p8=document.getElementById("taxamt3").innerHTML=p3;
var p9=document.getElementById("tot3").innerHTML=p4;

// window.location.href = 'profile';
var navbaractive1=document.getElementById("home-tab");
var navbaractive2=document.getElementById("profile-tab");

navbaractive1.classList.remove("active");
navbaractive2.classList.add("active");

console.log(p6);
}
function div2showsummery() {
  var x = document.getElementById("summery");
  var y=document.getElementById("head-tab1");
  if (x.style.display === "none") {
    x.style.display = "block";
  }
   y.innerHTML = "Our Certified genetic counsellor will call you at at the time of your appointment.";
   var z=document.getElementById("p-1");
   z.style.display = "none";
   var a=document.getElementById("d1");
   a.style.display = "block";
   var b=document.getElementById("d2");
   b.style.display = "block";

}
</script>

                <div class="col-lg-4 nnn" style="background-color:#eff7ff;border-bottom-right-radius: 2rem;">

                  <!-- <h2>Summary</h2> -->
				  
                  <div class="table-responsive-sm">
                    <table class="table" style="border:none">
                      <thead>
                        <tr>

                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><b><p id="testname"></p></b></td>
                          <td><p id="item_price" value="0"></p></td>
                        </tr>
                        <tr class="d-none">
                          <td><b>Shipping + Handling</b></td>
                          <td><p id="Shipping"></p></td>

                        </tr>
                        <tr>
                          <td><b>GST @18%</b></td>
                          <td><p id="taxamt"></p></td>
                        </tr>
                        <tr>
                          <td><b>Total</b></td>
                          <td><p id="tot"></p></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                   
                  <!-- <div style="padding-top:250px">

                    <h2 style="color: #4f5be7;font-size: 24px;font-weight: 700;">How did you hear about us?</h2>
                    <div class="input-group mb-3" style="border:solid 1px #ebebeb;width:334px;">
                      <input type="text" placeholder=" Select one" class="roboto-reg-16px form-control"
                        style="border:none;height:60px" aria-label="Text input with dropdown button">
                      <button class="btn btn-outline-secondary dropdown-toggle" style="border:none ;background-color:#ebebeb;"
                        type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                      <div class="dropdown-menu">
                        <a class="dropdown-item roboto-reg-16px" href="#">Internet</a>
                        <a class="dropdown-item roboto-reg-16px" href="#">Advertisment</a>
                        <a class="dropdown-item roboto-reg-16px" href="#">Blogs</a>
                        <div role="separator" class="dropdown-divider"></div>
                        <a class="dropdown-item roboto-reg-16px" href="#">friends</a>
                      </div>
                    </div>



                  </div> -->
                </div><!-- end of summary sec -->



              </div>
<div class="row">
    <div class="col-sm-12 col-md-12 col-lg-8">
              <h3 class="pl-0 ml-0" style="color: #4f5be7;font-size: 16px;font-weight: 700;text-transform: uppercase;padding-top:30px">Your prefered choice of appointment :</h3>
              <!-- <p style="color: #2c333c;font-size: 24px;font-weight: 700;line-height: 36px;">Date : 17th May, 2019</p> -->
              <p style="color: #2c333c;font-size: 24px;font-weight: 700;line-height: 36px;">Date: <b><span id="lblEventCalendar">[date]</span></b></p>
              <div class="d-flex">
              <p style="color: #2c333c;font-size: 24px;font-weight: 700;line-height: 36px;">Time :</p>
              <p id="time_shedule"  style="color: #2c333c;font-size: 24px;font-weight: 700;line-height: 36px;"><?php date_default_timezone_set("Asia/Calcutta");   //India time (GMT+5:30)
echo date('H:i:s a'); ?> </p>
            </div>
		
                        <section id="phone-no">
              <div class="contact-info d-flex ">
                <p class="m-0" style="color: #2c333c;font-size: 24px;font-weight: 700;line-height: 36px;">Contact number :</p>
                <p style="color: #2c333c;font-size: 1.5rem;font-weight: 700;line-height: 2.25rem;border:none" type="text" id="myText">0871 2739 8891</p>
                <a class="  pt-2"onclick=inn();>  <i class=" fas fa-edit"></i> Edit Number</a>
                <!-- <a href="#" class='pushme'>PUSH ME</a> -->


              </div>
            </section>
        


              <div class=" d-flex pb-5">
                <p class="mr-5 " style="font-size:1rem;font-weight:400">The assigned genetic counsellor will call your contact number provided.</p>
                <button id="deaf" class="float-right btn btn-hover-white my-2 my-sm-0 center  mt-5"    href="#messages"  data-toggle="tab" style="height:60px;width:210px;border-radius:30px;" onclick="div3showsummery();" type="submit"><b>Continue</b></button>
              </div>
            </div>
			

              <div class="col-sm-12 col-md-12 col-lg-4 " style="background-color:#eff7ff;border-bottom-right-radius: 2rem;">


              </div>
            </div>

          </div>

            <!-- ----------------------------------------------------review section start----------------------------------------------------------------------- -->

            <div class="tab-pane" id="messages" role="tabpanel" aria-labelledby="messages-tab">



              <!-- space -->
              <!-- <div style="padding-bottom:3rem;">

              </div> -->

              <!-- eo space -->

              <div class="row">
                <div class="col-lg-8 col-sm-12 col-md-12">
                  <p class="mb-5"style="color: #84888e;font-size: 16px;font-weight: 400;color: #84888e;">Make sure the information below is correct.</p>

                  <div class="row">

                    <div class="col-md-12 col-sm-12 col-lg-4 ">
                      <h2  style="color: #2c333c;font-size: 30px;font-weight: 700;">Selected plan</h2>
                    </div>

                    <div class="col-md-4 col-sm-12 col-lg-4 d-flex">
                      <!-- <img class="m-0 img-fluid"src="img/payment/Box_confirm-page.png" style="width: 134px;height: 76px;padding-top:0px"/> -->
                     <h3 id="planname" style="color: #2c333c;font-size: 24px;font-weight: 400;"></h3>
	   <input type='hidden' value='<?php echo $planname ?>' name="piece">
                    </div>

                    <div class="col-md-4 col-sm-12 col-lg-4">
                      <button class="float-right btn btn-hover-white my-2 my-sm-0 center"style="height:60px;width:100px;border-radius:30px; " type="submit"><b>Edit</b></button>

                    </div>
                  </div>

                  <div class="container">
                    <hr>
                  </div>
                  <!-- <div style="padding-top:1.25rem;">
                  </div> -->



                  <div class="row">

                    <div class="col-md-4 col-sm-12 col-lg-4 ">
                      <h2 style="color: #2c333c;font-size: 30px;font-weight: 700;">Appointment request</h2>
                    </div>

                    <div class="col-md-4 col-sm-12 col-lg-4 ">
                      <!-- <img class="m-0 img-fluid"src="img/payment/Box_confirm-page.png" style="width: 134px;height: 76px;padding-top:0px"/> -->
                      <h3 id="sdate" style="color: #2c333c;font-size: 24px;font-weight: 400;"><i class="fas fa-calendar-alt pr-2" style="color: #a9adb3;"></i></h3>
                      <br>

                      <h3 id ="stime" style="color: #2c333c;font-size: 24px;font-weight: 400;"><i class="fas fa-clock pr-2"style="color: #a9adb3;"></i></h3>
                    </div>
					
					

                    <div class="col-md-4 col-sm-12 col-lg-4">
                      <button class="float-right btn btn-hover-white my-2 my-sm-0 center"style="height:60px;width:100px;border-radius:30px; " type="submit"><b>Edit</b></button>

                    </div>
                  </div>


                  <div class="container">
                    <hr>
                  </div>
                  <!-- <div style="padding-top:1.25rem;">
                  </div> -->

                  <div class="row">

                    <div class="col-md-4 col-sm-12 col-lg-4 ">
                      <h2 style="color: #2c333c;font-size: 30px;font-weight: 700;">Contact Number</h2>
                    </div>

                    <div class="col-md-4 col-sm-12 col-lg-4 " id="mnq">
                      <!-- <img class="m-0 img-fluid"src="img/payment/Box_confirm-page.png" style="width: 134px;height: 76px;padding-top:0px"/> -->
                      <h3 id="plan" style="color: #2c333c;font-size: 1.185rem;font-weight: 400;"><i class="fas fa-mobile-alt pr-2"style="color: #a9adb3;"></i>0871 27739 8891</h3>
                    </div>
                    <div class="col-md-4 col-sm-12 col-lg-4">
                      <button class="float-right btn btn-hover-white my-2 my-sm-0 center"style="height:60px;width:100px;border-radius:30px; " type="submit"><b>Edit</b></button>

                    </div>
                  </div>


                  <div class="container">
                    <hr>
                  </div>
                  <!-- <div style="padding-top:7rem;">
                  </div> -->
                  <div class="float-right pt-2 mt-2 mb-5">
                    <button class="float-right btn btn-hover-white my-2 my-sm-0 center  mt-5"    href="#settings"  data-toggle="tab" style="height:60px;width:210px;border-radius:30px;" type="submit"><b>Continue</b></button>

                  </div>



                </div>










                <div class="col-lg-4" style="background-color:#eff7ff;border-bottom-right-radius:2rem">

                  <!-- <h2>Summary</h2> -->
                  <div class="table-responsive-sm">
                    <table class="table" style="border:none">
                      <thead>
                        <tr>

                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                           <td><b><p id="testname2">Type of counselling</p></b></td>	
                          <td><p id="item_price1" value="0">0000.00</p></td>
                         <!-- <td><b><p id="testname">Type of counselling</p></b></td>
                          <td><p id="item_price" value="0">0000.00</p></td> -->
                        </tr>	
                        <tr class="d-none">	
                          <td><b>Shipping + Handling</b></td>	
                          <td><p id="Shipping1">0000.00</p></td>	
                        </tr>	
                        <tr>	
                          <td><b>GST @18%</b></td>	
                          <td><p id="taxamt1">0000.00</p></td>	
                        </tr>	
                        <tr>	
                          <td><b>Total</b></td>	
                          <td><p id="tot1">0000.00</p></td>	
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div style="padding-top:250px">

                    <!-- <h2 style="color: #4f5be7;font-size: 24px;font-weight: 700;">How did you hear about us?</h2> -->
                    <!-- Large button groups (default and split) -->
                    <!-- <div class="input-group mb-3" style="border:solid 1px #ebebeb;width:334px;">
                      <input type="text" placeholder=" Select one" class="roboto-reg-16px form-control"
                        style="border:none;height:60px" aria-label="Text input with dropdown button">
                      <button class="btn btn-outline-secondary dropdown-toggle" style="border:none ;background-color:#ebebeb;"
                        type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                      <div class="dropdown-menu">
                        <a class="dropdown-item roboto-reg-16px" href="#">Internet</a>
                        <a class="dropdown-item roboto-reg-16px" href="#">Advertisment</a>
                        <a class="dropdown-item roboto-reg-16px" href="#">Blogs</a>
                        <div role="separator" class="dropdown-divider"></div>
                        <a class="dropdown-item roboto-reg-16px" href="#">friends</a>
                      </div>
                    </div> -->



                  </div>
                </div>

              </div>

            </div>





            <!-- ------------------------------------------------------payment---------------------------------------- -->


            <div class="tab-pane" id="settings" role="tabpanel" aria-labelledby="settings-tab">
              <!-- <div style="padding-top:5.3rem">
              </div> -->
              <div class="row">
                <div class="col-lg-8 col-sm-12 col-md-12">

                  <h1 class="roboto-bold-30px" style="font-size:30px;font-weight:700">Credit or debit card</h1>
                  <div class="container pl-0" style="padding-bottom:20px;">
                    <div class=" d-flex inline ">
                      <div class="container col-sm-12 col-lg-6 col-md-12 pl-0">

                        <div class=" input-group-prepend mb-3 ml-0 pl-0 mr-2" style="border:solid 2px #ebebeb; width:270px;height:auto;">
                          <input type="text" placeholder="4862 6989 0597 8987" class="form-control roboto-reg-16px"
                            style="border:none;height:60px" aria-label="Text input with dropdown button">
                            <div class="input-group-prepend border-0 ">
                              <span class="input-group-text bg-white border-0" id="validationTooltip01"><img src="img/payment/visa.png" /></span>
                            </div>

                        </div>
                      </div>

                      <div class="container col-sm-12 col-lg-6 col-md-12 pl-0">
                        <a href="#"> <img class="img-fluid d-none d-lg-block" style="padding-left:100px"
                            src="img/payment/ssl.png" /></a>
                      </div>
                    </div>
                    <div class="d-flex inline  ">
                      <div class="container col-sm-12 col-lg-6 col-md-12  pl-0">
                        <div class="d-flex inline" style="width:310px">
                          <div class="input-group-prepend mb-3 mr-2 pl-0" style="border:solid 2px #ebebeb;width:130px">
                            <input type="text" placeholder="10 / 19" class="form-control roboto-reg-16px" style="border:none;height:56px"
                              aria-label="Text input with dropdown button">
                          </div>

                          <div class="input-group-prepend mb-3 mr-2 pl-0" style="border:solid 2px #ebebeb;width:130px">

                            <input type="text" placeholder="944"  class="form-control roboto-reg-16px "
                              style="border:none;height:56px" aria-label="Text input with dropdown button">
                              <div class="input-group-prepend border-0 ">
                                <span class="input-group-text bg-white border-0" id="validationTooltip01"><img src="img/payment/pay-Icon-2.png"/></span>
                              </div>

                          </div>

                        </div>
                      </div>
                      <div class="container col-sm-12 col-lg-6 col-md-12 pl-0">

                        <p class="text-center d-none d-lg-block" style="color: #84888e;">We use SSL encription to protect your personal information,
                          including your payment information.</p>

                      </div>
                    </div>
                     
                    <div class="row">
                      <h2 class="mt-3 ml-3" style="font-size:30px;font-weight:700">Promo Code</h2>
                    </div>
                    <div class="d-flex inline  ">

                      <div class="input-group-prepend mb-3 mr-4 " style="border:solid 1px #ebebeb;width:180px ">
                        <input type="text" name="pno" placeholder="Gifts or Promo codes" class="form-control roboto-reg-16px"
                          style="border:none;height:56px" aria-label="Text input with dropdown button" id="codevalue">
                      </div>

                      <p class="text-center mt-1 d-none d-lg-block">
                        <!-- <button class="text-center my-2 my-sm-0 btn-white-hover" style="width: 102px;height: 60px;border-radius: 30px;border: 1px solid #4f5be7;background-color: #ffffff;"
                          onclick="window.location.href = 'index.html#section-1';"
                          type="submit">Apply</button> -->
                          <button class="btn btn-hover-white my-2 my-sm-0"style="height:60px;width:100px;border-radius:30px; " type="submit"><b>Apply</b></button>

                      </p>




                    </div>
				
                    <a href="#"  style="color: #4f5be7;"><i class="fas fa-trash-alt pr-2"></i> Remove Code</a>

                    <div class="container">
                      <hr>
                    </div>
                    <!-- <div style="padding-top:1.25rem;">
  </div> -->
                    <!-- <hr> -->
                    <div style="padding-top:1.5rem;margin-bottom:1.5rem;">
                    </div>
                    <div class="float-right mb-5">
                      <button class="float-right btn btn-hover-white my-2 my-sm-0 center  mt-5" id="con1"    onclick="window.location.href = 'thankyou2.html';"  style="height:60px;width:210px;border-radius:30px;" type="submit"><b>Continue</b></button>
                    </div>
                  </div>
                </div>

                <div class="col-lg-4" style="background-color:#eff7ff;border-bottom-right-radius: 2rem;">

                  <!-- <h2>Summary</h2> -->
                  <div class="table-responsive-sm">
                    <table class="table" style="border:none">
                      <thead>
                        <tr>

                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><b><p id="testname3">Type of counselling</p></b></td>	
                          <td><p id="item_price3" value="0">0000.00</p></td>
                         <!-- <td><b><p id="testname">Type of counselling</p></b></td>
                          <td><p id="item_price" value="0">0000.00</p></td> -->
                        </tr>	
                        <tr class="d-none">	
                          <td><b>Shipping + Handling</b></td>	
                          <td><p id="Shipping3">0000.00</p></td>	
                        </tr>	
                        <tr>	
                          <td><b>GST @18%</b></td>	
                          <td><p id="taxamt3">0000.00</p></td>	
                        </tr>	
                        <tr>	
                          <td><b>Total</b></td>	
                          <td><p id="tot3">0000.00</p></td>	
                        </tr>
                      </tbody>
                    </table>
                    </table>
                  </div>
                  <div style="padding-top:10.5rem;padding-bottom:3rem">

                    <h2 style="color: #4f5be7;font-size: 1.5rem;font-weight: 700;">How did you hear about us?</h2>
                    <!-- Large button groups (default and split) -->
                    <!-- <div class="input-group mb-3" style="border:solid 1px #ebebeb;">
                      <input type="text" placeholder=" Select one" class="roboto-reg-16px form-control"
                        style="border:none;height:60px" aria-label="Text input with dropdown button">
                      <button class="btn btn-outline-secondary dropdown-toggle" style="border:none ;background-color:#ebebeb;"
                        type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                      <div class="dropdown-menu">
                        <a class="dropdown-item roboto-reg-16px" href="#">Internet</a>
                        <a class="dropdown-item roboto-reg-16px" href="#">Advertisment</a>
                        <a class="dropdown-item roboto-reg-16px" href="#">Blogs</a>
                        <div role="separator" class="dropdown-divider"></div>
                        <a class="dropdown-item roboto-reg-16px" href="#">friends</a>
                      </div>
                    </div> -->
                    <select class="form-control roboto-reg-16px" id="exampleFormControlSelect1" placeholder="Select an answer" name="interest" style="border:none;height:60px;width:300px">
                      <option class="dropdown-item roboto-reg-16px">How did you heard about us</option>
                      <option class="dropdown-item roboto-reg-16px">Ad</option>
                      <option class="dropdown-item roboto-reg-16px">Website</option>
                      <option class="dropdown-item roboto-reg-16px">Internet</option>
                      <option class="dropdown-item roboto-reg-16px">Social Media</option>
                    </select>


                  </div>

                </div>
              </div>
<script type="text/javascript">
			  function div3showsummery() {
var cno=document.getElementById("myText").innerHTML;
document.getElementById("plan").innerHTML=cno;
var x = document.getElementById("summery");
var y=document.getElementById("head-tab1");
var kkk=document.getElementById("lblEventCalendar").innerHTML;
var ttt=document.getElementById("time_shedule").innerHTML;

document.getElementById("sdate").innerHTML=kkk;
document.getElementById("stime").innerHTML=ttt;

if (x.style.display === "none") {
x.style.display = "block";
}
y.innerHTML = "Review your order";
var z=document.getElementById("p-1");
z.style.display = "none";
var a=document.getElementById("d1");
a.style.display = "block";
var b=document.getElementById("d2");
b.style.display = "block";
} 
</script>
<script type='text/javascript'>
function hello()
{
'<?php
$emp_query2 = "SELECT * FROM bookcounsellingplans WHERE ID='1'";
$emp_query3 = mysqli_query($con,$emp_query2);
$rowcount=mysqli_num_rows($emp_query3);
       if($rowcount > 0){
          
          while($emp_query6 = mysqli_fetch_assoc($emp_query3)){
			  $planname=$emp_query6['PlanName'];
			  $amount=$emp_query6['Amount'];
		  }
	   }
  
        $servername = "localhost";
$username = "root";
$password = "dtoGNTe5@4";
$dbname = "test";


$conn = new mysqli($servername, $username, $password, $dbname);
        $sql= mysqli_query($conn,"INSERT INTO appointmentbookingdata(ID,Username,SelectedPlan,AppointmentRequest,Contactnumber,PromoCode)
  VALUES ('5','Ravi','$planname','06-04-2021','8712739889','NA')");
          
        // Close connection
        mysqli_close($conn);
        ?>'
}
</script>
<script type='text/javascript'>
function mello()
{
'<?php
$emp_query2 = "SELECT * FROM bookcounsellingplans WHERE ID='2'";
$emp_query3 = mysqli_query($con,$emp_query2);
$rowcount=mysqli_num_rows($emp_query3);
       if($rowcount > 0){
          
          while($emp_query6 = mysqli_fetch_assoc($emp_query3)){
			  $planname=$emp_query6['PlanName'];
			  $amount=$emp_query6['Amount'];
		  }
	   }
	   ?>'
'<?php
  
        // servername => localhost
        // username => root
        // password => dtoGNTe5@4
        // database name => test
        $conn = mysqli_connect("localhost", "root", "dtoGNTe5@4", "test");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
       $sql= mysqli_query($conn,"INSERT INTO appointmentbookingdata(ID,Username,SelectedPlan,AppointmentRequest,Contactnumber,PromoCode)
  VALUES ('6','Ravi','$planname','06-04-2021','8712739889','NA')");
          
        // Close connection
        mysqli_close($conn);
        ?>'
}
</script>
<script type='text/javascript'>
function nello()
{
'<?php
$emp_query2 = "SELECT * FROM bookcounsellingplans WHERE ID='3'";
$emp_query3 = mysqli_query($con,$emp_query2);
$rowcount=mysqli_num_rows($emp_query3);
       if($rowcount > 0){
          
          while($emp_query6 = mysqli_fetch_assoc($emp_query3)){
			  $planname=$emp_query6['PlanName'];
			  $amount=$emp_query6['Amount'];
		  }
	   }
	   ?>'
	'<?php
  
        // servername => localhost
        // username => root
        // password => dtoGNTe5@4
        // database name => test
        $conn = mysqli_connect("localhost", "root", "dtoGNTe5@4", "test");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
		$sql= mysqli_query($conn,"INSERT INTO appointmentbookingdata(ID,Username,SelectedPlan,AppointmentRequest,Contactnumber,PromoCode)
  VALUES ('7','Ravi','$planname','06-04-2021','8712739889','NA')");
          
        // Close connection
        mysqli_close($conn);
        ?>'
}		
</script>
            </div>
          </div>
          <!-- eo gr-sec-wrap -->

      </section>
      <!--eo gr-sec-->



      </div>


    </div>










    <div style="padding-top:12.25rem;">


    </div>


    <footer class="footer-sec ">
      <div class="container footer-wrap text-center">
        <p>2019 truGeny</p>
        <div class="f-social-links">
          <ul class="social-links list-inline">
            <li class="list-inline-item">
              <a href="#" class="icon-facebook"><i class="fab fa-facebook"></i></a>
            </li>
            <li class="list-inline-item">
              <a href="#" class="icon-twitter"><i class="fab fa-twitter"></i></a>
            </li>
            <li class="list-inline-item">
              <a href="#" class="icon-google-plus"><i class="fab fa-google"></i></a>
            </li>
            <li class="list-inline-item">
              <a href="#" class="icon-linkedin"><i class="fab fa-linkedin-in"></i></a>
            </li>
          </ul>
          <!-- eo .social-links -->
        </div>
        <!-- eo-f-social-links -->

        <div class="col-sm rs-footer-baseline footer-copyright text-center py-3 float-left">
          <a style="color:gray" href="al_termsofservices.html">Terms of Service</a>&nbsp;|&nbsp;
          <a  style="color:gray" href="al_privacy_policy.html">Privacy Policy</a> &nbsp;|&nbsp;
          <a  style="color:gray" href="#">Consent for Research</a>&nbsp;|&nbsp;
          <a  style="color:gray" href="#">Mission</a>&nbsp;|&nbsp;
          <a  style="color:gray" href="#">Blog</a> &nbsp;|&nbsp;
          <a  style="color:gray" href="#">Customer Care</a>&nbsp;|&nbsp;
                <a  style="color:gray" href="#">Careers</a>&nbsp;|&nbsp;
        </div>
      </div>
      <!-- eo-footer-wrap -->
    </footer>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"></script>
    <script src="./js/main.js"></script>
    <script type="text/javascript" src="./js/index.js"></script>

    <script src="./css/jquery.calendar.js"></script>

    <div class="fixed-bottom bg-white stickme">
        <div class="container">

      <div class="row py-2">

        <div class="col-1 p-0 m-0">
          <!-- <i style="color:#4f5be7"class="fas fa-home fa-2x"></i> -->
        </div>
        <div class="col-2 ">
          <!-- <i class="fas fa-home fa-2x"></i>
         -->
         <img style="color:black" src="./img/icons/house.svg" class="img-fluid"/>
        </div>
        <div class="col-2">
          <!-- <i class="fas fa-mobile-alt fa-2x"></i> -->
          <img src="./img/icons/smartphone.svg" class="img-fluid"/>


        </div>
        <div class="col-2">
          <img style="color:black" src="./img/icons/envelope.svg" class="img-fluid"/>
        </div>
        <div class="col-2">
          <img style="color:black" src="./img/icons/share1.svg" class="img-fluid"/>

        </div>
        <div class="col-2">
          <img style="color:black" src="./img/icons/chat.svg" class="img-fluid"/>

        </div>
        <div class="col-1">
          <!-- <i style="color:#4f5be7"class="fas fa-home fa-2x"></i> -->
        </div>
      </div>

      </div>
      </div>

</body>

</html>
