<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>TrueGene</title>
    <link rel="icon" href="./img/Logo.png" type="image/gif" sizes="16x16">
    <link rel="stylesheet" href="stylesheet_custom.css" >

    <link rel="stylesheet" href="./css/stylesheet_custom.css" >


    <!-- <script src="./js/index.js"></script> -->
    <style>
    body {font-family: Arial, Helvetica, sans-serif;}
    * {box-sizing: border-box;}

    /* Button used to open the contact form - fixed at the bottom of the page */
    .open-button {
      background-color: #4f5be7;
      color: white;
      padding: 16px 20px;
      border: none;
      cursor: pointer;
      opacity: 0.8;
      z-index:100;
      position: fixed;
      bottom: 23px;
      right: 28px;
      width: 150px;
      /* top: 415px; */
      /* z-index:1000; */

    }

    /* The popup form - hidden by default */
    .form-popup {
      display: none;
      position: fixed;
      bottom: 0;
      right: 15px;
      border: 3px solid #f1f1f1;
      z-index: 9;
    }

    /* Add styles to the form container */
    .form-container {
      max-width: 300px;
      padding: 10px;
      background-color: white;
    }

    /* Full-width input fields */
    .form-container input[type=text], .form-container input[type=password] {
      width: 100%;
      padding: 15px;
      margin: 5px 0 22px 0;
      border: none;
      background: #f1f1f1;
    }

    /* When the inputs get focus, do something */
    .form-container input[type=text]:focus, .form-container input[type=password]:focus {
      background-color: #ddd;
      outline: none;
    }

    /* Set a style for the submit/login button */
    .form-container .btn {
      background-color: #4CAF50;
      color: white;
      padding: 16px 20px;
      border: none;
      cursor: pointer;
      width: 100%;
      margin-bottom:10px;
      opacity: 0.8;
    }

    /* Add a red background color to the cancel button */
    .form-container .cancel {
      background-color: red;
    }

    /* Add some hover effects to buttons */
    .form-container .btn:hover, .open-button:hover {
      opacity: 1;
    }


    .textbox-submit-footer{
        border:solid 1px #ebebeb;
          /* width:6 rem;" */
    }
    .container{
      /* border:1px solid red; */
      margin: 0 auto;
    }
    </style>


  </head>

  <body>
    <div class="main-class">
    <button class="open-button" onclick="openForm()">Contact Us</button>

    <div class="form-popup" id="myForm" >
      <form action="insert.php" class="form-container" method="post">
        <!-- <h1>Login</h1> -->
        <button type="button" class="close" aria-label="Close" onclick="closeForm()">
          <span aria-hidden="true">&times;</span>
        </button        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="email" required>
        <label for="email"><b>Phone number</b></label>
        <input type="text" placeholder="Enter Phone number" name="email" required>

        <label for="psw"><b>Type here</b></label>
        <input type="text" placeholder="Enter your query" name="psw" required>

        <button type="submit" class="btn" name="submit">submit</button>
        <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
      </form>
    </div>

    <script>
    function openForm() {
      document.getElementById("myForm").style.display = "block";
    }

    function closeForm() {
      document.getElementById("myForm").style.display = "none";
    }
    </script>

    <div class="main-background ">
    <strong>
        <div class="container ">
        <nav class="navbar container navbar-expand-lg navbar-light"  >
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon" >
            </span>
          </button>
          <div class="collapse  navbar-collapse " id="navbarTogglerDemo01">
            <a class="navbar-brand " href="#"><img class="mr-4 img-fluid"src="./img/Logo.png" width="108" height="60"/></a>
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0 justify-content-center" >
              <li class="nav-item active">
                <a class="nav-link mr-2" href="#">About <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item active">
                <a class="nav-link mr-2" style="color:#4f5be7;" href="#">For Individual</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link mr-2" href="#">For Clinicians</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link mr-2" href="#">Resources</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link mr-2 " href="login.html">SingIn</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link mr-2" href="create_registration.html">Register</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link mr-2" href="#">          <i class="fas fa-search" aria-hidden="true"></i>
    </a>
              </li>
              <li class="nav-item active">
                <a class="nav-link mr-2" href="#"><i class="fas fa-mail-bulk"></i></a>
              </li>
              <li class="nav-item active">
                <button class="nav-link btn  i4 text-white" href="#" ><b>Book Your Test</b></a>
              </li>
            </ul>

          </div>
        </nav>
        <!-- <hr></hr> -->
    </strong>
    </div>


  <h1 class="text-center  banner-text-h1" >Your DNA is not your Destiny</h1>
  <h4 class="text-center banner-text-h4-1 " >Almost all diseases have a genetic component to them.<br> Learn what your genes say about your risk for developing <br>certain diseases.</h4>
  <h4 class="text-center pb-3 text-black banner-text-h4-2" style="font-family:Roboto bold;">Take control of your health destiny.</h4>
  <p class="text-center "><button class="text-white btn11-learn" type="submit"class="text-white btn"  ><b>LEARN MORE</b></button></p>






