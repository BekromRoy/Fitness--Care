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
  <title>Exercise | Fitness Care</title>
  <link rel='stylesheet' href='https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css'>
  <link type="text/css" href="../bootstrap/css/bootstrap.css" rel="stylesheet">
  <link rel="icon" type="image/png" href="../logo/logo.png">
<link rel="stylesheet" href="exercise.css">
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
            <span><a class="nav-link bek-link" href="exercise.php"><button class="bek-dropbtn">Workouts  <i class="fas fa-caret-down bek-rotate"></i></button></a></span>
            <div class="bek-dropdown2 bek-dropdown5 bek-dropdown-in">
              <a href="exercise.php"><img src="../dashboard/workout.png" width="40px;">&nbsp;&nbsp;Exercise</a>
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
<!-- section1 -->
<section class="sectionfaq1">
  <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1" style="width: 5px;height: 6px;border-radius: 50%;border: 2px solid #009dff;"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2" style="width: 5px;height: 6px;border-radius: 50%;border: 2px solid #009dff;"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3" style="width: 5px;height: 6px;border-radius: 50%;border: 2px solid #009dff;"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4" style="width: 5px;height: 6px;border-radius: 50%;border: 2px solid #009dff;"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active bek-back bek-back1">
        <div class="carousel-caption bek-yoga-center">
          <p>Shape it up !</p>
          <h1>Health is a Boon</h1>
          <a href="#abs"><button>ABS exercise</button></a>
        </div>
      </div>
      <div class="carousel-item bek-back bek-back2">
        <div class="carousel-caption bek-yoga-center">
          <p>we help you to live a</p>
          <h1>Healthy Lifestyle</h1>
          <a href="#chest"><button>CHEst exercise</button></a>
        </div>
      </div>
      <div class="carousel-item bek-back bek-back3">
        <div class="carousel-caption bek-yoga-center">
          <p>health is precious</p>
          <h1>Protect It</h1>
          <a href="#arm"><button>arm exercise</button></a>
        </div>
      </div>
      <div class="carousel-item bek-back bek-back4">
        <div class="carousel-caption bek-yoga-center">
          <p>we help you to live a</p>
          <h1>Healthy Lifestyle</h1>
          <a href="#leg"><button>leg exercise</button></a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- end of section1 -->

<!-- abs exercise section -->
<section id="abs">
  <h1>ABS Exercise</h1>
  <div class="container">
    <!-- 1st row -->
    <div class="row">
      <div class="col-md-4">
        <img src="images/jumping-jack.gif">
        <h3>JUMPING JACKS</h3>
        <p class="bek-muted">00:30 seconds</p>
        <hr class="dropdown-divider">
        <p class="bek-muted">Start with your feet together and your arms by your sides, then jump up with your feet apart and your hands overhead.</p>
        <hr class="dropdown-divider">
        <p class="bek-muted">Return to the start position then do the next rep. This excercise provides a full-body workout and works all your large muscle groups.</p>
      </div>
      <div class="col-md-4">
        <img src="images/abdominal crunches.gif">
        <h3>Abdominal Crunches</h3>
        <p class="bek-muted">x16</p>
        <hr class="dropdown-divider">
        <p class="bek-muted">Lie on your back with knees bent and your arms stretched forward. Then lift your upper body off the floor. Hold for a few seconds and slowly return.</p>
        <hr class="dropdown-divider">
        <p class="bek-muted">It primarily works the rectus abdominis muscle and obliques.</p>
      </div>
      <div class="col-md-4">
        <img src="images/russian twist.gif">
        <h3>RUSSIAN TWIST</h3>
        <p class="bek-muted">x20</p>
        <hr class="dropdown-divider">
        <p class="bek-muted">Sit on the floor with your knees bent, feet lifted a little bit and back tilted backwards.</p>
        <hr class="dropdown-divider">
        <p class="bek-muted">Then hold your hands together and twist from side to side.</p>
      </div>
    </div>

    <!-- 2nd row -->
    <div class="row">
      <div class="col-md-4">
        <img src="images/leg raise.gif">
        <h3>LEG RAISE</h3>
        <p class="bek-muted">x16</p>
        <hr class="dropdown-divider">
        <p class="bek-muted">Lie down on your back, and put your hands beneath your hips for support. Then lift your legs up until they form a right angle with the floor.</p>
        <hr class="dropdown-divider">
        <p class="bek-muted">Slowly bring your legs back down and repeat the exercise.</p>
      </div>
      <div class="col-md-4">
        <img src="images/mountain climber.gif">
        <h3>MOUNTAIN CLIMBER</h3>
        <p class="bek-muted">x16</p>
        <hr class="dropdown-divider">
        <p class="bek-muted">Start in the push-up position. Bend your right knee towards your chest and keep your left leg straight, then quickly switch from one leg to the other.</p>
        <hr class="dropdown-divider">
        <p class="bek-muted">This exercise strengthens multiple muscle groups.</p>
      </div>
      <div class="col-md-4">
        <img src="images/plank.gif">
        <h3>RUSSIAN TWIST</h3>
        <p class="bek-muted">00:30 seconds</p>
        <hr class="dropdown-divider">
        <p class="bek-muted">Lie on the floor with your toes and forearms on the ground. Keep your body straight and hold this position as long as you can.</p>
        <hr class="dropdown-divider">
        <p class="bek-muted">This exercise strengthens the abdomen, back and shoulders.</p>
      </div>
    </div>
    <div style="width: 100%;align-items: center;justify-content: center;display: flex;margin: 30px 0;"><button class="more"><i class="fas fa-arrow-down"></i>&nbsp;&nbsp;load more</button></div>
  </div>
