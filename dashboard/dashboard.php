<?php

session_start();
include '../login/dbconn.php';

if(!isset($_SESSION['username'])) {

           header('location:../login/login.php');
}
?>
<!-- html part -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="../home/home.css">
	<link rel="stylesheet" type="text/css" href="dashboard.css">
	<link type="text/css" href="../bootstrap/css/bootstrap.css" rel="stylesheet">
	<link rel="icon" type="image/png" href="../logo/logo.png">
	<title>Dashboard | Fitness Care</title>
</head>
<body>
<!--preloader section-->
<link rel="stylesheet" type="text/css" href="../preloader/preloader.css">
<section class="bek-preloader-one">
  <div class="bek-preloader-one-out3"></div>
  <div class="bek-preloader-one-out4"></div>
  <div class="bek-preloader-one-out1">
    <img src="../logo/logo.png">
  </div>
  <div class="bek-preloader-one-out2">
    <span style="--i:1;">F</span>
    <span style="--i:2;">I</span>
    <span style="--i:3;">T</span>
    <span style="--i:4;">N</span>
    <span style="--i:5;">E</span>
    <span style="--i:6;">S</span>
    <span style="--i:7;">S</span>
    <span style="--i:8;">&nbsp;</span>
    <span style="--i:9;">C</span>
    <span style="--i:10;">A</span>
    <span style="--i:11;">R</span>
    <span style="--i:12;">E</span>
  </div>
</section>
<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script src="../preloader/preloader.js"></script>
<!--end of preloader section-->