</div>
<!-- <div id="contactform">
  <div id="contact-button">
    <div class="rotated-text">Contact</div>
  </div>
  <form>
    <input type="text"/><input type="text"/><input type="text"/>
    <textarea row="6" col="5"></textarea>
  </form>
</div> -->

<!-- ------------------------------------------------1st section over---------------------------------------------- -->
<div class="d-sm-none d-md-block one-two-sec-padding">

  <!-- divition for padding -->

</div>
  <div class="container homepage-sec2">
    <div class="row">
      <div class="col-sm mt-5 pt-5">
        <img class="img-fluid" src="./img/homepage/Illu_1.png" />
      </div>
      <div class="col-sm mt-0 ">
        <h2 class="roboto-black-30 pt-5" >You inherit a lot from your family, including your HEALTH</h2>

        <p class="roboto-reg-18px"style="color:#2c333c;padding-top:23px">Genes are passed on from a parent to the child. A child gets one set of
           genes from the father and one set from the mother. Genes control the way you look, the way your body works and genes are what
            makes you unique. Genes can also increase the risk in a family for developing certain diseases such as cancers, heart conditions amongst many others.
          </p>
        <p class="roboto-reg-18px"style="color:#2c333c;">Learning about your genes can help you better understand your risks and take actions for preventing diseases and leading a healthier life.</p>

      </div>

    </div>
  </div>


<!-- ------------------------------------2nd sec end--------------------------------------- -->
<div class="d-sm-none d-md-none d-lg-block one-two-sec-padding">

  <!-- divition for padding -->

</div>
<!-- ------------------------------------3rd sec statted--------------------------------------- -->

<div class="container  mb-5 ">
  <h2 class="text-center roboto-black-36px"   >There are 7 Billion people on this planet.</h2>
  <h2 class="text-center roboto-reg-36px"  >There’s ONE you</h2>
</div>
<div class="container text-center mt-5">
  <img class="img-fluid mt-5 mb-5" src="./img/homepage/Illu _2.png" />
</div>


<!-- ----------------------------------------------------3rd end----------------------------------- -->

<div class="container  mb-5 my-5">
<h2 class="text-center roboto-black-36px"  style="padding-bottom: 40px">How do you beat your odds of developing a chronic disease?</h2>
<h2 class="text-center roboto-black-36px"  >truGene empowers you</h2>
  <h2 class="text-center roboto-reg-36px"  >with knowledge about your genes</h2>
</div>

<!-- --------------------------------------------------------------------------------------------------------------- -->

<div class="container mb-5 my-5 sec6 mt-5 pt-5 pb-5">
  <div class="row">
    <div class="col-sm">
      <h2 class="roboto-black-30"style="padding-bottom:30px"><strong>Expert genetic guidance</strong></h2>
      <h3 class="roboto-reg-18px">A genetic counselling session with our genetic counsellors can help you:</h3>
                    <ul class="roboto-reg-18px">
                          <li >Understand your risk based on your family history or a genetic test result</li>
                          <li>Determine if genetic testing is a good option for you</li>
                          <li>Choose the right genetic test</li>
                          <li>Understand your results</li>
                          <li class="pb-4" id="li"> Make the most informed decisions for a healthier longer life.</li>

                    </ul>

                    <button style="" class="custom-button btn btn-outline-primary my-2 my-sm-0" type="submit" ><b>LEARN MORE</></button>

    </div>
    <div class="col-sm pt-5">
      <img class="center img-fluid" src="./img/homepage/Illu_4.png" />

    </div>

  </div>
</div>


<!-- ------------------------------------5thth sec end--------------------------------------- -->
<div class="main-background-2 pt-3 ">
  <div class="container  pt-3">

    <h2 class="text-center roboto-black-40px pt-3" >truGene brings you a new kind of DNA TEST</strong></h2>
    <h2 class="text-center roboto-med-30px pt-3"  >Be PROACTIVE about your health.</h2>
      <h3 class="text-center roboto-reg-18px pt-3"  >Discover DNA insights that will help you take actions for a healthier life. Whether you are
        wanting to learn about your health risks or worried about what genetic conditions you might pass on to your kids,
         truGene's unique DNA testing methodology helps you learn more about yourself than ever before.</h3>
       </div>

