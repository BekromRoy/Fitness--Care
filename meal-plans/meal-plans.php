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
	<link rel="stylesheet" type="text/css" href="meal-plans.css">
	<link rel="icon" type="image/png" href="../logo/logo.png">
	<title>Meal Plans | Fitness Care</title>
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
              <a href="meal-plans.php" id="meal-plans"><img src="../dashboard/foodplan.png" width="40px;">&nbsp;&nbsp;Meal Plans</a>
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
  <p class="account1">Meal Plans</p>
  <p class="account1" style="font-size: 35px;color: #ff2b2b;">Calender Based Plans</p>
  <p class="account2">These programs utilize Fitness Blenders online calendar system allowing you to access your meal plan from anywhere you have access to Fitness Blenders website.</p>
</section>
<section class="section2-account">
	<div class="container">
		<div class="card mb-3">
		  <div class="row g-0">
		    <div class="col-md-8">
		      <div style="overflow: hidden;width: 100%;height: 100%;"><img src="image1.jpg" alt=""></div>
		    </div>
		    <div class="col-md-4">
		      <div class="card-body">
		        <h5 class="card-title">Meal Plan Details</h5>
		        <p class="card-text">Plan Length : 4 Weeks</p>
		        <p class="card-text">Meal Type : Omnivore</p>
		        <p class="card-text">Format : Calender</p>
		        <p class="card-text" style="margin: 60px 0 20px 0;"> <i class="fas fa-rupee-sign"></i>&nbsp;2,200</p>
						<button class="btn btn-primary"><i class="fas fa-shopping-bag"></i>&nbsp;&nbsp;Buy Now</button>
		      </div>
		    </div>
		  </div>
		</div>
		<p class="card-text"><small class="text-muted">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This Fitness Care Calendar based plan, built with registered dietitians and nutritionists, is a healthy, plant based meal plan which details 3 meals, and 3 snacks, every day for four weeks. When it comes to nutrition, things can become overly complicated. However, one thing that is abundantly clear is that nutrition has a huge impact on the progress that is made in the gym. This article will highlight a number of considerations that must be made and applied in order to bring about substantial changes. In addition, it will also serve as a resource and highlight the nutrient rich foods that one should incorporate in their daily diet routine.</small></p>
	</div>
	<div class="container" style="margin-top: 40px;">
		<div class="card mb-3">
		  <div class="row g-0">
		    <div class="col-md-8">
		      <div style="overflow: hidden;width: 100%;height: 100%;"><img src="image2.jpg" alt=""></div>
		    </div>
		    <div class="col-md-4">
		      <div class="card-body">
		        <h5 class="card-title">Meal Plan Details</h5>
		        <p class="card-text">Plan Length : 4 Weeks</p>
		        <p class="card-text">Meal Type : Carbohydrate</p>
		        <p class="card-text">Format : Calender</p>
		        <p class="card-text" style="margin: 60px 0 20px 0;"> <i class="fas fa-rupee-sign"></i>&nbsp;1,800</p>
						<button class="btn btn-primary"><i class="fas fa-shopping-bag"></i>&nbsp;&nbsp;Buy Now</button>
		      </div>
		    </div>
		  </div>
		</div>
		<p class="card-text"><small class="text-muted">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Firstly, carbohydrates are the primary source of energy for the body and therefore play the most substantial role in fueling exercise. There are two different types of carbohydrates – complex and simple. The names give an indication of the time taken to digest; complex carbs take a longer time period to digest than simple carbs. Complex carbohydrates provide the body with prolonged slow-release of energy and have a great nutritional benefit. While simple carbohydrates provide the body with a short-term, fast releasing energy, they contain little nutritional value. <br>
		For this reason, you should look to primarily consume complex carbohydrates. Some foods to consider adding to your diet include whole-grains, oats, beans, nuts, fruits, and vegetables.</small></p>
	</div>
	<div class="container" style="margin-top: 40px;">
		<div class="card mb-3">
		  <div class="row g-0">
		    <div class="col-md-8">
		      <div style="overflow: hidden;width: 100%;height: 100%;"><img src="image3.jpg" alt=""></div>
		    </div>
		    <div class="col-md-4">
		      <div class="card-body">
		        <h5 class="card-title">Meal Plan Details</h5>
		        <p class="card-text">Plan Length : 4 Weeks</p>
		        <p class="card-text">Meal Type : Protein</p>
		        <p class="card-text">Format : Calender</p>
		        <p class="card-text" style="margin: 60px 0 20px 0;"> <i class="fas fa-rupee-sign"></i>&nbsp;1,800</p>
						<button class="btn btn-primary"><i class="fas fa-shopping-bag"></i>&nbsp;&nbsp;Buy Now</button>
		      </div>
		    </div>
		  </div>
		</div>
		<p class="card-text"><small class="text-muted">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The majority of gym-goers will be well aware that consuming protein is important. The reason why protein is so important is that, it plays a key role in recovery and repair. During exercise, the body is exposed to strains and stresses which cause damage to occur to the muscles at a microscopic level. In order for the damage to be repaired, protein is needed. Without it, recovery periods will be extended and chronic fatigue may become a factor. Protein is found most highly in animal produce such as lean meats, eggs & dairy. It can also be found in smaller quantities in foods such as seeds, nuts, legumes, beans, and soy.</small></p>
	</div>
	<div class="container" style="margin-top: 40px;">
		<div class="card mb-3">
		  <div class="row g-0">
		    <div class="col-md-8">
		      <div style="overflow: hidden;width: 100%;height: 100%;"><img src="image4.jpg" alt=""></div>
		    </div>
		    <div class="col-md-4">
		      <div class="card-body">
		        <h5 class="card-title">Meal Plan Details</h5>
		        <p class="card-text">Plan Length : Before Exercise</p>
		        <p class="card-text">Meal Type : Pre Workout Food</p>
		        <p class="card-text">Format : Calender</p>
		        <p class="card-text" style="margin: 60px 0 20px 0;"> <i class="fas fa-rupee-sign"></i>&nbsp;1,800</p>
						<button class="btn btn-primary"><i class="fas fa-shopping-bag"></i>&nbsp;&nbsp;Buy Now</button>
		      </div>
		    </div>
		  </div>
		</div>
		<p class="card-text"><small class="text-muted">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The focus with all pre-workout meals or snacks should be carbohydrates to provide the body with plenty of energy to last the full session. If energy levels are sub-optimal, then performance will suffer which will have a consequent impact on our rate of adaptation. To prime the body for performance, focus on primarily consuming complex carbohydrates such as whole-grains, oats, beans, nuts, fruits, and vegetables. Be aware not to consume them just before the workout as they take time to digest. The recommendation is to consume complex carbs one to two hours prior to exercise to allow for full digestion. From that point, focus on simple carbohydrates as they take less time to digest and provide the body with bursts of energy. It may even be recommended to consume some simple carbs during a workout to maintain energy levels and performance. White bread, jam, granola, cereal, rice cakes, sports drinks, and fruit are all viable options for a pre-workout, energy-boosting snack. While the focus should predominantly be on carbohydrates, it is also important to consume some protein prior to stepping into the gym. To support muscle recovery and growth, protein levels should be maintained at a high level throughout each day.</small></p>
	</div>
	<div class="container" style="margin-top: 40px;">
		<div class="card mb-3">
		  <div class="row g-0">
		    <div class="col-md-8">
		      <div style="overflow: hidden;width: 100%;height: 100%;"><img src="image5.jpg" alt=""></div>
		    </div>
		    <div class="col-md-4">
		      <div class="card-body">
		        <h5 class="card-title">Meal Plan Details</h5>
		        <p class="card-text">Plan Length : After Exercise</p>
		        <p class="card-text">Meal Type : Post Workout Food</p>
		        <p class="card-text">Format : Calender</p>
		        <p class="card-text" style="margin: 60px 0 20px 0;"> <i class="fas fa-rupee-sign"></i>&nbsp;1,800</p>
						<button class="btn btn-primary"><i class="fas fa-shopping-bag"></i>&nbsp;&nbsp;Buy Now</button>
		      </div>
		    </div>
		  </div>
		</div>
		<p class="card-text"><small class="text-muted">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The purpose of post-workout nutrition is two-fold – to promote muscle recovery and replenish energy. Therefore, the focus should once again be on consuming good quality protein and carb foods. As reflected on, the stress of training cause micro tears to occur to the muscles that must be repaired. Consuming protein will cause a process known as muscle protein synthesis (MPS) to occur which will begin the repairing process and prevent muscle breakdown. There is a widely held belief that protein timing is extremely important for maximizing growth, however, a number of studies have indicated that total daily protein intake is of greater importance than the timing. High-protein foods such as lean beef, chicken, pork, turkey, eggs, dairy, seeds, quinoa, and nuts should be prioritized. Protein supplements, like protein shakes and bars, can serve as a convenient tool for effectively boosting protein intake.</small></p>
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
                <p><a href="meal-plans.php" id="meal-plans2">meal plans</a></p>
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
<script src="../bootstrap/js/bootstrap.js"></script>
<script src="https://kit.fontawesome.com/72c6e5ab9f.js" crossorigin="anonymous"></script>
<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js?ver=1.3.2'></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="../index/index.js"></script>
<script src="meal-plans.js"></script>
<script src="../denie/denie.js"></script>
</body>
</html>