<!-- mouse circle -->
<div id="bek-mouse-circle" class="bek-mouse-circle"></div>
<!-- end of mouse circle -->
<!-- nav bar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top bek-nav1" style="border-bottom: 1px solid #ffe0e0;">
  <div class="container-xl">
    <a class="navbar-brand" href="dashboard.php">
      <img src="../logo/logo.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
      Fitness Care
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <span><a class="nav-link bek-link" aria-current="page" href="dashboard.php" id="home" style="text-transform: uppercase;color: #000;margin: 3px 0 0 10px;font-size: 14px;">Home</a></span>
        </li>
        <li class="nav-item">
          <div class="bek-dropdown1">
            <span><a class="nav-link bek-link" href="../about/about.php" id="about"><button class="bek-dropbtn">About  <i class="fas fa-caret-down bek-rotate"></i></button></a></span>
            <div class="bek-dropdown2 bek-dropdown3 bek-dropdown-in">
              <a href="../about/about.php" id="about2"><img src="../logo/logo.png" width="30px;">&nbsp;&nbsp;About Us</a>
              <a href="../career/career.php" id="career"><img src="career.png" width="40px;" style="filter: invert(100%);">&nbsp;&nbsp;Careers</a>
              <a href="../tutorial/tutorial.php" id="tutorial"><img src="tutorial.png" width="40px;">&nbsp;&nbsp;Tutorials</a>
            </div>
          </div>
        </li>
        <li class="nav-item">
          <div class="bek-dropdown1">
            <span><a class="nav-link bek-link" href="../food/food.php"><button class="bek-dropbtn">Food  <i class="fas fa-caret-down bek-rotate"></i></button></a></span>
            <div class="bek-dropdown2 bek-dropdown4 bek-dropdown-in">
              <a href="../meal-plans/meal-plans.php" id="meal-plans"><img src="foodplan.png" width="40px;">&nbsp;&nbsp;Meal Plans</a>
              <a href="../food/food.php"><img src="nutrition.png" width="40px;">&nbsp;&nbsp;Nutrition</a>
            </div>
          </div>
        </li>
        <li class="nav-item">
          <div class="bek-dropdown1">
            <span><a class="nav-link bek-link" href="../exercise/exercise.php"><button class="bek-dropbtn">Workouts  <i class="fas fa-caret-down bek-rotate"></i></button></a></span>
            <div class="bek-dropdown2 bek-dropdown5 bek-dropdown-in">
              <a href="../exercise/exercise.php"><img src="workout.png" width="40px;">&nbsp;&nbsp;Exercise</a>
              <a href="../yoga/yoga.php"><img src="fitness.png" width="40px;">&nbsp;&nbsp;Yoga</a>
              <a href="../workout-programs/workout-programs.php" id="workout-programs"><img src="workout-program.png" width="40px;">&nbsp;&nbsp;workout  programs</a>
            </div>
          </div>
        </li>
        <li class="nav-item">
          <div class="bek-dropdown1">
            <span><a class="nav-link bek-link" href="../faq/faq.php" id="faq"><button class="bek-dropbtn">faq  <i class="fas fa-caret-down bek-rotate"></i></button></a></span>
            <div class="bek-dropdown2 bek-dropdown6 bek-dropdown-in">
              <a href="../faq/faq.php" id="faq2"><img src="faq.png" width="40px;" style="filter: invert(100%);">&nbsp;&nbsp;faq</a>
              <a href="../contact/contactus.php"><img src="contact.png" width="40px;">&nbsp;&nbsp;contact us</a>
            </div>
          </div>
        </li>
        <li class="nav-item">
          <span><a class="nav-link bek-link" aria-current="page" href="../store/store.php" style="text-transform: uppercase;color: #000; margin: 3px 0 0 20px;font-size: 14px;">Store</a></span>
        </li>
      </ul>
      <ul class="mb-2 mb-lg-0" style="list-style: none;">
        <li class="nav-item">
          <div class="bek-dropdown1">
            <span><a class="nav-link bek-link" href="../account/account.php"><button class="bek-dropbtn" style="margin: 0 0;align-items: center;text-align: center;justify-content: center;display: flex;flex-direction: row;"><div style="width: 35px;height: 35px;border-radius: 50%;overflow: hidden;"><img src="../logo/logo.png" style="width: 100%;height: 100%;"></div>&nbsp;<span style="width: 100px;"><?php echo $_SESSION['username']; ?></span>&nbsp;<i class="fas fa-caret-down bek-rotate"></i></button></a></span>
            <div class="bek-dropdown7">
              <a href="../account/account.php" id="account"><i class="fas fa-user-circle" style="color: #ff2b2b;"></i>&nbsp;&nbsp;Account</a>
              <a href="../notifications/notifications.php" id="notifications"><i class="fas fa-bell" style="color: #ff2b2b;"></i>&nbsp;&nbsp;Notifications</a>
              <a href="../calender/calender.php" id="calender"><i style="color: #ff2b2b;" class="fas fa-calendar-alt"></i></i>&nbsp;&nbsp;Calender</a>
              <a href="../join/join.php"><i class="fas fa-user-plus" style="color: #ff2b2b;"></i>&nbsp;&nbsp;Fitness Care+</a>
              <a href="../login/logout.php"><i class="fas fa-sign-out-alt" style="color: #ff2b2b;"></i>&nbsp;&nbsp;Sign Out</a>
            </div>
          </div>
        </li>
      </ul>
      <form class="d-flex">
        <div class="bek-dropdown1">
      		<a class="nav-link bek-link" href="#"><button class="bek-dropbtn" style="margin: 0;"><span><i class="fas fa-search"></i></span></button></a>
      		<div class="bek-dropdown2 bek-dropdown8 bek-dropdown-in">
      			<input class="form-control me-2 bek-search" type="search" placeholder="SEARCH PRODUCT" aria-label="Search" style="width: 100%;outline: none;border: none;border-bottom: 1px solid #fff;background-color: #222638;border-radius: 0;color: #fff;">
      		</div>
      	</div>
      </form>
    </div>
  </div>
</nav>
<div style="width: 100%;height: 80px;" id="gotop"></div>
<!-- end of nav bar -->
<!-- iframe part-->

<!-- section 1 -->
<section class="section11">
  <div class="bek-banner">
    <video loop muted autoplay>
      <source src="../home/video/fitness.mp4" type="video/mp4">
    </video>
    <div class="bek-textBox">
      <h2>We Believe <br><i><span style="font-size: 45px;color: #ff3838;font-weight: 800;">WE'RE &nbsp;A&nbsp; FAMILY</span></i>.</h2>
      <p>We Believe we are a family. In This Website You Will Get Workout Videos, Exercises, Meal Plan Absolutely Free.</p>
      <p>Get your Workout Program™.</p>
      <a href="../join/join.php">Join Us</a>
    </div>
    <div class="bek-imgBox">
      <img src="../home/body2.png">
    </div>
  </div>
