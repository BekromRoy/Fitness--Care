<?php

session_start();
include '../login/dbconn.php';
$name = $_SESSION['username'];
$namequry = " select * from fitness_table where name='$name' ";
$query = mysqli_query($con,$namequry);
$userdata = mysqli_fetch_assoc($query);
$useremail = $userdata['email'];
$mobile = $userdata['mobile'];
$id = $userdata['id'];
if(!isset($_SESSION['username'])) {

           header('location:../login/login.php');
}
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="../index/index.css">
  <title>Store | Fitness Care</title>
  <link rel='stylesheet' href='https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css'>
  <link type="text/css" href="../bootstrap/css/bootstrap.css" rel="stylesheet">
  <link rel="icon" type="image/png" href="../logo/logo.png">
<link rel="stylesheet" href="store.css">
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
    <a class="navbar-brand" href="../dashboard/dashboard.php">
      <img src="../logo/logo.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
      Fitness Care
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <span><a class="nav-link bek-link" aria-current="page" href="../dashboard/dashboard.php" id="home" style="text-transform: uppercase;color: #000;margin: 3px 0 0 10px;font-size: 14px;">Home</a></span>
        </li>
        <li class="nav-item">
          <div class="bek-dropdown1">
            <span><a class="nav-link bek-link" href="../about/about.php" id="about"><button class="bek-dropbtn">About  <i class="fas fa-caret-down bek-rotate"></i></button></a></span>
            <div class="bek-dropdown2 bek-dropdown3 bek-dropdown-in">
              <a href="../about/about.php" id="about2"><img src="../logo/logo.png" width="30px;">&nbsp;&nbsp;About Us</a>
              <a href="../career/career.php" id="career"><img src="../dashboard/career.png" width="40px;" style="filter: invert(100%);">&nbsp;&nbsp;Careers</a>
              <a href="../tutorial/tutorial.php" id="tutorial"><img src="../dashboard/tutorial.png" width="40px;">&nbsp;&nbsp;Tutorials</a>
            </div>
          </div>
        </li>
        <li class="nav-item">
          <div class="bek-dropdown1">
            <span><a class="nav-link bek-link" href="../food/food.php"><button class="bek-dropbtn">Food  <i class="fas fa-caret-down bek-rotate"></i></button></a></span>
            <div class="bek-dropdown2 bek-dropdown4 bek-dropdown-in">
              <a href="../meal-plans/meal-plans.php" id="meal-plans"><img src="../dashboard/foodplan.png" width="40px;">&nbsp;&nbsp;Meal Plans</a>
              <a href="../food/food.php"><img src="../dashboard/nutrition.png" width="40px;">&nbsp;&nbsp;Nutrition</a>
            </div>
          </div>
        </li>
        <li class="nav-item">
          <div class="bek-dropdown1">
            <span><a class="nav-link bek-link" href="../exercise/exercise.php"><button class="bek-dropbtn">Workouts  <i class="fas fa-caret-down bek-rotate"></i></button></a></span>
            <div class="bek-dropdown2 bek-dropdown5 bek-dropdown-in">
              <a href="../exercise/exercise.php"><img src="../dashboard/workout.png" width="40px;">&nbsp;&nbsp;Exercise</a>
              <a href="../yoga/yoga.php"><img src="../dashboard/fitness.png" width="40px;">&nbsp;&nbsp;Yoga</a>
              <a href="../workout-programs/workout-programs.php" id="workout-programs"><img src="../dashboard/workout-program.png" width="40px;">&nbsp;&nbsp;workout  programs</a>
            </div>
          </div>
        </li>
        <li class="nav-item">
          <div class="bek-dropdown1">
            <span><a class="nav-link bek-link" href="../faq/faq.php" id="faq"><button class="bek-dropbtn">faq  <i class="fas fa-caret-down bek-rotate"></i></button></a></span>
            <div class="bek-dropdown2 bek-dropdown6 bek-dropdown-in">
              <a href="../faq/faq.php" id="faq2"><img src="../dashboard/faq.png" width="40px;" style="filter: invert(100%);">&nbsp;&nbsp;faq</a>
              <a href="../contact/contactus.php"><img src="../dashboard/contact.png" width="40px;">&nbsp;&nbsp;contact us</a>
            </div>
          </div>
        </li>
        <li class="nav-item">
          <span><a class="nav-link bek-link" aria-current="page" href="store.php" style="text-transform: uppercase;color: #000; margin: 3px 0 0 20px;font-size: 14px;">Store</a></span>
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

<!-- section1 -->
<section class="sectionfaq1">
  <div class="container">
    <div class="row bek-out">
      <div class="bek-col-md-6">
        <p><span style="font-weight: 800;">fitness care e-Gift Cards</span><br> Add More to Your Exercise.</p>
        <p style="font-size: 18px;line-height: 40px;font-weight: 400;">Give the gift of health and fitness with Fitness Care eGift Cards. Send an electronic card via email and the recipient can log in, redeem your gift and buy any of our Workout Programs, calendar-based Meal Plans, or a membership to Fitness Care Plus! </p>
        <p style="font-size: 14px;line-height: 40px;font-weight: 400;">Fitness Care eGift Cards can only be used on <a href="http://fitnesscare.ultimatefreehost.in"> fitnesscare.ultimatefreehost.in</a> .</p>
      </div>
    </div>
  </div>
