<?php 
session_start();
error_reporting(0);
include 'include/config.php';
$uid=$_SESSION['uid'];

if(isset($_POST['submit']))
{ 
$pid=$_POST['pid'];


$sql="INSERT INTO tblbooking (package_id,userid) Values(:pid,:uid)";

$query = $dbh -> prepare($sql);
$query->bindParam(':pid',$pid,PDO::PARAM_STR);
$query->bindParam(':uid',$uid,PDO::PARAM_STR);
$query -> execute();
echo "<script>alert('Package has been booked.');</script>";
echo "<script>window.location.href='booking-history.php'</script>";

}

?>
<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Smart Shape Gym</title>
	<meta charset="UTF-8">
	<meta name="description" content="Ahana Yoga HTML Template">
	<meta name="keywords" content="yoga, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="css/nice-select.css"/>
	<link rel="stylesheet" href="css/magnific-popup.css"/>
	<link rel="stylesheet" href="css/slicknav.min.css"/>
	<link rel="stylesheet" href="css/animate.css"/>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/remixicon@4.1.0/fonts/remixicon.css"rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="css/style.css"/>
</head>

<body>
	<!-- Page Preloder -->
	

	<!-- Header Section -->
	<?php include 'include/header.php';?>
	<!-- Header Section end -->

    </br></br>

    <section class = "contact-section">
    <div class = "contact-bg">
        <h2>Our Classes</h2>
        <div class = "line">
        <div></div>
        <div></div>
        <div></div>
        </div>
    </div>

    <!-- Start Classes -->
<section class="classes" id="classes">
	<div class="container">
		 <div class="content">
		 	  <div class="box img wow slideInLeft">
		 	  	 <img src="images/class2.png" alt="classes" />
		 	  </div>
		 	  <div class="box text wow slideInRight">
		 	  	 <h2>Our Classes</h2>
		 	  	 <p>Smart Shape Gym emphasizes that our classes are energetic and designed to help members achieve our fitness goals quickly.</p>
		 	  	<div class="class-items">
		 	  	 <div class="item wow bounceInUp">
                     <div class="item-img">
                     	 <img src="images/class-1.jpg" alt="classes" />
                     	
                     </div>
                     <div class="item-text">
                     	  <h4>PERSONAL TRAINING</h4>
                     	  <p>Attain the results you want with customised programmes managed by our Certified Fitness Coaches.</p>
                     	  <a href="">Get Details</a>
                     </div>
		 	  	 </div>
		 	  	 <div class="item wow bounceInUp">
                     <div class="item-text">
                     	  <h4>Stretching Training</h4>
                     	  <p>Stretching training can be incorporated as a warm-up, cool-down, or as a standalone session dedicated to flexibility improvement.</p>
                     	  <a href="">Get Details</a>
                     </div>
                     <div class="item-img">
                     	 <img src="images/class-2.jpg" alt="classes" />
                     
                     </div>
		 	  	 </div>
		 	  	</div>
		 	  </div>
		 </div>
	</div>
</section>
<!-- End Classes -->
    <section class="session">
        
      <div class="session__card">  
 
        <h4>BODY BUILDING</h4>
        <p>
          Sculpt your physique and build muscle mass with our specialized
          bodybuilding programs at FitPhysique.
        </p>
        <a href="bodybuilding.php" class="btn btn__secondary">View Class<i class="ri-arrow-right-line"></i></a>
      </div>
      <div class="session__card">
        <h4>CARDIO</h4>
        <p>
          Elevate your heart rate and boost your endurance with our dynamic
          cardio workouts at FitPhysique.
        </p>
        <a href="cardio.php" class="btn btn__secondary">View Class <i class="ri-arrow-right-line"></i></a>
      </div>
      <div class="session__card">
        <h4>ZUMBA</h4>
        <p>
        Zumba is a dynamic fitness program that combines Latin-inspired dance with cardiovascular exercise. 
        </p>
        <a href="zumba.php" class="btn btn__secondary">View Class <i class="ri-arrow-right-line"></i></a>
      </div>
      <div class="session__card">
        <h4>CROSSFIT</h4>
        <p>
          Experience the ultimate full-body workout with our intense CrossFit
          classes at FitPhysique.
        </p>
        <a href="crossfit.php" class="btn btn__secondary">View Class <i class="ri-arrow-right-line"></i></a>
      </div>
      <div class="session__card">
        <h4>YOGA</h4>
        <p>
        Yoga is a comprehensive practice integrating physical, mental, and spiritual disciplines originating from ancient India, promoting mind-body control. 
        </p>
        <a href="yoga.php" class="btn btn__secondary">View Class<i class="ri-arrow-right-line"></i></a>
      </div>
      <div class="session__card">
        <h4>BOXING</h4>
        <p>
        Boxing is a combat sport where two participants, usually wearing gloves and protective gear, engage in a contest of strength, speed, and strategy within a boxing ring. 
        </p>
        <a href="boxing.php" class="btn btn__secondary">View Class <i class="ri-arrow-right-line"></i></a>
      </div>
    </section>

    
    <?php include 'schedule.php'; ?>

    <?php include 'package.php'; ?>
	<!-- Footer Section -->
	<?php include 'include/footer.php'; ?>
	<!-- Footer Section end -->


	<!--====== Javascripts & Jquery ======-->
	<script src="js/vendor/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.slicknav.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.nice-select.min.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/main.js"></script>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
   

	</body>
</html>
