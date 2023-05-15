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
  <title>Yoga | Fitness Care</title>
  <link rel='stylesheet' href='https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css'>
  <link type="text/css" href="../bootstrap/css/bootstrap.css" rel="stylesheet">
  <link rel="icon" type="image/png" href="../logo/logo.png">
<link rel="stylesheet" href="yoga.css">
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
              <a href="yoga.php"><img src="../dashboard/fitness.png" width="40px;">&nbsp;&nbsp;Yoga</a>
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
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active bek-back1">
        <div class="carousel-caption bek-yoga-center">
          <p>Yoga is a Light</p>
          <h1>Which Once Lit Will Never Dim</h1>
          <a href="#yoga"><button>yoga</button></a>
        </div>
      </div>
      <div class="carousel-item bek-back2">
        <div class="carousel-caption bek-yoga-center">
          <p>pranayam takes you into a present moment</p>
          <h1>The Only Place Where Life Exits</h1>
          <a href="#pranayam"><button>pranayam</button></a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- end of section1 -->
<!-- pranayam section -->
<section id="pranayam">
  <h1>Pranayama</h1>
  <div class="container">
    <!-- 1st row -->
    <div class="row">
      <div class="col-md-4">
        <img src="images/bhastrika.jpg">
        <h3>Bhastrika Pranayama</h3>
        <p class="bek-muted">The forceful breathing exercise clears up your respiratory system and is characterised by sounds like a flame burning below a furnace.</p>
        <hr class="dropdown-divider">
        <p class="bek-active">What dose it do?</p>
        <p class="bek-muted">Perform this breathing technique to strengthen your lungs, burn excess fat, improve physical and mental ability and clear the windpipe.</p>
        <hr class="dropdown-divider">
        <p class="bek-active">Do it!</p>
        <p class="bek-muted">Take a deep breath in, inhaling as much air as you can, and expand your stomach. Exhale the air out with force and try to pull your navel in towards the backbone.</p>
        <hr class="dropdown-divider">
        <p class="bek-muted"><span class="bek-muted-half">Reps:</span> Repeat for 1-2 minutes and rest for a while afterward</p>
      </div>
      <div class="col-md-4">
        <img src="images/kapalbhathi.jpg">
        <h3>Kapalbhathi Pranayama</h3>
        <p class="bek-muted">Known as the skull shining breathing technique, this strong deep breathing exercise is synonymous with Baba Ramdev for most of us!</p>
        <hr class="dropdown-divider">
        <p class="bek-active">What dose it do?</p>
        <p class="bek-muted">This pranayama can improve the functioning of all abdominal organs, reduces belly fat, lead to quick weight loss, and balances sugar levels in your body.</p>
        <hr class="dropdown-divider">
        <p class="bek-active">Do it!</p>
        <p class="bek-muted">This breathing technique involves passive inhalation and active exhalation. So inhale normally, breathing in as much air as you can, and exhale forcefully. Try to pull your stomach muscles as closely as you can towards the backbone during exhalation.</p>
        <hr class="dropdown-divider">
        <p class="bek-muted"><span class="bek-muted-half">Reps:</span> Perform for 2-5 minutes</p>
      </div>
      <div class="col-md-4">
        <img src="images/anulom-vilom.jpg">
        <h3>Anulom-vilom Pranayama</h3>
        <p class="bek-muted">Also known as Nadi Shdodhana (alternate nostril breathing)</p>
        <hr class="dropdown-divider">
        <p class="bek-active">What dose it do?</p>
        <p class="bek-muted">This pranayama helps normalize blood pressure, aids in blood purification, reduced the risk of heart disease, and can also improve sight.</p>
        <hr class="dropdown-divider">
        <p class="bek-active">Do it!</p>
        <p class="bek-muted">Close your eyes and sit in Padmasana. Use the right thumb to close the right nostril. Inhale slowly through the left nostril, taking in as much air as you can to fill your lungs. Remove the thumb from your right nostril and exhale. While exhaling, use the middle finger to close your left nostril and inhale with your right nostril. Remove the thumb from the right nostril and exhale.</p>
        <hr class="dropdown-divider">
        <p class="bek-muted"><span class="bek-muted-half">Reps:</span> Perform for 2-5 minutes</p>
      </div>
    </div>
    <!-- 2nd row -->
    <div class="row">
      <div class="col-md-4">
        <img src="images/bhramari.jpg">
        <h3>Bhramari Pranayama</h3>
        <p class="bek-muted">This pranayama derives its name from the Bhramari, the black Indian bee. The exhalation resembles the typical humming sound of a bee!</p>
        <hr class="dropdown-divider">
        <p class="bek-active">What dose it do?</p>
        <p class="bek-muted">It can calm your mind down instantly and is one of the best breathing exercises for distress as it rids the mind of frustration, anxiety, anger, or agitation.</p>
        <hr class="dropdown-divider">
        <p class="bek-active">Do it!</p>
        <p class="bek-muted">Close your ears with your thumbs and place your index fingers on the temple. Close your eyes with the other three fingers. Gently inhale through the nose and hold for a few seconds. Keeping the mouth closed, exhale by making a humming sound.</p>
        <hr class="dropdown-divider">
        <p class="bek-muted"><span class="bek-muted-half">Reps:</span> 5 Times</p>
      </div>
      <div class="col-md-4">
        <img src="images/ujjayi.jpg">
        <h3>Ujjayi Pranayama</h3>
        <p class="bek-muted">Also known as victorious breath or ocean breath, this breathing technique involves a soft hissing sound during inhalation.</p>
        <hr class="dropdown-divider">
        <p class="bek-active">What dose it do?</p>
        <p class="bek-muted">The sound vibrations that are a part of this pranayama sharpen the focus of your mind can help cure thyroid and reduce snoring.</p>
        <hr class="dropdown-divider">
        <p class="bek-active">Do it!</p>
        <p class="bek-muted">Begin by inhaling and exhaling naturally. Bend down your head, blocking the free flow of air, and inhale as long as you can, making a sound from your throat. Hold for 2-5 seconds. Close your right nostril with your right thumb while exhaling, and breathe out through the left nostril.</p>
        <hr class="dropdown-divider">
        <p class="bek-muted"><span class="bek-muted-half">Reps:</span> 10-12 times in as much time you need</p>
      </div>
      <div class="col-md-4">
        <img src="images/udgeeth.jpg">
        <h3>Udgeeth Pranayama</h3>
        <p class="bek-muted">The Udgeeth Pranayama is most easy and common pranayama among all the daily Practice Pranayama. It is the art of conscious breathing.</p>
        <hr class="dropdown-divider">
        <p class="bek-active">What dose it do?</p>
        <p class="bek-muted">It calms the mind and brings stability. It also relieves tension, anger and anxiety. It is the Excellent breathing exercises for meditation. Effective againsthypertension. It curesproblems related to sleep (Insomnia) and bad dreams. Control the high blood pressureand cure it.</p>
        <hr class="dropdown-divider">
        <p class="bek-active">Do it!</p>
        <p class="bek-muted">Sit on the Padmasana and Close your eyes, Your spine should be straight. Breathe deeply through your nose till diapgram is full with air, and exhale. While exhaling chant the word Om. Make sure to keep the sound of “O” long and the “M” short (OOOOOOOOm). Udgeeth Pranayama is very simplest pranayama among to all pranayama.</p>
        <hr class="dropdown-divider">
        <p class="bek-muted"><span class="bek-muted-half">Reps:</span> Repeat this 3 to 5 minutes</p>
      </div>
    </div>
    <div style="width: 100%;align-items: center;justify-content: center;display: flex;margin: 30px 0;"><button class="more"><i class="fas fa-arrow-down"></i>&nbsp;&nbsp;load more</button></div>
  </div>