</section>
<!-- end of section 1-->
<!-- section 2-->
<section class="section2">
  <div class="container container-bek">
    <div class="row">
      <div class="col-md bek-center">
        <p style="font-size: 20px;color: #fff;margin-bottom: 10px;">Meal Plans</p>
        <p>Plans ith dietitians and nutritionists.</p>
        <a href="../meal-plans/meal-plans.php">Let's Go&nbsp;&nbsp;<i class="fas fa-arrow-right bek-arrow"></i></a>
      </div>
      <div class="col-md bek-center">
        <p style="font-size: 20px;color: #fff;margin-bottom: 10px;">Workout</p>
        <p>Access to some workout videos.</p>
        <a href="../exercise/exercise.php">Let's Go&nbsp;&nbsp;<i class="fas fa-arrow-right bek-arrow"></i></a>
      </div>
      <div class="col-md bek-center">
        <p style="font-size: 20px;color: #fff;margin-bottom: 10px;">Workout Programs</p>
        <p>Make your own workout program.</p>
        <a href="../workout-programs/workout-programs.php">Let's Go&nbsp;&nbsp;<i class="fas fa-arrow-right bek-arrow"></i></a>
      </div>
      <div class="col-md bek-center" style="border-right: 0;">
        <p style="font-size: 20px;color: #fff;margin-bottom: 10px;">Fitness Care Plus&nbsp;<span style="color: #ff2b2b; font-size: 26px;">+</span></p>
        <p>Full access to our website.</p>
        <a href="../join/join.php">Let's Go&nbsp;&nbsp;<i class="fas fa-arrow-right bek-arrow"></i></a>
      </div>
    </div>
  </div>
</section>
<!-- end of section 2 -->
<!-- section 3 -->
<section class="section3">
  <p class="bek-text2" style="font-size: 30px;">What makes us <br><i><span style="font-size: 40px;color: #ff2b2b;text-transform: uppercase;">Different?</span></i></p>
  <div class="container">
    <div class="row">
      <div class="col-md">
        <ul>
          <li class="bek-li bek-li1">Progress Result</li>
          <p>Our approaches are Scientific that why We offer a Money Back Guarantee.</p>
          <li class="bek-li bek-li2">Human Touch</li>
          <p>Our Coaches will reached at Your Door for You.</p>
          <li class="bek-li bek-li3">Community</li>
          <p>Stay Connected with Us and with other Peoples on the Same Journey.</p>
          <li class="bek-li bek-li4">Service</li>
          <p>For this Corona Condition we are working from home through online.</p>
        </ul>
      </div>
      <div class="col-md">
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="8000">
              <img src="../home/image1.png" class="d-block w-100" width="100%">
            </div>
            <div class="carousel-item" data-bs-interval="8000">
              <img src="../home/image8.png" class="d-block w-100" width="100%">
            </div>
            <div class="carousel-item" data-bs-interval="8000">
              <img src="../home/image9.png" class="d-block w-100" width="100%">
            </div>
            <div class="carousel-item" data-bs-interval="8000">
              <img src="../home/image4.png" class="d-block w-100" width="100%">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="bek-circle1"></div>
  <div class="bek-circle2"></div>
</section>
<!-- end of section 3 -->
<!-- section 4 -->
<section class="section4">
  <div class="container">
    <p class="bek-text2" style="font-size: 40px;margin-bottom: 80px;">We are <i><span style="text-transform: uppercase;color: #ff2b2b;">Redefining Fitness</span></i> for You.</p>
    <div class="row">
      <div class="col-md bek-middle">
        <img src="../home/body.png">
        <span>13,000+</span>
        <p>Body Transformation</p>
      </div>
      <div class="col-md bek-middle">
        <img src="../home/weight.png">
        <span>11,300+</span>
        <p>People Lose Their Weight</p>
      </div>
      <div class="col-md bek-middle">
        <img src="../home/certificate.png" style="width: 170px;margin-top: 30px;">
        <span style="margin-top: 25px;">50+</span>
        <p>Certified Coaches</p>
      </div>
    </div>
  </div>
