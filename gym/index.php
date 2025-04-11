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

	<!--  *****   Link To Font Awsome Icons   *****  -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
	
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="css/nice-select.css"/>
	<link rel="stylesheet" href="css/magnific-popup.css"/>
	<link rel="stylesheet" href="css/slicknav.min.css"/>
	<link rel="stylesheet" href="css/animate.css"/>
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.core.min.css">

   
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
	<!-- Main Stylesheets -->
 <link rel="stylesheet" href="css/style.css"/>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Catamaran:wght@600;700;800;900&family=Rubik:wght@400;500;800&display=swap"rel="stylesheet">
	<!--  *****   Link To Font Awsome Icons   *****  -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
  <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css"rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>

	<link
      href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css"
      rel="stylesheet"
    />

	<link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
            integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
	<!-- Page Preloder -->
	
	<!-- Header Section -->
	<?php include 'include/header.php';?>
	<!-- Header Section end -->
	 
	<!-- home section starts  -->

<section class="home" id="home">

<div class="swiper home-slider">

	<div class="swiper-wrapper">

		<div class="swiper-slide slide" style="background: url(images/gymtt1.jpg) no-repeat;">
			<div class="content">
				<span>Be strong, Be fit</span>
				<h3>Make yourself stronger than your excuses.</h3>
				<a href="login.php" class="btn">Get Started</a>
			</div>
		</div>

		<div class="swiper-slide slide" style="background: url(images/Gym7.jpg) no-repeat;">
			<div class="content">
				<span>Be strong, Be fit</span>
				<h3>Make yourself stronger than your excuses.</h3>
				<a href="login.php" class="btn">Get Started</a>
			</div>
		</div>

		<div class="swiper-slide slide" style="background: url(images/Gym4.jpg) no-repeat;">
			<div class="content">
				<span>Be strong, Be fit</span>
				<h3>Make yourself stronger than your excuses.</h3>
				<a href="login.php" class="btn">Get Started</a>
			</div>
		</div>

		<div class="swiper-slide slide" style="background: url(images/Gym1.jpg) no-repeat;">
			<div class="content">
				<span>be strong, be fit</span>
				<h3>Make yourself stronger than your excuses.</h3>
				<a href="login.php" class="btn">Get Started</a>
			</div>
		</div>

	</div>

	<div class="swiper-pagination"></div>

</div>

</section>

<section class="section__container explore__container">
      <div class="explore__header">
        <h2 class="section__header">EXPLORE OUR PROGRAM</h2>
      </div>
      <div class="explore__grid">
        <div class="explore__card">
          <span><i class="ri-boxing-fill"></i></span>
          <h4>Strength</h4>
          <p>
            Embrace the essence of strength as we delve into its various
            dimensions physical, mental, and emotional.
          </p>
          <a href="class.php">Join Now <i class="ri-arrow-right-line"></i></a>
        </div>
        <div class="explore__card">
          <span><i class="ri-heart-pulse-fill"></i></span>
          <h4>Physical Fitness</h4>
          <p>
            It encompasses a range of activities that improve health, strength,
            flexibility, and overall well-being.
          </p>
          <a href="class.php">Join Now <i class="ri-arrow-right-line"></i></a>
        </div>
        <div class="explore__card">
          <span><i class="ri-run-line"></i></span>
          <h4>Fat Lose</h4>
          <p>
            Through a combination of workout routines and expert guidance, we'll
            empower you to reach your goals.
          </p>
          <a href="class.php">Join Now <i class="ri-arrow-right-line"></i></a>
        </div>
        <div class="explore__card">
          <span><i class="ri-shopping-basket-fill"></i></span>
          <h4>Weight Gain</h4>
          <p>
            Designed for individuals, our program offers an effective approach
            to gaining weight in a sustainable manner.
          </p>
          <a href="class.php">Join Now <i class="ri-arrow-right-line"></i></a>
        </div>
      </div>
    </section>

	 <section class="section__container class__container">
      <div class="class__image">
        <span class="bg__blur"></span>
        <img src="images/class-5.jpg" alt="class" class="class__img-1" />
        <img src="images/class-6.jpg" alt="class" class="class__img-2" />
      </div>
      <div class="class__content">
        <h2 class="section__header">THE CLASS YOU WILL GET HERE</h2>
        <p>
          Led by our team of expert and motivational instructors, "The Class You
          Will Get Here" is a high-energy, results-driven session that combines
          a perfect blend of cardio, strength training, and functional
          exercises. Each class is carefully curated to keep you engaged and
          challenged, ensuring you never hit a plateau in your fitness
          endeavors.
        </p>
        <button class="btn">Book A Class</button>
      </div>
    </section>

    <section class="section__container join__container">
      <h2 class="section__header">WHY JOIN US ?</h2>
      <p class="section__subheader">
        Our diverse membership base creates a friendly and supportive
        atmosphere, where you can make friends and stay motivated.
      </p>
      <div class="join__image">
        <img src="images/training gym.jpg" alt="Join" />
        <div class="join__grid">
          <div class="join__card">
            <span><i class="ri-user-star-fill"></i></span>
            <div class="join__card__content">
              <h4>Personal Trainer</h4>
              <p>Unlock your potential with our expert Personal Trainers.</p>
            </div>
          </div>
          <div class="join__card">
            <span><i class="ri-vidicon-fill"></i></span>
            <div class="join__card__content">
              <h4>Practice Sessions</h4>
              <p>Elevate your fitness with practice sessions.</p>
            </div>
          </div>
          <div class="join__card">
            <span><i class="ri-building-line"></i></span>
            <div class="join__card__content">
              <h4>Good Management</h4>
              <p>Supportive management, for your fitness success.</p>
            </div>
          </div>
        </div>
      </div>
    </section>



	<!-- Pricing Section -->
	<section class="pricing-section spad">
		<div class="container">
			<div class="section-title text-center">
				<img src="images/logo-icon.png" alt="">
				<h2>Pricing plans</h2>
			</div>
			<div class="row">
			<?php 
			$sql ="SELECT id, category, titlename, PackageType, PackageDuratiobn, Price, uploadphoto, Description, create_date from tbladdpackage";
			$query= $dbh -> prepare($sql);
			$query-> execute();
			$results = $query -> fetchAll(PDO::FETCH_OBJ);
			$cnt=1;
			if($query -> rowCount() > 0)
			{
			foreach($results as $result)
			{
			?>
				<div class="col-lg-3 col-sm-6">
					<div class="pricing-item begginer">
						<div class="pi-top">
							<h4><?php echo $result->titlename;?></h4>
						</div>
						<div class="pi-price">
							<h3>$<?php echo htmlentities($result->Price);?></h3>
							<p>	<?php echo $result->PackageDuratiobn;?></p>
						</div>
						<ul>
							<?php echo $result->Description;?>
							
						</ul>
						<?php if(strlen($_SESSION['uid'])==0): ?>
						<a href="login.php" class="site-btn sb-line-gradient">Booking Now</a>
						<?php else :?>
							<form method='post'>
                            <input type='hidden' name='pid' value='<?php echo htmlentities($result->id);?>'>
                        <input class='site-btn sb-line-gradient' type='submit' name='submit' value='Booking Now' onclick="return confirm('Do you really want to book this package.');"> 
                        </form> 
							 <?php endif;?>
					</div>
				</div>
				<?php  $cnt=$cnt+1; } } ?>
			</div>
		</div>
	</section>


