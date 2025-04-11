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
	<!--  *****   Link To Font Awsome Icons   *****  -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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
		<h2>About us</h2>
		<div class = "line">
		<div></div>
		<div></div>
		<div></div>
		</div>
	</div>

<!--   *** About Section Starts ***   -->
<section class="about" id="about">
	<div class="about-contents">
		
		<div class="about-left-col">
			<img src="images/Gym5.jpg">
		</div>

		<div class="about-right-col">
			<h4>About Us</h4>
			<h1>Best Facilities and Experienced Trainers</h1>
			<p>Smart Shape Gym is dedicated to promoting health and fitness through a variety of innovative classes and personalized training options.<br>
			Mission: Smart Shape Gym aims to enhance overall health by providing a supportive environment where individuals 
			can achieve their fitness goals both physically and mentally.<br>
			Facilities: Equipped with the latest fitness technology, Smart Gym features a wide range of exercise 
			classes tailored to different fitness levels and preferences.</p>
			<div class="about-states">
			<a href="#" class="btn btn-primary">Join Class</a>
				</div>
			
			</div>
		</div>

	</div>
</section>
<!--   *** About Section Ends ***   -->



<section class="banner" id="contact">
      <div class="banner__content">
        <h2>THE BEST TRAINERS OUT THERE</h2>
        <p>ARE YOU A TRAINER? <a href="#">JOIN US</a></p>
      </div>
      <div class="banner__image">
        <img src="images/session-3.jpg" alt="banner" />
      </div>
    </section>

	<!-- Start Gallery -->
	<section class="gallery" id="gallery">
  	 <h2>Workout Gallery</h2>
  	<div class="content">
  		 <div class="box wow slideInLeft">
  		 	 <img src="images/gallery1.jpg" alt="gallery" />
  		 </div>
  		 <div class="box wow slideInRight">
  		 	 <img src="images/gallery2.jpg" alt="gallery" />
  		 </div>
  		 <div class="box wow slideInLeft">
  		 	 <img src="images/gallery3.jpg" alt="gallery" />
  		 </div>
  		 <div class="box wow slideInRight">
  		 	 <img src="images/Gym.jpg" alt="gallery" />
  		 </div>
  	</div>
  </section>
<!-- End Gallery -->


	<!-- Footer Section -->
	<?php include 'include/footer.php'; ?>
	<!-- Footer Section end -->



	<!-- Search model end -->

	<!--====== Javascripts & Jquery ======-->
	<script src="js/vendor/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.slicknav.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.nice-select.min.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/main.js"></script>

	</body>
</html>