<div class="container mt-5 pt-5">

  <div class="card-deck  ">
         <div class="col-sm  text-center card rounded shadow-lg p-3  bg-white  r2 r3" >

           <div class="card-block mt-4 pb-2  mb-3 circle">
                     <img class="card-img-top img-fluid text-center mt-2 p-2 " src="./img/homepage/Shape 30.png" style="height:160px;width:160px;border-radius:70px;background-color:#e2f5f6" alt="Card image cap" >
                 </div>
           <div class="card-body  mb-5 pb-5  text-center">
             <h4 class="card-title roboto-bold-30px pb-5 mb-4 pt-3"><b>Cancer Test</b></h4>
             <h3 class="card-text roboto-reg-18px">A detailed analysis of your genes to help you learn your risks for developing cancers of the breast, ovarian, uterine, colorectal, prostrate, pancreatic and stomach cancers.</h3>
             <br><p class="text-center "><button class="text-white btn11-learn" type="submit"class="text-white btn"  >LEARN MORE</button></p>

           </div>
         </div>

         <div class=" col-sm text-center card rounded shadow-lg p-3  bg-white  r2 r3" >

           <div class="card-block mt-4 pb-2  mb-3 circle" >
                     <img class="card-img-top img-fluid text-center mt-2 p-2 " src="./img/homepage/Shape 34.png" style="height:160px;width:160px;border-radius:70px;background-color:#e2f5f6" alt="Card image cap" >
                 </div>
  <div class="card-body  text-center mb-5 pb-5">

    <h4 class="card-title roboto-bold-30px pb-5 mb-4 pt-3"><b>Cardiac Test</b></h4>
    <h3 class="card-text roboto-reg-18px ">A detailed analysis of over 90 genes to understand your risks for developing heart conditions such as familial hypercholestrolemia, cardiomyopathy, Arrythmia etc.</h3>
     <br><br><p class="text-center "><button class="text-white btn11-learn" type="submit"class="text-white btn"  ><b>LEARN MORE</b></button></p>
  </div>
</div>
  </div>


</div>
<div class="d-sm-none d-md-none d-lg-block one-two-sec-padding">

  <!-- divition for padding -->

</div>
</div>
<!-- ---------------------------------- -->

<div class="container mt-5">
  <h2 class="text-center roboto-black-36px"><strong>What do you GET?</strong></h2>
  <!-- <h2 class="text-center"  ><small>truGene empowers you</small></h2> -->
    <h3 class="text-center roboto-reg-30px"  >It starts with a conversation</h3>
<br></br>

</div>
<div class="container  ">
    <div class="card-deck  text-white">
    <div class="card  rounded shadow-lg p-3 mb-5 r3 roboto-black-bold " style="background-color:#eab623">


      <div class="card-body text-center ">
        <!-- <img class="card-img-top" src="" alt="Card image cap"> -->
        <div class="card-block mt-2 p-2 circle" >
                  <img class="card-img-top text-center p-2 b1" src="./img/homepage/1.png"  alt="Card image cap" >
              </div>
        <h5 class="card-title roboto-bold-24px">Schedule an Appointment</h5>
        <h3 class="card-text  roboto-reg-18px">It’s fast and easy to do online, and your personal information will always be kept confidential and protected</h3>
      </div>
      <br>
    </div>
    <div class="card rounded shadow-lg p-3 mb-5 r3 " style="background-color:#de7e52" >
      <div class="card-body text-center">
        <div class="card-block  p-2 circle" >
                  <img class="card-img-top text-center p-2 b1 " src="./img/homepage/2.png"  alt="Card image cap" >
              </div>
              <h5 class="card-title  roboto-bold-24px">Schedule an Appointment</h5>
              <h3 class="card-text  roboto-reg-18px">It’s fast and easy to do online, and your personal information will always be kept confidential and protected</h3>
      </div>
    </div>
    <div class="card  rounded shadow-lg p-3 mb-5  r3 " style="background-color:#bfaee0">
      <div class="card-body text-center">
        <!-- <img class="card-img-top" src="" alt="Card image cap"> -->
        <div class="card-block mt-2 p-2 circle" >
                  <img class="card-img-top text-center b1 p-2 r3" src="./img/homepage/3.png" alt="Card image cap" >
              </div>
              <h5 class="card-title roboto-bold-24px">Schedule an Appointment</h5>
              <h3 class="card-text  roboto-reg-18px">It’s fast and easy to do online, and your personal information will always be kept confidential and protected</h3>
      </div>
    </div>
    <div class="card  rounded shadow-lg p-3 mb-5 r3  " style="background-color:#2fc2fc">
      <div class="card-body text-center">
        <!-- <img class="card-img-top" src="" alt="Card image cap"> -->
        <div class="card-block mt-2 p-2 mb-3 circle" >
                  <img class="card-img-top text-center b1  p-2 " src="./img/homepage/4.png"  alt="Card image cap" >
              </div>
              <h5 class="card-title roboto-bold-24px">Schedule an Appointment</h5>
              <h3 class="card-text  roboto-reg-18px">It’s fast and easy to do online, and your personal information will always be kept confidential and protected</h3>
    </div>
  </div>
  </div>