</section>
<!-- end of section1 -->
<!-- section2 -->
<section class="section2">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6">
        <div class="row">
        <div class="col-sm-6 bek-store-box">
          <div class="bek-store1">
              <img src="card2.png">
          </div>
          <div class="bek-store2">
            <p><i class="fas fa-rupee-sign"></i> 599</p>
            <button class="store-btn"><i class="fas fa-shopping-bag"></i> Add to Bag</button>
          </div>
        </div>
        <div class="col-sm-6 bek-store-box">
          <div class="bek-store1">
              <img src="card2.png">
          </div>
          <div class="bek-store2">
            <p><i class="fas fa-rupee-sign"></i> 1099</p>
            <button class="store-btn"><i class="fas fa-shopping-bag"></i> Add to Bag</button>
          </div>
        </div>
      </div>
      </div>
      <div class="col-md-6">
        <div class="row">
        <div class="col-sm-6 bek-store-box">
          <div class="bek-store1">
              <img src="card2.png">
          </div>
          <div class="bek-store2">
            <p><i class="fas fa-rupee-sign"></i> 1599</p>
            <button class="store-btn"><i class="fas fa-shopping-bag"></i> Add to Bag</button>
          </div>
        </div>
        <div class="col-sm-6 bek-store-box">
          <div class="bek-store1">
              <img src="card2.png">
          </div>
          <div class="bek-store2">
            <p><i class="fas fa-rupee-sign"></i> 2099</p>
            <button class="store-btn"><i class="fas fa-shopping-bag"></i> Add to Bag</button>
          </div>
        </div>
      </div>
      </div>
    </div>
  </div>

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6">
        <div class="row">
        <div class="col-sm-6 bek-store-box">
          <div class="bek-store1">
              <img src="card2.png">
          </div>
          <div class="bek-store2">
            <p><i class="fas fa-rupee-sign"></i> 2599</p>
            <button class="store-btn"><i class="fas fa-shopping-bag"></i> Add to Bag</button>
          </div>
        </div>
        <div class="col-sm-6 bek-store-box">
          <div class="bek-store1">
              <img src="card2.png">
          </div>
          <div class="bek-store2">
            <p><i class="fas fa-rupee-sign"></i> 3099</p>
            <button class="store-btn"><i class="fas fa-shopping-bag"></i> Add to Bag</button>
          </div>
        </div>
      </div>
      </div>
      <div class="col-md-6">
        <div class="row">
          <div class="col-sm-6 bek-store-box">
            <div class="bek-store1">
              <img src="card2.png">
            </div>
            <div class="bek-store2">
              <p><i class="fas fa-rupee-sign"></i> 3599</p>
              <button class="store-btn"><i class="fas fa-shopping-bag"></i> Add to Bag</button>
            </div>
          </div>
          <div class="col-sm-6 bek-store-box">
            <div class="bek-store1">
              <img src="card2.png">
            </div>
            <div class="bek-store2">
              <p><i class="fas fa-rupee-sign"></i> 4999</p>
              <button class="store-btn"><i class="fas fa-shopping-bag"></i> Add to Bag</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- end of section2 -->
<!-- section4 -->
<section class="section4">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <img src="t-shirts.jpg" style="width: 100%;">
      </div>
      <div class="col-md-6">
        <h1>Fitness Care Gear</h1>
        <h3>Team Fitness Care</h3>
        <p>&nbsp;&nbsp;&nbsp;New Fitness Care gear and clothing are still in the works, but as you might suspect, COVID significantly impacted our original plans. Unfortunately, we still don't have a solid timeline we can share, but we'll keep you up-to-date as the situation changes. <br>&nbsp;&nbsp;&nbsp;We intend to re-launch starting with casual clothing, following up with gear and other apparel if all goes well. If you've already filled out the gear survey, thank you! If not, it only takes about two minutes and will let us know what is most important to you.</p>
        <a href="../contact/contactus.php">Let us know you gear style.</a>
      </div>
    </div>
  </div>
</section>
<!-- end of section4 -->
<!-- section3 -->
<section class="section3">
  <h1 style="margin-bottom: 5px;">Other Shopping Options</h1>
  <p>Explore Workout Programs, Meal Plans, and FB Plus memberships.</p>
  <div class="bek-btn-div">
    <a href="../meal-plans/meal-plans.html"><button class="bek-other-shop">Meal Plans</button></a>
    <a href="../workout-programs/workout-programs.html"><button class="bek-other-shop">Workout Programs</button></a>
    <a href="../join/join.html"><button class="bek-other-shop" style="margin-right: 0;">Fitness Care Plus</button></a>
  </div>
</section>
<!-- end of section3 -->

<!-- back to top button-->
<a href="#gotop"><button id="myBtn" title="Go to top"><img src="../index/arrow.png" width="30"></button></a>
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

<!-- end of faq section -->
<script src='https://code.jquery.com/jquery-3.2.1.min.js'></script>
<script  src="store.js"></script>
<script src="https://kit.fontawesome.com/72c6e5ab9f.js" crossorigin="anonymous"></script>
<script src="../bootstrap/js/bootstrap.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js?ver=1.3.2'></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="../index/index.js"></script>
<script src="../denie/denie.js"></script>

</body>
</html>