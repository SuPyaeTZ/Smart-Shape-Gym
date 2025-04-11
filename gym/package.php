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