<!--   *** Offer Section Starts ***   -->
<section class="offer">
	<div class="offer-overlay"></div>
	<div class="offer-contents">
		<h1>Start Your Training Today</h1>
		<h3></h3>
		<button class="btn start-training-btn">Join Now</button>
	</div>
</section>
<!--   *** Offer Section Ends ***   -->


<!--   *** Team Section Starts ***   -->
<section class="our-team" id="our_team">
	<!--   === Team Header Starts ===   -->
	<header class="section-header">
		<h3>Our Trainers</h3>
		<h1>Meet Our Experienced Trainers</h1>
	</header>
	<!--   === Team Header Ends ===   -->
	<!--   === Team Contents Starts ===   -->
	<div class="team-contents">
		
		<div class="trainer-card">
			<div class="trainer-image">
				<img src="images/gym trainer1.png">
			</div>
			<div class="trainer-desc">
				<h2>David</h2>
				<p>Muscles Trainer</p>
			</div>
			<div class="trainer-contact">
				<a href="#"><i class="fa-brands fa-facebook-f"></i></a>
				<a href="#"><i class="fa-brands fa-twitter"></i></a>
				<a href="#"><i class="fa-brands fa-instagram"></i></a>
			</div>
		</div>

		<div class="trainer-card">
			<div class="trainer-image">
				<img src="images/gym trainer2.jpg">
			</div>
			<div class="trainer-desc">
				<h2>Michael</h2>
				<p>Zumba Trainer</p>
			</div>
			<div class="trainer-contact">
				<a href="#"><i class="fa-brands fa-facebook-f"></i></a>
				<a href="#"><i class="fa-brands fa-twitter"></i></a>
				<a href="#"><i class="fa-brands fa-instagram"></i></a>
			</div>
		</div>

		<div class="trainer-card">
			<div class="trainer-image">
				<img src="images/gym trainer3.jpg">
			</div>
			<div class="trainer-desc">
				<h2>Austin</h2>
				<p>Boxing Trainer</p>
			</div>
			<div class="trainer-contact">
				<a href="#"><i class="fa-brands fa-facebook-f"></i></a>
				<a href="#"><i class="fa-brands fa-twitter"></i></a>
				<a href="#"><i class="fa-brands fa-instagram"></i></a>
			</div>
		</div>

		<div class="trainer-card">
			<div class="trainer-image">
				<img src="images/gym trainer4.jpg">
			</div>
			<div class="trainer-desc">
				<h2>Tom Anderson</h2>
				<p>Fitness Trainer</p>
			</div>
			<div class="trainer-contact">
				<a href="#"><i class="fa-brands fa-facebook-f"></i></a>
				<a href="#"><i class="fa-brands fa-twitter"></i></a>
				<a href="#"><i class="fa-brands fa-instagram"></i></a>
			</div>
		</div>

		<div class="trainer-card">
			<div class="trainer-image">
				<img src="images/gym trainer5.jpg">
			</div>
			<div class="trainer-desc">
				<h2>Alex</h2>
				<p>Yoga Trainer</p>
			</div>
			<div class="trainer-contact">
				<a href="#"><i class="fa-brands fa-facebook-f"></i></a>
				<a href="#"><i class="fa-brands fa-twitter"></i></a>
				<a href="#"><i class="fa-brands fa-instagram"></i></a>
			</div>
		</div>

		<div class="trainer-card">
			<div class="trainer-image">
				<img src="images/gym trainer6.jpg">
			</div>
			<div class="trainer-desc">
				<h2>Sofia</h2>
				<p>Fitness Trainer</p>
			</div>
			<div class="trainer-contact">
				<a href="#"><i class="fa-brands fa-facebook-f"></i></a>
				<a href="#"><i class="fa-brands fa-twitter"></i></a>
				<a href="#"><i class="fa-brands fa-instagram"></i></a>
			</div>
		</div>	
	</div>
	<!--   === Team Contents Ends ===   -->
