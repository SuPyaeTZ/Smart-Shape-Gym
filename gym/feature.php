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
  <link
      href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css"
      rel="stylesheet"
    />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

  <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css"rel="stylesheet"/>
  <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
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
		<h2>Our Features</h2>
		<div class = "line">
		<div></div>
		<div></div>
		<div></div>
		</div>
	</div>

      <!-- GYM Feature Start -->
      <div class="container feature pt-5">
        <div class="d-flex flex-column text-center mb-5">
            <h4 class="text-primary font-weight-bold">Why Choose Us?</h4>
            <h4 class="display-4 font-weight-bold">Benifits of Joining Our GYM</h4>
        </div>
        <div class="row">
            <div class="col-md-6 mb-5">
                <div class="row align-items-center">
                    <div class="col-sm-5">
                        <img class="img-fluid mb-3 mb-sm-0" src="images/feature-1.jpg" alt="Image">
                        <i class="flaticon-barbell"></i>
                    </div>
                    <div class="col-sm-7">
                        <h4 class="font-weight-bold">Videos Instruction</h4>
                        <p>Smart Shape Gym provides a variety of instructional workout videos designed to cater to different fitness levels and preferences. </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-5">
                <div class="row align-items-center">
                    <div class="col-sm-5">
                        <img class="img-fluid mb-3 mb-sm-0" src="images/feature-2.jpg" alt="Image">
                        <i class="flaticon-training"></i>
                    </div>
                    <div class="col-sm-7">
                        <h4 class="font-weight-bold">Training Calendar</h4>
                        <p>Smart Shape Gym offers a comprehensive training calendar featuring a variety of classes designed to cater to different fitness levels and interests.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-5">
                <div class="row align-items-center">
                    <div class="col-sm-5">
                        <img class="img-fluid mb-3 mb-sm-0" src="images/feature-3.jpg" alt="Image">
                        <i class="flaticon-trends"></i>
                    </div>
                    <div class="col-sm-7">
                        <h4 class="font-weight-bold">Free Apps & WiFi</h4>
                        <p>Smart Shape Gym provides a range of free apps and Wi-Fi services to enhance your fitness experience.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-5">
                <div class="row align-items-center">
                    <div class="col-sm-5">
                        <img class="img-fluid mb-3 mb-sm-0" src="images/feature-4.jpg" alt="Image">
                        <i class="flaticon-support"></i>
                    </div>
                    <div class="col-sm-7">
                        <h4 class="font-weight-bold">Community Support</h4>
                        <p>Smart Shape Gym emphasizes community support as a key component of its fitness philosophy.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- GYM Feature End -->

    <section class="banner" id="contact">
      <div class="banner__content">
        <h2>THE BEST TRAINERS OUT THERE</h2>
        <p>ARE YOU A TRAINER? <a href="#">JOIN US</a></p>
      </div>
      <div class="banner__image">
        <img src="images/session-3.jpg" alt="banner" />
      </div>
    </section>

    <section class="section__container client__container" id="client">
      <h2 class="section__header">What People Says About Us?</h2>
      <p class="section__description">
        These testimonials serve as a testament to our commitment to helping
        individuals achieve their fitness goals, and fostering a supportive
        environment for everyone who walks through our doors.
      </p>
      <!-- Slider main container -->
      <div class="swiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
          <!-- Slides -->
          <div class="swiper-slide1">
            <div class="client__card">
              <img src="images/client-1.jpg" alt="client" />
              <div class="client__ratings">
                <span><i class="ri-star-fill"></i></span>
                <span><i class="ri-star-fill"></i></span>
                <span><i class="ri-star-fill"></i></span>
                <span><i class="ri-star-fill"></i></span>
                <span><i class="ri-star-line"></i></span>
              </div>
              <p>
                The trainers here customized a plan that balanced my work-life
                demands, and I've seen remarkable progress in my fitness
                journey. It's not just a gym; it's my sanctuary for self-care.
              </p>
              <h4>Jane Smith</h4>
              <h5>Marketing Manager</h5>
            </div>
          </div>
          <div class="swiper-slide1">
            <div class="client__card">
              <img src="images/client-2.jpg" alt="client" />
              <div class="client__ratings">
                <span><i class="ri-star-fill"></i></span>
                <span><i class="ri-star-fill"></i></span>
                <span><i class="ri-star-fill"></i></span>
                <span><i class="ri-star-fill"></i></span>
                <span><i class="ri-star-half-fill"></i></span>
              </div>
              <p>
                The trainers' expertise and the gym's commitment to cleanliness
                during these times have made it a safe haven for me to maintain
                my health and de-stress.
              </p>
              <h4>Emily Carter</h4>
              <h5>Registered Nurse</h5>
            </div>
          </div>
          <div class="swiper-slide1">
            <div class="client__card">
              <img src="images/client-3.jpg" alt="client" />
              <div class="client__ratings">
                <span><i class="ri-star-fill"></i></span>
                <span><i class="ri-star-fill"></i></span>
                <span><i class="ri-star-fill"></i></span>
                <span><i class="ri-star-half-fill"></i></span>
                <span><i class="ri-star-line"></i></span>
              </div>
              <p>
                The variety of classes and the supportive community have kept me
                motivated. I've shed pounds, gained confidence, and found a new
                level of energy to inspire my students.
              </p>
              <h4>John Davis</h4>
              <h5>Teacher</h5>
            </div>
          </div>
          <div class="swiper-slide1">
            <div class="client__card">
              <img src="images/client-4.jpg" alt="client" />
              <div class="client__ratings">
                <span><i class="ri-star-fill"></i></span>
                <span><i class="ri-star-fill"></i></span>
                <span><i class="ri-star-fill"></i></span>
                <span><i class="ri-star-fill"></i></span>
                <span><i class="ri-star-fill"></i></span>
              </div>
              <p>
                This gym's 24/7 access has been a lifesaver. Whether it's a
                late-night workout or an early morning session, the convenience
                here is unbeatable.
              </p>
              <h4>David Martinez</h4>
              <h5>Entrepreneur</h5>
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
    <script src="https://unpkg.com/scrollreveal"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script>
    const swiper = new Swiper(".swiper", {
    loop: true,
    slidesPerView: "auto",
    spaceBetween: 20,
    });

    