</section>
<!-- end of abs exercise section -->

<!-- chest section -->
<section id="chest">
  <h1>Chest Exercise</h1>
  <div class="container">
    <!-- 1st row -->
    <div class="row">
      <div class="col-md-4">
        <img src="images/jumping-jack.gif">
        <h3>JUMPING JACKS</h3>
        <p class="bek-muted">00:30 seconds</p>
        <hr class="dropdown-divider">
        <p class="bek-muted">Start with your feet together and your arms by your sides, then jump up with your feet apart and your hands overhead.</p>
        <hr class="dropdown-divider">
        <p class="bek-muted">Return to the start position then do the next rep. This excercise provides a full-body workout and works all your large muscle groups.</p>
      </div>
      <div class="col-md-4">
        <img src="images/incline push-ups.gif">
        <h3>INCLINE PUSH-UPS</h3>
        <p class="bek-muted">x10</p>
        <hr class="dropdown-divider">
        <p class="bek-muted">Start in the regular position but with your hands elevated on a chair or bench. Then push your body up down using your arm strength.</p>
        <hr class="dropdown-divider">
        <p class="bek-muted">Remember to keep your body straight.</p>
      </div>
      <div class="col-md-4">
        <img src="images/push-ups.gif">
        <h3>PUSH-UPS</h3>
        <p class="bek-muted">x10</p>
        <hr class="dropdown-divider">
        <p class="bek-muted">Lay prone on the ground with arms supporting your body. Keep your body straight while raising your body with your arms.</p>
        <hr class="dropdown-divider">
        <p class="bek-muted">This exercise works the chest, shoulders, triceps, backs and legs.</p>
      </div>
    </div>
    <!-- 2nd row -->
    <div class="row">
      <div class="col-md-4">
        <img src="images/wide arm.gif">
        <h3>WIDE ARM PUSH-UPS</h3>
        <p class="bek-muted">x10</p>
        <hr class="dropdown-divider">
        <p class="bek-muted">Start in the regular push-up position but with your hands spread wider than your shoulders.</p>
        <hr class="dropdown-divider">
        <p class="bek-muted">Then push your body up and down. Remember to keep your body straight.</p>
      </div>
      <div class="col-md-4">
        <img src="images/tricep dips.gif">
        <h3>TRICEPS DIPS</h3>
        <p class="bek-muted">x10</p>
        <hr class="dropdown-divider">
        <p class="bek-muted">For the start position, sit on the chair. Then move your hip off the chair with your hands holding the edge of the chair.</p>
        <hr class="dropdown-divider">
        <p class="bek-muted">Slowly bend and stretch your arms to make your body go up and down. This is a great exercise for the triceps.</p>
      </div>
      <div class="col-md-4">
        <img src="images/cobra stretch.jpg">
        <h3>COBRA STRETCH</h3>
        <p class="bek-muted">00:30 seconds</p>
        <hr class="dropdown-divider">
        <p class="bek-muted">Lie down on your stomach and bend your elbows with your hands beneath your shoulders.</p>
        <hr class="dropdown-divider">
        <p class="bek-muted">Then push your chest upn off the ground as far as possible. Hold this position for seconds.</p>
      </div>
    </div>
    <div style="width: 100%;align-items: center;justify-content: center;display: flex;margin: 30px 0;"><button class="more"><i class="fas fa-arrow-down"></i>&nbsp;&nbsp;load more</button></div>
  </div>