</div>

  <div class="container mt-5 pt-3 " >

<h2 class="text-center p-2 roboto-black-36px"  ><strong>Help Us to help you</strong></h2>
</div>


<div class="container  ">


      <div class="row sec12 padding-container">

        <div class="col-sm" style="">
          <img class="img-fluid" src="./img/homepage/Illu_5.png" style="padding-bottom:70px;"/>
        </div>
          <div class="col-sm" style="padding-top:70px;">
            <h4 style="color:#4f5be7;"><strong>Start your journey to better health</strong></h4>

            <h3 class="roboto-reg-18px pb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo </h3>

      <button class="mb-5 center-block btn btn-outline-primary my-2 my-sm-0" type="submit">Am i eligible</button>

          </div>


        </div>
</div>


<!-- ;border:solid 1px red; -->

<footer class=" page-footer font-small  pt-4" style="background:#eff7ff">
  <!-- <footer class="page-footer font-small  pt-4" style="background:#eff7ff"> -->

  <div class="container  ">

    <h2 class="text-center"  style="padding-bottom: 40px;padding-top:50px"><strong>Schedule your Genetic Counselling Session</strong></h2>

    <h3 class="text-center roboto-reg-18px"  >Lorem ipsum dolor sit amet, consectetur adipisicing elit,</h3>
    <h3 class="text-center roboto-reg-18px" style="padding-bottom: 70px";> sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </h3>

  </div>



  <div class="container " style="padding-bottom:20px;">

    <!--Grid row-->
              <div class="row clearfix">

                <!--Grid column-->
                <div class="col-sm " >

                  <!-- Form -->
                  <!-- <form class="form-inline   rounded shadow-lg p-3 mb-3 bg-white "style="border:1px solid red;width:400px;height:15px"> -->
                  <div class=" input-group-prepend mb-3 mx-auto textbox-submit-footer">
                    <input type="text" placeholder="John do" class="form-control roboto-reg-16px" style="border:none;height:60px" aria-label="Text input with dropdown button" >
                    <button class="btn btn-outline-secondary roboto-bold-14px " href="#"  style="border:none;background-color:white;" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="img/homepage/i1.png"/>
                    </button>
                  </div>
                  <!-- Form -->

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-sm ">
          <h1 class="text-center">
            <div class="input-group-prepend mb-3 mx-auto textbox-submit-footer">
              <input type="text" placeholder="Reason" class="form-control roboto-reg-16px" style="border:none;height:60px" aria-label="Text input with dropdown button" >
              <button class="btn btn-outline-secondary roboto-bold-14px " href="#"  style="border:none;background-color:white;" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="img/homepage/i2.png"/></button>
            </div>

                </div>
                <!--Grid column-->

              </div>


              <!--Grid row-->



              <!--Grid row-->
              <div class="row">

                <!--Grid column-->
                <div class="col-sm">

                  <!-- Form -->
                  <div class="input-group-prepend mb-3 mx-auto"style="border:solid 1px #ebebeb;">
                    <input type="text" placeholder="Email-id" class="form-control roboto-reg-16px" style="border:none;height:60px" aria-label="Text input with dropdown button" >
                    <button class="btn btn-outline-secondary roboto-bold-14px " href="#"  style="border:none;background-color:white;" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="img/homepage/i3.png"/></button>
                  </div>
                  <!-- Form -->

                </div>
                <!--Grid column-->

                <!--Grid column-->

                <div class="col-sm">

                  <div class="input-group-prepend mb-3 mx-auto"style="border:solid 1px #ebebeb;">
                    <input type="text" placeholder="Reffered-by" class="form-control roboto-reg-16px" style="border:none;height:60px" aria-label="Text input with dropdown button" >
                    <button class="btn btn-outline-secondary roboto-bold-14px " href="#"  style="border:none;background-color:white;" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="img/homepage/i4.png"/></button>
                  </div>

                </div>
                <!--Grid column-->

              </div>


              <!--Grid row-->



              <!--Grid row-->
              <div class="row">

                <!--Grid column-->
                <div class="col-sm">

                  <!-- Form -->
                  <div class="input-group-prepend mb-3 mx-auto"style="border:solid 1px #ebebeb;">
                    <input type="text" placeholder="Phone number" class="form-control roboto-reg-16px" style="border:none;height:60px" aria-label="Text input with dropdown button" >
                    <button class="btn btn-outline-secondary roboto-bold-14px " href="#"  style="border:none;background-color:white;" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="img/homepage/i5.png"/></button>
                  </div>
                  <!-- Form -->

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-sm">

                  <div class="input-group-prepend mb-3 mx-auto"style="border:solid 1px #ebebeb;">
                    <input type="text" placeholder="Message" class="form-control roboto-reg-16px" style="border:none;height:60px" aria-label="Text input with dropdown button" >
                    <button class="btn btn-outline-secondary roboto-bold-14px " href="#"  style="border:none;background-color:white;" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="img/homepage/i2.png"/></button>
                  </div>

                </div>
                <!--Grid column-->

              </div>

            </h1>



              <div class="wrapper pt-5 mt-5 mb-5" >
                <button class="center-block btn btn-primary my-2 my-sm-0 center"style="height:60px;width:210px;border-radius:30px; background-color:#4f5be7;" type="submit"><b>Schedule Now</b></button>
                </div>
              <!--Grid row-->
       </div>