</section>
<!-- end of section 4 -->
<!-- section 5 -->
<section class="section5">
    <div class="container">
      <div class="row">
        <div class="col-md">
          <p class="bek-text2" style="text-align: left;">What we do <br><span style="font-size: 45px;color: #333;text-transform: uppercase;">about <span style="color: #ff2b2b;"><i>fitness care</i></span></span></p>
          <p class="bek-text3">This is a fitness website. We made this website FITNESS CARE for the major project of our college. We all belongs to George College Sealdah. It is basically a part of our graduation course. We are seven students working as a team. To see more about us click the following button.</p>
          <a href="../about/about.php" style="text-decoration: none;"><button>Read More</button></a>
        </div>
        <div class="col-md" style="align-items: center;justify-content: center;display: flex;">
          <img src="../home/image2.png">
        </div>
      </div>
    </div>
</section>
<!-- end of section 5 -->
<!-- section 6 -->
<section class="section6">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md bek-middle2">
        <p>Ready to try <i><span style="color: #ff2b2b;font-size: 33px;">FITNESS CARE</span></i> ?</p>
      </div>
      <div class="col-md bek-middle2">
        <a href="../workout-programs/workout-programs.php"><button>Get Start Now</button></a>
      </div>
    </div>
  </div>
</section>
<!-- end of section 6 -->
<!-- section 7 -->
<section class="section7">
  <div class="container-fluid" style="padding: 0;">
    <div class="row">
      <div class="col-md-6 bek-video">
        <video width="685" loop muted autoplay>
          <source src="../home/video/video2.mp4" type="video/mp4">
        </video>
      </div>
      <div class="col-md-6 bek-video">
        <video width="685" loop muted autoplay>
          <source src="../home/video/video1.mp4" type="video/mp4">
        </video>
      </div>
    </div>
  </div>
</section>
<!-- end of section 7 -->
<!-- end of iframe part-->
<!-- back to top button-->
<a href="#gotop"><button id="gotopBtn" title="Go to top"><img src="arrow.png" width="30"></button></a>
<!-- end of back to top button-->
<!-- footer bar -->
<div class="bek-footer-out1">
  <div class="container bek-footer-out2">
    <div class="row">
      <div class="col-md-4">
        <img src="../logo/logo.png" width="80">
        <p>Your daily workout partner.</p>
      </div>
      <div class="col-md-8">
        <div class="row">
          <div class="col-md-6">
            <div class="row">
              <div class="col-sm-6">
                <p><a href="../about/about.php" id="about3" style="color: #fff;font-size: 13px;">about</a></p>
                <p><a href="../career/career.php" id="career2">careers</a></p>
                <p><a href="../tutorial/tutorial.php" id="tutorial2">tutorials</a></p>
              </div>
              <div class="col-sm-6">
                <p><a href="../food/food.php" style="color: #fff;font-size: 13px;">food</a></p>
                <p><a href="../meal-plans/meal-plans.php" id="meal-plans2">meal plans</a></p>
                <p><a href="../food/food.php">nutrition</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="row">
              <div class="col-sm-6">
                <p><a href="../exercise/exercise.php" style="color: #fff;font-size: 13px;">workout</a></p>
                <p><a href="../exercise/exercise.php">exercise</a></p>
                <p><a href="../yoga/yoga.php">yoga</a></p>
                <p><a href="../workout-programs/workout-programs.php" id="workout-programs2">workout programs</a></p>
              </div>
              <div class="col-sm-6">
                <p><a href="../faq/faq.php" style="color: #fff;font-size: 13px;" id="faq3">faq</a></p>
                <p><a href="../contact/contactus.php">contact us</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container bek-footer-out3">
    <p>Copyright <i class="far fa-copyright"></i> 2021 . Designed By  Group - H .(&nbsp;<span class="change-nm"></span>&nbsp;)</p>
  </div>
</div>
<!-- end of footer bar -->
<!--        ------------js tags------------       -->
<script src="https://kit.fontawesome.com/72c6e5ab9f.js" crossorigin="anonymous"></script>
<script src="../bootstrap/js/bootstrap.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js?ver=1.3.2'></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="../home/home.js"></script>
<script src="dashboard.js"></script>
<script src="../denie/denie.js"></script>
</body>
</html>