</section>
<!-- end of chest section -->


<!-- arm section -->
<section id="arm">
  <h1>ARM Exercise</h1>
  <div class="container">
    <!-- 1st row -->
    <div class="row">
      <div class="col-md-4">
        <img src="images/arm raises.gif">
        <h3>ARM RAISES</h3>
        <p class="bek-muted">00:30 seconds</p>
        <hr class="dropdown-divider">
        <p class="bek-muted">Stand with your feet shoulder width apart. Raise your arms to the sides at shoulder height, then put them down.</p>
        <hr class="dropdown-divider">
        <p class="bek-muted">Repeat the exercise. Keep your arms straight during the exercise.</p>
      </div>
      <div class="col-md-4">
        <img src="images/arm circles.gif">
        <h3>ARM CIRCLES</h3>
        <p class="bek-muted">00:30 seconds</p>
        <hr class="dropdown-divider">
        <p class="bek-muted">Stand on the floor with your arms extended straight out to the sides at shoulder height.<br>Move your arms clockwise in circles first and then do the same in counter-clockwise.</p>
        <hr class="dropdown-divider">
        <p class="bek-muted">It's a great exercise for the deltoid muscle.</p>
      </div>
      <div class="col-md-4">
        <img src="images/diamond pushups.gif">
        <h3>DIAMOND PUSH-UPS</h3>
        <p class="bek-muted">x10</p>
        <hr class="dropdown-divider">
        <p class="bek-muted">Start in the push-up position. Make a diamond shape with your forefingers and thumbs together under your chest.</p>
        <hr class="dropdown-divider">
        <p class="bek-muted">Then push your body up and down. Remember to keep your body straight.</p>
      </div>
    </div>
    <!-- 2nd row -->
    <div class="row">
      <div class="col-md-4">
        <img src="images/WALL-PUSHUPS.gif">
        <h3>WALL PUSH-UPS</h3>
        <p class="bek-muted">x10</p>
        <hr class="dropdown-divider">
        <p class="bek-muted">Start in the straight arm plank position. Lift your right arm and left leg until they are parallel with the ground.</p>
        <hr class="dropdown-divider">
        <p class="bek-muted">Return to the start position and repeat with the other side.</p>
      </div>
      <div class="col-md-4">
        <img src="images/inchworms.gif">
        <h3>INCHWORMS</h3>
        <p class="bek-muted">x10</p>
        <hr class="dropdown-divider">
        <p class="bek-muted">Start with your feet shoulder apart.</p>
        <hr class="dropdown-divider">
        <p class="bek-muted">Bend your body and walk your hands in front of you as far as you can, then walk your hands back. <br>Repeat the exercise.</p>
      </div>
      <div class="col-md-4">
        <img src="images/punches.gif">
        <h3>PUNCHES</h3>
        <p class="bek-muted">00:30 seconds</p>
        <hr class="dropdown-divider">
        <p class="bek-muted">Stand with your one leg forward and your knees bent slightly. Bend your elbows and clench your fists in front of your face.</p>
        <hr class="dropdown-divider">
        <p class="bek-muted">Extend one arm forward with the palm facing the floor. Take the srm back and repeat with the other arm.</p>
      </div>
    </div>
    <div style="width: 100%;align-items: center;justify-content: center;display: flex;margin: 30px 0;"><button class="more"><i class="fas fa-arrow-down"></i>&nbsp;&nbsp;load more</button></div>
  </div>
