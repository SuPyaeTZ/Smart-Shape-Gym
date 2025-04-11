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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
      <!-- Boxicon -->
      <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- Swiper Js -->
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
  />
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
    <div class = "contact-ca">
        <h2>Contact Us</h2>
        <div class = "line">
        <div></div>
        <div></div>
        <div></div>
        </div>
        <p class = "text"></p>
    </div>
    </section>

    <section class="contacts" id="contacts">
        <div class="contact-sections">
        <div class = "map">
		  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15276.793343995632!2d96.1679894!3d16.816514!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1ecb385037f11%3A0xa4ac4eaf23262155!2sBritish%20University%20College!5e0!3m2!1sen!2ssg!4v1729591573026!5m2!1sen!2ssg" width="500" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="contact-text">
            <b>Contact Us</b><br><br>
                <p><i class='bx bx-map'></i> S-25, Housing, Street U Chit Maung Rd, Yangon 11211, Myanmar (Burma)</p><br>
                <p><i class='bx bx-phone'></i> 09 788758658 <br> <br> <i class='bx bx-envelope'> 
                </i> Email: smartshapegym@gmail.com</p><br> 
                <p><i class = "fas fa-clock"></i>
           Opening Hours: Monday - Sunday (9:00 AM to 5:00 PM)</p>
                <div class="social-media">
                    <a href="#"><i class='bx bxl-facebook'></i></a>
                    <a href="#"><i class='bx bxl-instagram' ></i></a>
                    <a href="#"><i class='bx bxl-linkedin' ></i></a>
                </div>
            </div>           
        </div>      
     </section>


 <section class="price-package" id="price">
  	 <div class="container">
  	 	  <h2>Our Services</h2>
  	 	  <div class="content">
  	 	  	  <div class="box wow bounceInUp">
  	 	  	  	  <div class="inner">
  	 	  	  	  	   <div class="price-tag"> 	 	  	  	  	  
  	 	  	  	  	   </div>
  	 	  	  	  	   <div class="img">
  	 	  	  	  	   	 <img src="images/Gym1.jpg" alt="price" />
  	 	  	  	  	   </div>
  	 	  	  	  	   <div class="text">
                      <h3>Service</h3>
                        <p>24/7 Service</p>
  	 	  	  	  	   	  <p>Brand new equipment</p>
  	 	  	  	  	   	  <p>Service Locker Rooms</p>
  	 	  	  	  	   	  <a href="login.php" class="btn">Join Now</a>
  	 	  	  	  	   </div>
  	 	  	  	  </div>
  	 	  	  </div>
  	 	  	  <div class="box wow bounceInUp" data-wow-delay="0.2s">
  	 	  	  	  <div class="inner">
  	 	  	  	  	   <div class="price-tag">
  	 	  	  	  	   </div>
  	 	  	  	  	   <div class="img">
  	 	  	  	  	   	 <img src="images/bodybuilding2.jpg" alt="price" />
  	 	  	  	  	   </div>
  	 	  	  	  	   <div class="text">
  	 	  	  	  	   	  <h3>Service</h3>
  	 	  	  	  	   	  <p>Get Free WiFi</p>
  	 	  	  	  	   	  <p>Month to Month</p>
  	 	  	  	  	   	  <p>Service Locker Rooms</p>
  	 	  	  	  	   	  <a href="login.php" class="btn">Join Now</a>
  	 	  	  	  	   </div>
  	 	  	  	  </div>
  	 	  	  </div>
             <div class="box wow bounceInUp" data-wow-delay="0.2s">
  	 	  	  	  <div class="inner">
  	 	  	  	  	   <div class="price-tag">
  	 	  	  	  	   </div>
  	 	  	  	  	   <div class="img">
  	 	  	  	  	   	 <img src="images/zumba3.jpg" alt="price" />
  	 	  	  	  	   </div>
  	 	  	  	  	   <div class="text">
  	 	  	  	  	   	  <h3>Service</h3>
  	 	  	  	  	   	  <p>Gym and Cardio</p>
  	 	  	  	  	   	  <p>Quarterly Preventive Maintenance</p>
  	 	  	  	  	   	  <p>Unlimited Breakdown Calls</p>
  	 	  	  	  	   	  <a href="login.php" class="btn">Join Now</a>
  	 	  	  	  	   </div>
  	 	  	  	  </div>
  	 	  	  </div>
             <div class="box wow bounceInUp" data-wow-delay="0.2s">
  	 	  	  	  <div class="inner">
  	 	  	  	  	   <div class="price-tag">
  	 	  	  	  	   </div>
  	 	  	  	  	   <div class="img">
  	 	  	  	  	   	 <img src="images/crossfit2.jpg" alt="price" />
  	 	  	  	  	   </div>
  	 	  	  	  	   <div class="text">
  	 	  	  	  	   	  <h3>Service</h3>
  	 	  	  	  	   	  <p>No Time Restrictions</p>
  	 	  	  	  	   	  <p>Gym and Cardio</p>
  	 	  	  	  	   	  <p>Service Locker Rooms</p>
  	 	  	  	  	   	  <a href="login.php" class="btn">Join Now</a>
  	 	  	  	  	   </div>
  	 	  	  	  </div>
  	 	  	  </div>            
  	 	  </div>
  	 </div>
  </section>



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

	</body>
</html>