</h1>
    <!-- Footer Links -->
    <hr >



    <div class="container text-center text-md-left">
  <img class="pt-5 img-responsive" src="./img/Logo.png" style="padding-bottom:5vh"/>
      <!-- Grid row -->
      <div class="row clearfix" >

        <!-- Grid column -->
        <div class="col-md-4 mt-md-0 mt-3">

          <!-- Content -->

          <a class="navbar-brand" href="#"></a>
          <h5 class="text-uppercase">Footer Content</h5>
          <p>Here you can use rows and columns here to organize your footer content.</p>

        </div>
        <!-- Grid column -->
<div class="col-md-8 mt-md-0 mt-3 row float-right" style="border-style: 2px #000;">

        <!-- Grid column -->
        <div class="col-md-3 mb-md-0 mb-3">

            <!-- Links -->
            <h5 class="text-uppercase">Links</h5>

            <ul class="list-unstyled">
              <li>
                <a href="#!">Link 1</a>
              </li>
              <li>
                <a href="#!">Link 2</a>
              </li>
              <li>
                <a href="#!">Link 3</a>
              </li>
              <li>
                <a href="#!">Link 4</a>
              </li>
            </ul>

          </div>
          <!-- Grid column -->


            <div class="col-md-3 mb-md-0 mb-3">

                <!-- Links -->
                <h5 class="text-uppercase">Links</h5>

                <ul class="list-unstyled">
                  <li>
                    <a href="#!">Link 1</a>
                  </li>
                  <li>
                    <a href="#!">Link 2</a>
                  </li>
                  <li>
                    <a href="#!">Link 3</a>
                  </li>
                  <li>
                    <a href="#!">Link 4</a>
                  </li>
                </ul>

              </div>
          <!-- Grid column -->
          <div class="col-md-3 mb-md-0 mb-3">

            <!-- Links -->
            <h5 class="text-uppercase">Links</h5>

            <ul class="list-unstyled">
              <li>
                <a href="#!">Link 1</a>
              </li>
              <li>
                <a href="#!">Link 2</a>
              </li>
              <li>
                <a href="#!">Link 3</a>
              </li>
              <li>
                <a href="#!">Link 4</a>
              </li>
            </ul>

          </div>


          <div class="col-md-3 mb-md-0 mb-3">

              <!-- Links -->
              <h5 class="text-uppercase">Links</h5>

              <ul class="list-unstyled">
                <li>
                  <a href="#!">Link 1</a>
                </li>
                <li>
                  <a href="#!">Link 2</a>
                </li>
                <li>
                  <a href="#!">Link 3</a>
                </li>
                <li>
                  <a href="#!">Link 4</a>
                </li>
              </ul>

            </div>
          <!-- Grid column -->
        </div>

      </div>
      <!-- Grid row -->

    </div>
    <!-- Footer Links -->
<hr >
    <!-- Copyright -->
    <div class="row container">
    <div class="col-sm footer-copyright text-center py-3">© 2018 Copyright:
      <a href="#"> Truegen.com</a>
    </div>
    <div class="col-sm footer-copyright text-center py-3 float-left">Terms of Service |  Privacy Policy

    </div>
  </div>
    <!-- Copyright -->

  </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</div>
  </body>
</html>