const scrollRevealOption = {
  origin: "bottom",
  distance: "50px",
  duration: 1000,
};

ScrollReveal().reveal(".header__image img", {
  ...scrollRevealOption,
  origin: "right",
});
ScrollReveal().reveal(".header__content h1", {
  ...scrollRevealOption,
  delay: 500,
});
ScrollReveal().reveal(".header__content h2", {
  ...scrollRevealOption,
  delay: 1000,
});
ScrollReveal().reveal(".header__content p", {
  ...scrollRevealOption,
  delay: 1500,
});
ScrollReveal().reveal(".header__btn", {
  ...scrollRevealOption,
  delay: 2000,
});

ScrollReveal().reveal(".about__image img", {
  ...scrollRevealOption,
  origin: "left",
});
ScrollReveal().reveal(".about__content .section__header", {
  ...scrollRevealOption,
  delay: 500,
});
ScrollReveal().reveal(".about__content p", {
  ...scrollRevealOption,
  delay: 1000,
});
ScrollReveal().reveal(".about__btn", {
  ...scrollRevealOption,
  delay: 1500,
});

ScrollReveal().reveal(".service__card", {
  duration: 1000,
  interval: 500,
});

ScrollReveal().reveal(".facility__content .section__header", {
  ...scrollRevealOption,
});
ScrollReveal().reveal(".facility__content p", {
  ...scrollRevealOption,
  delay: 500,
});

ScrollReveal().reveal(".mentor__card", {
  ...scrollRevealOption,
  interval: 500,
});

ScrollReveal().reveal(".banner__content h2", {
  ...scrollRevealOption,
});
ScrollReveal().reveal(".banner__content p", {
  ...scrollRevealOption,
  delay: 500,
});

    </script>

	</body>
</html>