</section>


<!--   *** Blog Section Starts ***   -->
<section class="blog" id="blog">
	<!--   === Blog Header Starts ===   -->
	<header class="section-header">
		<h3>Our Blog</h3>
		<h1>Latest From Our Blog</h1>
	</header>
	<!--   === Blog Header Ends ===   -->

	<!--   === Blog Contents Starts ===   -->
	<div class="blog-contents">	
		<div class="article-card">
			<img src="images/blog-1.jpg">
			<div class="category">
				<div class="subject"><h3>Muscles</h3></div>
				<span>14/10/2024</span>
			</div>
			<h2 class="article-title">Strong Muscle</h2>
			<p class="article-desc">Muscles are specialized tissues in the body that enable movement, maintain posture, and support bodily functions. Understanding the different types of muscles, their functions, and how they work can help you optimize your workouts and overall fitness. </p>
			<div class="article-views">
			<span>2.5k <i class="fa-solid fa-eye"></i></span>
			<span>352 <i class="fa-solid fa-comment"></i></span>
			</div>
		</div>

		<div class="article-card">
			<img src="images/blog-2.jpg">
			<div class="category">
				<div class="subject"><h3>Strong Crossfit</h3></div>
				<span>15/10/2024</span>
			</div>
			<p class="article-desc">CrossFit is a high-intensity fitness program that combines elements of weightlifting, aerobic exercise, and high-intensity interval training.It is designed to improve overall fitness, building strength, endurance, and agility through varied workouts.</p>
			<div class="article-views">
				<span>2.5k <i class="fa-solid fa-eye"></i></span>
				<span>352 <i class="fa-solid fa-comment"></i></span>
			</div>
		</div>

		<div class="article-card">
			<img src="images/blog-3.jpg">
			<div class="category">
				<div class="subject"><h3>Strong BodyBuilding</h3></div>
				<span>16/102024</span>
			</div>
			<h2 class="article-title">BodyBuilding</h2>
			<p class="article-desc">Bodybuilding is a systematic approach to resistance training with the primary goal of increasing muscle mass, strength, and overall physical appearance. It typically involves a combination of weight training, nutrition, and recovery strategies.</p>
			<div class="article-views">
				<span>2.5k <i class="fa-solid fa-eye"></i></span>
				<span>352 <i class="fa-solid fa-comment"></i></span>
			</div>
		</div>
	</div>
</section>
<!--   *** Blog Section Ends ***   -->

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
	<!--   *** Link To Custom Script File ***   -->
<script type="text/javascript" src="script.js"></script>
<!-- Add Swiper JS -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>


<script>

var swiper = new Swiper(".home-slider", {
    spaceBetween: 20,
    effect: "fade",
    grabCursor: true,
    loop:true,
    centeredSlides: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
});

var swiper = new Swiper(".review-slider", {
    spaceBetween: 20,
    grabCursor: true,
    loop:true,
    autoplay: {
        delay: 7500,
        disableOnInteraction: false,
    },
    breakpoints:{
        0:{
            slidesPerView:1,
        },
        600:{
            slidesPerView:2,
        },
    },
});

var swiper = new Swiper(".blogs-slider", {
    spaceBetween: 20,
    grabCursor: true,
    loop:true,
    autoplay: {
        delay: 7500,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    breakpoints:{
        0:{
            slidesPerView:1,
        },
        768:{
            slidesPerView:2,
        },
        991:{
            slidesPerView:3,
        },
    },
});

let next = document.querySelector('.next')
  let prev = document.querySelector('.prev')
  
  next.addEventListener('click', function(){
	  let items = document.querySelectorAll('.item')
	  document.querySelector('.slide').appendChild(items[0])
  })
  
  prev.addEventListener('click', function(){
	  let items = document.querySelectorAll('.item')
	  document.querySelector('.slide').prepend(items[items.length - 1]) // here the length of items = 6
  })
</script>

	</body>
</html>