</section>
<!-- end of arm section -->


<!-- leg section -->
<section id="leg">
  <h1>LEG Exercise</h1>
  <div class="container">
    <!-- 1st row -->
    <div class="row">
      <div class="col-md-4">
        <img src="images/side hops.gif">
        <h3>SIDE HOP</h3>
        <p class="bek-muted">00:30 seconds</p>
        <hr class="dropdown-divider">
        <p class="bek-muted">Stand on the floor, putn your hands in front of you and hop from side to side.</p>
        <hr class="dropdown-divider">
        <p class="bek-muted">This exercise improves your agility and power your legs.</p>
      </div>
      <div class="col-md-4">
        <img src="images/squats.gif">
        <h3>SQUATS</h3>
        <p class="bek-muted">x12</p>
        <hr class="dropdown-divider">
        <p class="bek-muted">Stand with your feet shoulder width apart and your arms stretchedn forward, then lower your body until your thighs are parallel with the floor. Your knees shpuld be extended in the same direction as your toes. Return to the start position and do the next rep.</p>
        <hr class="dropdown-divider">
        <p class="bek-muted">This works the thighs, hips buttocks, quads, hamstrings and lower body.</p>
      </div>
      <div class="col-md-4">
        <img src="images/Lying-Side-Leg-Raises.gif">
        <h3>SIDE-LYING LEG LIFT</h3>
        <p class="bek-muted">x12</p>
        <hr class="dropdown-divider">
        <p class="bek-muted">Lie down your side with your head rested on your right arm. Lift your upper leg up and return to the starting position. <br>Make sure your left leg goes straight up and down during the exercise. Then do the reps for the other side.</p>
        <hr class="dropdown-divider">
        <p class="bek-muted">It's a great exercise for the gluteus.</p>
      </div>
    </div>
    <!-- 2nd row -->
    <div class="row">
      <div class="col-md-4">
        <img src="images/backward lunge.gif">
        <h3>BACKWARD LUNGE</h3>
        <p class="bek-muted">x12</p>
        <hr class="dropdown-divider">
        <p class="bek-muted">Stand with your feet shoulder width apart and your hands on your hips.</p>
        <hr class="dropdown-divider">
        <p class="bek-muted">Step a big step backward with your right leg and lower your body until your left thigh is parallel to the floor. Return and repeat with the other side.</p>
      </div>
      <div class="col-md-4">
        <img src="images/donkey kicks.gif">
        <h3>Donkey Kicks</h3>
        <p class="bek-muted">x12</p>
        <hr class="dropdown-divider">
        <p class="bek-muted">Start on all fours with yourn knees under your butt and your hands under your shoulders.</p>
        <hr class="dropdown-divider">
        <p class="bek-muted">Then lift your left leg and squeeze your butt as much as you can. Go back to the start position and repeat the exercise. Do the same with your right leg.</p>
      </div>
      <div class="col-md-4">
        <img src="images/leg stretch.gif">
        <h3>Leg Stretch</h3>
        <p class="bek-muted">00:30 seconds</p>
        <hr class="dropdown-divider">
        <p class="bek-muted">Stand with your one leg and bend your knee and hold thye ankle with your hand.</p>
        <hr class="dropdown-divider">
        <p class="bek-muted">This improves the muscle flexibility.</p>
      </div>
    </div>
    <div style="width: 100%;align-items: center;justify-content: center;display: flex;margin: 30px 0;"><button class="more"><i class="fas fa-arrow-down"></i>&nbsp;&nbsp;load more</button></div>
  </div>
</section>
<!-- end of leg section -->

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
                <p><a href="exercise.php" style="color: #fff;font-size: 13px;">workout</a></p>
                <p><a href="exercise.php">exercise</a></p>
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
<script  src="exercise.js"></script>
<script src="https://kit.fontawesome.com/72c6e5ab9f.js" crossorigin="anonymous"></script>
<script src="../bootstrap/js/bootstrap.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js?ver=1.3.2'></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="../index/index.js"></script>
<script src="../denie/denie.js"></script>

</body>
</html>