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
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link type="text/css" href="../bootstrap/css/bootstrap.css" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../index/index.css">
	<link rel="stylesheet" type="text/css" href="workout-programs.css">
	<link rel="icon" type="image/png" href="../logo/logo.png">
	<title>Workout Programs | Fitness Care</title>
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
              <a href="workout-programs.php" id="workout-programs"><img src="../dashboard/workout-program.png" width="40px;">&nbsp;&nbsp;workout  programs</a>
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

<section class="section1-account">
  <p class="account1">Workout Programs</p>
  <p class="account2">Choose your exercise and start now building your health and body.</p>
</section>
<section class="section2-account">
	<div class="bek-container">
	  <div class="row">
	    <div class="col-lg-6">
	    	<div class="row">
			    <div class="col-sm bek-center2">
			    	<div class="card" style="width: 18rem;overflow: hidden;">
						  <div style="overflow: hidden;"><img src="image1.jpg" class="card-img-top" alt="aerobic exercise"></div>
						  <div class="card-body">
						    <h5 class="card-title" style="color: #ff2b2b;">Aerobic Exercise</h5>
						    <p class="card-text" style="margin-bottom: 30px;font-size: 13px;"> This is the type of exercise we all tend to think of when we hear the word exercise, and often it is the thought of being out of breath and sweaty that puts people off starting to exercise.</p>
						    <p class="card-text" style="margin-bottom: 10px;"> <i class="fas fa-rupee-sign"></i>&nbsp;1,100</p>
						    <button class="btn btn-primary"><i class="fas fa-shopping-bag"></i>&nbsp;&nbsp;Buy Now</button>
						  </div>
						</div>
			    </div>
			    <div class="col-sm bek-center2">
			    	<div class="card" style="width: 18rem;overflow: hidden;">
						  <div style="overflow: hidden;"><img src="image2.jpg" class="card-img-top" alt="Strength building exercise"></div>
						  <div class="card-body">
						    <h5 class="card-title" style="color: #ff2b2b;">Strength Building Exercise</h5>
						    <p class="card-text" style="margin-bottom: 30px;font-size: 13px;"> Lots of activities including pilates, physiotherapy type exercise and other fairly low intensity activities help you build muscle. Anything 	as long as you do the activity for long enough.</p>
						    <p class="card-text" style="margin-bottom: 10px;"> <i class="fas fa-rupee-sign"></i>&nbsp;1,100</p>
						    <button class="btn btn-primary"><i class="fas fa-shopping-bag"></i>&nbsp;&nbsp;Buy Now</button>
						  </div>
						</div>
			    </div>
			  </div>
	    </div>
	    <div class="col-lg-6">
	    	<div class="row">
			    <div class="col-sm bek-center2">
			    	<div class="card" style="width: 18rem;overflow: hidden;">
						  <div style="overflow: hidden;"><img src="image3.jpg" class="card-img-top" alt="Balance Training exercise"></div>
						  <div class="card-body">
						    <h5 class="card-title" style="color: #ff2b2b;">Balance Training Exercise</h5>
						    <p class="card-text" style="margin-bottom: 30px;font-size: 13px;"> Some exercise helps improve your balance by helping you build up core strength. This is especially helpful for people who are at risk of falls, including the elderly, but it is good for everyone.Examples of activities that help with balance include Tai Chi, dance and playing bowls, but there are many others.</p>
						    <p class="card-text" style="margin-bottom: 10px;"> <i class="fas fa-rupee-sign"></i>&nbsp;1,100</p>
						    <button class="btn btn-primary"><i class="fas fa-shopping-bag"></i>&nbsp;&nbsp;Buy Now</button>
						  </div>
						</div>
			    </div>
			    <div class="col-sm bek-center2">
			    	<div class="card" style="width: 18rem;overflow: hidden;">
						  <div style="overflow: hidden;"><img src="image4.jpg" class="card-img-top" alt="Endurance exercise"></div>
						  <div class="card-body">
						    <h5 class="card-title" style="color: #ff2b2b;">Endurance Exercise</h5>
						    <p class="card-text" style="margin-bottom: 30px;font-size: 13px;"> You can improve your endurance if you can only walk for 10 minutes  you can improve your endurance by walking as far as you can several times a day, and increasing how far you go over time.</p>
						    <p class="card-text" style="margin-bottom: 10px;"> <i class="fas fa-rupee-sign"></i>&nbsp;1,100</p>
						    <button class="btn btn-primary"><i class="fas fa-shopping-bag"></i>&nbsp;&nbsp;Buy Now</button>
						  </div>
						</div>
			    </div>
			  </div>
	    </div>
	    </div>
	  </div>
	</div><div class="bek-container">
	  <div class="row">
	    <div class="col-lg-6">
	    	<div class="row">
			    <div class="col-sm bek-center2">
			    	<div class="card" style="width: 18rem;overflow: hidden;">
						  <div style="overflow: hidden;"><img src="image5.jpg" class="card-img-top" alt="Flexibility exercise"></div>
						  <div class="card-body">
						    <h5 class="card-title" style="color: #ff2b2b;">Flexibility Exercise</h5>
						    <p class="card-text" style="margin-bottom: 30px;font-size: 13px;"> Flexibility is really important and much overlooked when people think about exercise. Staying flexible improves your quality of life, imagine not being able to look over your shoulder to reverse your car.</p>
						    <p class="card-text" style="margin-bottom: 10px;"> <i class="fas fa-rupee-sign"></i>&nbsp;1,100</p>
						    <button class="btn btn-primary"><i class="fas fa-shopping-bag"></i>&nbsp;&nbsp;Buy Now</button>
						  </div>
						</div>
			    </div>
			    <div class="col-sm bek-center2">
			    	<div class="card" style="width: 18rem;overflow: hidden;">
						  <div style="overflow: hidden;"><img src="image6.jpg" class="card-img-top" alt="Strength building exercise"></div>
						  <div class="card-body">
						    <h5 class="card-title" style="color: #ff2b2b;">Moderate Intensity Exercise</h5>
						    <p class="card-text" style="margin-bottom: 30px;font-size: 13px;"> There are many kinds of activity that fit this description, walking at a steady pace, cycling, dancing, swimming (ok, in your average swimming pool you might not feel warmer, but you know what we mean).</p>
						    <p class="card-text" style="margin-bottom: 10px;"> <i class="fas fa-rupee-sign"></i>&nbsp;1,100</p>
						    <button class="btn btn-primary"><i class="fas fa-shopping-bag"></i>&nbsp;&nbsp;Buy Now</button>
						  </div>
						</div>
			    </div>
			  </div>
	    </div>
	    <div class="col-lg-6">
	    	<div class="row">
			    <div class="col-sm bek-center2">
			    	<div class="card" style="width: 18rem;overflow: hidden;">
						  <div style="overflow: hidden;"><img src="image7.jpg" class="card-img-top" alt="aerobic exercise"></div>
						  <div class="card-body">
						    <h5 class="card-title" style="color: #ff2b2b;">Vigorous Exercise</h5>
						    <p class="card-text" style="margin-bottom: 30px;font-size: 13px;"> It is easy to be put off by the thought that the only kind of exercise that is good for you is the vigorous kind, but this is not true – moderate intensity exercise and low impact exercise are good for you.</p>
						    <p class="card-text" style="margin-bottom: 10px;"> <i class="fas fa-rupee-sign"></i>&nbsp;1,100</p>
						    <button class="btn btn-primary"><i class="fas fa-shopping-bag"></i>&nbsp;&nbsp;Buy Now</button>
						  </div>
						</div>
			    </div>
			    <div class="col-sm bek-center2">
			    	<div class="card" style="width: 18rem;overflow: hidden;">
						  <div style="overflow: hidden;"><img src="image8.jpg" class="card-img-top" alt="Hatha Yoga"></div>
						  <div class="card-body">
						    <h5 class="card-title" style="color: #ff2b2b;">Hatha Yoga</h5>
						    <p class="card-text" style="margin-bottom: 30px;font-size: 13px;"> Hatha yoga is the foundation for all yoga styles and refers to any practice that combines asana, pranayama, and meditation.Since this type of yoga is the foundation for all yoga.</p>
						    <p class="card-text" style="margin-bottom: 10px;"> <i class="fas fa-rupee-sign"></i>&nbsp;1,500</p>
						    <button class="btn btn-primary"><i class="fas fa-shopping-bag"></i>&nbsp;&nbsp;Buy Now</button>
						  </div>
						</div>
			    </div>
			  </div>
	    </div>
	    </div>
	  </div>
	</div>
	</div><div class="bek-container">
	  <div class="row">
	    <div class="col-lg-6">
	    	<div class="row">
			    <div class="col-sm bek-center2">
			    	<div class="card" style="width: 18rem;overflow: hidden;">
						  <div style="overflow: hidden;"><img src="image9.jpg" class="card-img-top" alt="Vinyasa Yoga"></div>
						  <div class="card-body">
						    <h5 class="card-title" style="color: #ff2b2b;">Vinyasa Yoga</h5>
						    <p class="card-text" style="margin-bottom: 30px;font-size: 13px;"> For most classes with the word “vinyasa,” you can bet on a pretty active class with a fast and continuous flow from one pose to the next, including a lot of sun salutations.</p>
						    <p class="card-text" style="margin-bottom: 10px;"> <i class="fas fa-rupee-sign"></i>&nbsp;1,500</p>
						    <button class="btn btn-primary"><i class="fas fa-shopping-bag"></i>&nbsp;&nbsp;Buy Now</button>
						  </div>
						</div>
			    </div>
			    <div class="col-sm bek-center2">
			    	<div class="card" style="width: 18rem;overflow: hidden;">
						  <div style="overflow: hidden;"><img src="image10.jpg" class="card-img-top" alt="Iyengar Yoga"></div>
						  <div class="card-body">
						    <h5 class="card-title" style="color: #ff2b2b;">Iyengar Yoga</h5>
						    <p class="card-text" style="margin-bottom: 30px;font-size: 13px;"> The poses are generally held longer, but the support of props and attention to alignment make this a great practice for those overcoming injury.</p>
						    <p class="card-text" style="margin-bottom: 10px;"> <i class="fas fa-rupee-sign"></i>&nbsp;1,500</p>
						    <button class="btn btn-primary"><i class="fas fa-shopping-bag"></i>&nbsp;&nbsp;Buy Now</button>
						  </div>
						</div>
			    </div>
			  </div>
	    </div>
	    <div class="col-lg-6">
	    	<div class="row">
			    <div class="col-sm bek-center2">
			    	<div class="card" style="width: 18rem;overflow: hidden;">
						  <div style="overflow: hidden;"><img src="image11.jpg" class="card-img-top" alt="Ashtanga Yoga"></div>
						  <div class="card-body">
						    <h5 class="card-title" style="color: #ff2b2b;">Ashtanga Yoga</h5>
						    <p class="card-text" style="margin-bottom: 30px;font-size: 13px;"> It can be great for the more seasoned practitioner, as it requires strength, endurance, and a commitment to practicing a few times a week.</p>
						    <p class="card-text" style="margin-bottom: 10px;"> <i class="fas fa-rupee-sign"></i>&nbsp;1,100</p>
						    <button class="btn btn-primary"><i class="fas fa-shopping-bag"></i>&nbsp;&nbsp;Buy Now</button>
						  </div>
						</div>
			    </div>
			    <div class="col-sm bek-center2">
			    	<div class="card" style="width: 18rem;overflow: hidden;">
						  <div style="overflow: hidden;"><img src="image12.jpg" class="card-img-top" alt="Kundalini Yoga"></div>
						  <div class="card-body">
						    <h5 class="card-title" style="color: #ff2b2b;">Kundalini Yoga</h5>
						    <p class="card-text" style="margin-bottom: 30px;font-size: 13px;"> Kundalini is all about awakening your kundalini energy, or shakti, which is the primal energy thought to sit at the base of the spine.</p>
						    <p class="card-text" style="margin-bottom: 10px;"> <i class="fas fa-rupee-sign"></i>&nbsp;1,500</p>
						    <button class="btn btn-primary"><i class="fas fa-shopping-bag"></i>&nbsp;&nbsp;Buy Now</button>
						  </div>
						</div>
			    </div>
			  </div>
	    </div>
	    </div>
	  </div>
	</div>
</section>
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
                <p><a href="workout-programs.php" id="workout-programs2">workout programs</a></p>
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
<script src="../bootstrap/js/bootstrap.js"></script>
<script src="https://kit.fontawesome.com/72c6e5ab9f.js" crossorigin="anonymous"></script>
<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js?ver=1.3.2'></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="../index/index.js"></script>
<script src="workout-programs.js"></script>
<script src="../denie/denie.js"></script>
</body>
</html>