</section>
<!-- end of pranayam section -->

<!-- yoga section -->
<section id="yoga">
  <h1>Yoga</h1>
  <div class="container">
    <!-- 1st row -->
    <div class="row">
      <div class="col-md-4">
        <img src="images/naukasan.jpg">
        <h3>Naukasana</h3>
        <p class="bek-muted">Naukasana is a posture in which our body takes the shape of a boat.</p>
        <hr class="dropdown-divider">
        <p class="bek-active">What dose it do?</p>
        <p class="bek-muted">This asana increases the efficiency of abdominal muscles, is good for digestion, and reduces belly fat. It also strengthens organs in the abdomen and leg muscles.</p>
        <hr class="dropdown-divider">
        <p class="bek-active">Do it!</p>
        <p class="bek-muted">Lie down on your back with your legs together. Keep your hands on the thighs or next to the thighs on the floor. Inhale and raise your head, arms and head in a straight line off the floor at a 30-degree angle. Keep the toes pointing upward.</p>
        <hr class="dropdown-divider">
        <p class="bek-muted"><span class="bek-muted-half">Reps:</span> Duration 3-4 repetitions daily but should not overdo.</p>
      </div>
      <div class="col-md-4">
        <img src="images/Paschimottanasana.gif">
        <h3>Paschimottanasana</h3>
        <p class="bek-muted">Paschimottanasana (forward bend) is a simple and traditional Hatha Yoga Asana.</p>
        <hr class="dropdown-divider">
        <p class="bek-active">What dose it do?</p>
        <p class="bek-muted">Paschimottanasana stretches the calf and hamstring muscles, which helps for better circulation. It elongates the spine and gives a good stretch to it. It also regulates vital energy to the nervous system and ensures good circulation to internal abdominal organs.</p>
        <hr class="dropdown-divider">
        <p class="bek-active">Do it!</p>
        <p class="bek-muted">Sit with your outstretched legs and flexed toes. Inhale and raise your arms. Exhale and pull the navel in. Stretch the spine forward from the hips. Hold the toes with your hands, bending the elbow outward or downward. In the final position, your awareness should be on your abdominal breathing.</p>
        <hr class="dropdown-divider">
        <p class="bek-muted"><span class="bek-muted-half">Reps:</span> Perform for 2-5 minutes</p>
      </div>
      <div class="col-md-4">
        <img src="images/Ardha-matsyendrasana.jpg">
        <h3>Ardha matsyendrasan</h3>
        <p class="bek-muted">Ardha Matsyendrasana Increases the elasticity of the spine and tones the spinal nerves.</p>
        <hr class="dropdown-divider">
        <p class="bek-active">What dose it do?</p>
        <p class="bek-muted">This asana makes your spine more flexible and strengthens your side muscles. It also tones the abdominal muscles and opens up the chest area.</p>
        <hr class="dropdown-divider">
        <p class="bek-active">Do it!</p>
        <p class="bek-muted">Sit straight, stretching your legs in front of you. Bend your left leg and try to touch your feet to your right buttock. Bring your right leg outside of the left knee. Touch your feet to the ground. Keep your spine erect. Exhale and turn your upper body to the right. Hold your right feet with the left hand and place your right hand on the spine.</p>
        <hr class="dropdown-divider">
        <p class="bek-muted"><span class="bek-muted-half">Reps:</span> Duration 3-4 repetitions daily.</p>
      </div>
    </div>
    <!-- 2nd row -->
    <div class="row">
      <div class="col-md-6">
        <img src="images/Dwi Pada Uttanasana.jpg">
        <h3>Dwi Pada Uttanasana</h3>
        <p class="bek-muted">Dwi Pada Uttanasana works on your gluteus and quadricep muscles.</p>
        <hr class="dropdown-divider">
        <p class="bek-active">What dose it do?</p>
        <p class="bek-muted">This asana strengthens the core and is an efficient practice to release the extra fat around the abdomen. “It works on the gluteus and quadricep muscles.”</p>
        <hr class="dropdown-divider">
        <p class="bek-active">Do it!</p>
        <p class="bek-muted">Lie down on your spine, with hands placed next to the buttocks or under the buttock (palms downward). The legs should be straight and toes flexed. Inhale and raise both legs at a 90-degree angle while expanding the abdomen out. Exhale and raise both legs to a 45 or 30-degree angle while contracting the abdomen.</p>
        <hr class="dropdown-divider">
        <p class="bek-muted"><span class="bek-muted-half">Reps:</span> Do 5-8 movements and then hold the legs at each angle for 5-7 abdominal breaths.</p>
      </div>
      <div class="col-md-6">
        <img src="images/viparita Karni.jpg" style="width: 90%;">
        <h3>Viparita Karni</h3>
        <p class="bek-muted">Viparita Karni has anti-aging effects on the body.</p>
        <hr class="dropdown-divider">
        <p class="bek-active">What dose it do?</p>
        <p class="bek-muted">Your digestive system will get strengthened by regular practice of this exercise. Your appetite will increase. It can prevent premature graying of hair and cure diseases like the swelling of the feet, goitre, blood-related diseases like boils, pimples and itching.</p>
        <hr class="dropdown-divider">
        <p class="bek-active">Do it!</p>
        <p class="bek-muted">Lie straight on your back. Join both the legs and lift them up. Take the legs slightly behind to lift your lower back. Support the back by placing the palms on the lower back with elbows on the ground. Keep the legs perpendicular to the floor and your back inclined at an angle of 45-60 degrees with the floor. Breathe normally.</p>
        <hr class="dropdown-divider">
        <p class="bek-muted"><span class="bek-muted-half">Reps:</span> Begin with 1-minute and then slowly increase the duration of practice to 10 minutes.</p>
      </div>
    </div>
    <div style="width: 100%;align-items: center;justify-content: center;display: flex;margin: 30px 0;"><button class="more"><i class="fas fa-arrow-down"></i>&nbsp;&nbsp;load more</button></div>
  </div>
</section>
<!-- end of yoga section -->

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
                <p><a href="yoga.php">yoga</a></p>
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
<script  src="yoga.js"></script>
<script src="https://kit.fontawesome.com/72c6e5ab9f.js" crossorigin="anonymous"></script>
<script src="../bootstrap/js/bootstrap.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js?ver=1.3.2'></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="../index/index.js"></script>
<script src="../denie/denie.js"></script>

</body>
</html>