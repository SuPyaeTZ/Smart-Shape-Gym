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
    <!-- Fontawesome icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
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

    <section class = "contact-sect">
    <div class = "contact-bgs">
        <h2>BodyBuilding</h2>
        <div class = "line">
        <div></div>
        <div></div>
        <div></div>
        </div>
        <p class = "text"></p>
    </div>
    </section>

   <!-- Section Services Start -->
   <section class="services" id="services">
      <div class="container">

        <div class="main-txt">
          <h2>THINGS TO BRING</h2>
        </div>

        <div class="row" style="margin-top: 30px;">
          <div class="col-md-4 py-3 py-md-0">
            <div class="card">
            <i class="fa-solid fa-bottle-water"></i>
              <div class="card-body">
                <h3>Water</h3>
                <p> During exercise, you lose water through sweat, so replenishing fluids helps maintain performance, and support muscle function.</p>
              </div>
            </div>

          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card">
            <i class="fa-solid fa-shirt"></i>
              <div class="card-body">
                <h3>Extra Clothes</h3>
                <p>Fresh clothes can help you feel comfortable and prevent the risk of skin irritation from staying in sweaty clothes post-workout.</p>
              </div>
            </div>

          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card">
              <i class="fa-solid fa-shoe-prints"></i>
              <div class="card-body">
                <h3>Shoe</h3>
                <p>Bringing the right shoes to gym class is crucial for ensuring comfort and performance during your workout.</p>
              </div>
            </div>
          </div>
        </div>
        </div>
      </div>
    </section>
    <!-- Section Services End -->
   
 <section class="facility__container">
      <div class="facility__image">
        <img src="images/bodybuilding2.jpg" alt="facility" />
      </div>
      <div class="facility__content">
        <h2 class="section__header">BodyBuilding</h2>
        <p>
        Bodybuilding involves progressive resistance exercises 
        aimed at enhancing muscle size and strength through hypertrophy.
        </p>
        <p>
        Engaging in bodybuilding not only strengthens muscles but 
        also promotes general health and fitness. 
        </p>
        <p>
        Duration: 45 minutes
        </p>
      </div>
    </section>

  <!-- Section Packages Start -->
 <section class="packages" id="packages">
      <div class="container">   
        <div class="main-txt">
        <h1><span>C</span>lasses</h1>
        </div>

        <div class="row" style="margin-top: 30px;">
          <div class="col-md-4 py-3 py-md-0">
            <div class="card">
              <img src="images/Bodybuilding5.jpg" alt="">
              <div class="card-body">
                <h3>BodyBuilding</h3>
                <p>A bodybuilding gym class can be an exciting, structured way to introduce participants to muscle-building exercises in a supportive group setting.</p>
                <a href="login.php">Book Now</a>
              </div>
            </div>
          </div>

          <div class="col-md-4 py-3 py-md-0"style="margin-bottom: 30px;">
          <div class="card">
              <img src="images/cardio1.jpg" alt="">
              <div class="card-body">
                <h3>Cardio</h3>
                <p>Cardio, short for cardiovascular exercise, refers to any activity that raises your heart rate, helping improve heart health, burn calories, and boost endurance.</p>
                <a href="login.php">Book Now</a>
              </div>
            </div>
          </div>

          <div class="col-md-4 py-3 py-md-0"style="margin-bottom: 30px;">
            <div class="card">
              <img src="images/zumba3.jpg" alt="">
              <div class="card-body">
                <h3>Zumba</h3>
                <p>Zumba is a fitness program that combines Latin and international music with dance moves to create a fun, energetic workout.</p>
                <a href="login.php">Book Now</a>
              </div>
          </div>
        </div>
        <div class="col-md-4 py-3 py-md-0"style="margin-bottom: 30px;">

          <div class="card">
              <img src="images/crossfit1.jpg" alt="">
              <div class="card-body">
                <h3>Crossfit</h3>
                <p>CrossFit is a high-intensity fitness program that combines elements of weightlifting, cardio, gymnastics, and bodyweight exercises to improve overall strength, endurance, agility, and flexibility.</p>
                <a href="login.php">Book Now</a>
              </div>
            </div>

          </div>
          <div class="col-md-4 py-3 py-md-0"style="margin-bottom: 30px;">

          <div class="card">
              <img src="images/yoga1.jpg" alt="">
              <div class="card-body">
                <h3>Yoga</h3>
                <p>Yoga is a mind-body practice that combines physical postures, breath control, meditation, and ethical principles to promote physical, mental, and spiritual well-being.</p>
                <a href="login.php">Book Now</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0"style="margin-bottom: 30px;">

          <div class="card">
              <img src="images/boxing3.jpg" alt="">
              <div class="card-body">
                <h3>Boxing</h3>
                <p>Boxing is a high-intensity sport and workout that involves striking, footwork, and defensive movements, making it an excellent activity for cardiovascular fitness, strength, agility, and mental focus. </p>
                <a href="login.php">Book Now</a>
              </div>
           </div>
          </div>    
    </section>
    <!-- Section Packages End -->

    <?php include 'schedule.php'; ?>

   



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
