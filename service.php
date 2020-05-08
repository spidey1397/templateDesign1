<!DOCTYPE html>
<html lang="en">
<head>
	<?php
	
	include_once 'css.php';
?>

</head>
<body>
	<!-- header section -->
<?php

	include_once'header.php';
?>
<!-- header section end -->

	<!-- Page header section start -->
	<section class="page-header-section set-bg" data-setbg="img/header-bg.jpg">
		<div class="container">
			<h1 class="header-title">Services<span>.</span></h1>
		</div>
	</section>
	<!-- Page header section end -->



	<!-- Intro section start -->
	<section class="intro-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-5">
					<div class="service-slider">
						<div class="ss-single">
							<img src="img/service/1.jpg" alt="">
						</div>
						<div class="ss-single">
							<img src="img/service/2.jpg" alt="">
						</div>
						<div class="ss-single">
							<img src="img/service/3.jpg" alt="">
						</div>
					</div>
				</div>
				<div class="col-lg-7 service-text">
					<h1>We offer top quality project <span>services</span></h1>
					<div class="col-md-12">
						<div id="accordion" class="accordion-area">
							<div class="panel">
								<div class="panel-header" id="headingOne">
									Mauris pharetra libero turpis, congue ultrices turpis consectetur 
									<button class="panel-link" data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapse1"></button>
								</div>
								<div id="collapse1" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
									<div class="panel-body">
										<p>Pellentesque lorem dolor, malesuada eget tortor vitae, tristique lacinia lectus. Pellen te sque sed accumsan risus, id aliquam nulla. Integer lorem risus, feugiat at mauris m alesuada, accumsan pellentesque ipsum. Nunc dapibus, libero ut pulvinar accumsan, tortor nisl iaculis ligula. </p>
									</div>
								</div>
							</div>
							<div class="panel">
								<div class="panel-header" id="headingTwo">
									Etiam ut augue et felis cursus bibendum sit amet ac justo
									<button class="panel-link" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2"></button>
								</div>
								<div id="collapse2" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
									<div class="panel-body">
										<p>Pellentesque lorem dolor, malesuada eget tortor vitae, tristique lacinia lectus. Pellen te sque sed accumsan risus, id aliquam nulla. Integer lorem risus, feugiat at mauris m alesuada, accumsan pellentesque ipsum. Nunc dapibus, libero ut pulvinar accumsan, tortor nisl iaculis ligula. </p>
									</div>
								</div>
							</div>
							<div class="panel">
								<div class="panel-header active" id="headingThree">
									Etiam ut augue et felis cursus bibendum sit amet ac justo
									<button class="panel-link" data-toggle="collapse" data-target="#collapse3" aria-expanded="true" aria-controls="collapse3"></button>
								</div>
								<div id="collapse3" class="collapse show" aria-labelledby="headingThree" data-parent="#accordion">
									<div class="panel-body">
										<p>Pellentesque lorem dolor, malesuada eget tortor vitae, tristique lacinia lectus. Pellen te sque sed accumsan risus, id aliquam nulla. Integer lorem risus, feugiat at mauris m alesuada, accumsan pellentesque ipsum. Nunc dapibus, libero ut pulvinar accumsan, tortor nisl iaculis ligula. </p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Intro section end -->


	<!-- Service box section start -->
	<div class="service-box-section spad set-bg" data-setbg="img/service-bg.jpg">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="solid-service-box">
						<h2>01.</h2>
						<h3>The idea</h3>
						<p>Fusce commodo tincidunt convallis. <br> Nunc at purus vitae nisl sagittis grav ida ut sit amet diam.</p>
						<a href="#" class="readmore" data-toggle="modal" data-target="#exampleModalCenter">READ MORE</a>
					
						<!-- Modal -->
						<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" 						aria-hidden="true">
						  <div class="modal-dialog fadeInDown" role="document">
						    <div class="modal-content">
						      <div class="modal-header">
						        <h5 class="modal-title" id="exampleModalCenterTitle">User Form</h5>
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
						          <span aria-hidden="true">&times;</span>
						        </button>
						      </div>
						      <div class="modal-body">
						        <form method="post" action="process.php">
						        	<div class="form-group">
						    <input type="text" class="form-control fadeIn second" name="name" placeholder="Enter Your Name">
						  </div>
						  <div class="form-group">
						    <input type="number" class="form-control fadeIn second" name="mobile" placeholder="Enter Your Mobile Number">
						  </div>
						  <div class="form-group">
						   <input type="email" class="form-control fadeIn first" name="email" placeholder="Enter Your Email Id" aria-describedby="emailHelp">
						  </div>
						  <div class="form-group mt-2" style="">
						    <button type="submit" name="save" class="site-btn sb-solid-color mr-5">Submit</button>
						  </div>
						</form>      
						</div>
						    </div>
						  </div>
						</div>	
					</div>
				</div>

				<div class="col-lg-4 col-md-6">
					<div class="solid-service-box">
						<h2>02.</h2>
						<h3>Behind the work</h3>
						<p>Fusce commodo tincidunt convallis. <br> Nunc at purus vitae nisl sagittis grav ida ut sit amet diam.</p>
						<a href="#" class="readmore" data-toggle="modal" data-target="#exampleModalCenter">READ MORE</a>
						<!-- Modal -->
						<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" 						aria-hidden="true">
						  <div class="modal-dialog fadeInDown" role="document">
						    <div class="modal-content">
						      <div class="modal-header">
						        <h5 class="modal-title" id="exampleModalCenterTitle">User Form</h5>
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
						          <span aria-hidden="true">&times;</span>
						        </button>
						      </div>
						      <div class="modal-body">
						        <form method="post" action="process.php">
						        	<div class="form-group">
						    <input type="text" class="form-control fadeIn second" name="name" placeholder="Enter Your Name">
						  </div>
						  <div class="form-group">
						    <input type="number" class="form-control fadeIn second" name="mobile" placeholder="Enter Your Mobile Number">
						  </div>
						  <div class="form-group">
						   <input type="email" class="form-control fadeIn first" name="email" placeholder="Enter Your Email Id" aria-describedby="emailHelp">
						  </div>
						  <div class="form-group mt-2" style="">
						    <button type="submit" name="save" class="site-btn sb-solid-color mr-5">Submit</button>
						  </div>
						</form>      
						</div>
						    </div>
						  </div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-12">
					<div class="solid-service-box">
						<h2>03.</h2>
						<h3>The Success</h3>
						<p>Fusce commodo tincidunt convallis. <br> Nunc at purus vitae nisl sagittis grav ida ut sit amet diam.</p>
						<a href="#" class="readmore" data-toggle="modal" data-target="#exampleModalCenter">READ MORE</a>
						<!-- Modal -->
						<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" 						aria-hidden="true">
						  <div class="modal-dialog fadeInDown" role="document">
						    <div class="modal-content">
						      <div class="modal-header">
						        <h5 class="modal-title" id="exampleModalCenterTitle">User Form</h5>
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
						          <span aria-hidden="true">&times;</span>
						        </button>
						      </div>
						      <div class="modal-body">
						        <form method="post" action="process.php">
						        	<div class="form-group">
						    <input type="text" class="form-control fadeIn second" name="name" placeholder="Enter Your Name">
						  </div>
						  <div class="form-group">
						    <input type="number" class="form-control fadeIn second" name="mobile" placeholder="Enter Your Mobile Number">
						  </div>
						  <div class="form-group">
						   <input type="email" class="form-control fadeIn first" name="email" placeholder="Enter Your Email Id" aria-describedby="emailHelp">
						  </div>
						  <div class="form-group mt-2" style="">
						    <button type="submit" name="save" class="site-btn sb-solid-color mr-5">Submit</button>
						  </div>
						</form>      
						</div>
						    </div>
						  </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Service box section end -->


	<!-- Service section start -->
	<section class="service-section spad">
		<div class="container">
			<div class="section-title">
				<h1>Services</h1>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="service-box">
						<div class="sb-icon">
							<div class="sb-img-icon">
								<img src="img/icon/dark/1.png" alt="">
							</div>
						</div>
						<h3>Plans and Projects</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sed dui eget lorem tincidunt.</p>
						<a href="#" class="readmore">READ MORE</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="service-box">
						<div class="sb-icon">
							<div class="sb-img-icon">
								<img src="img/icon/dark/2.png" alt="">
							</div>
						</div>
						<h3>Conceptual Architecture</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sed dui eget lorem tincidunt.</p>
						<a href="#" class="readmore">READ MORE</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="service-box">
						<div class="sb-icon">
							<div class="sb-img-icon">
								<img src="img/icon/dark/3.png" alt="">
							</div>
						</div>
						<h3>Apartment Buildings</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sed dui eget lorem tincidunt.</p>
						<a href="#" class="readmore">READ MORE</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="service-box">
						<div class="sb-icon">
							<div class="sb-img-icon">
								<img src="img/icon/dark/4.png" alt="">
							</div>
						</div>
						<h3>Skyscrapers Buildings</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sed dui eget lorem tincidunt.</p>
						<a href="#" class="readmore">READ MORE</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="service-box">
						<div class="sb-icon">
							<div class="sb-img-icon">
								<img src="img/icon/dark/5.png" alt="">
							</div>
						</div>
						<h3>Documentation</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sed dui eget lorem tincidunt.</p>
						<a href="#" class="readmore">READ MORE</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="service-box">
						<div class="sb-icon">
							<div class="sb-img-icon">
								<img src="img/icon/dark/6.png" alt="">
							</div>
						</div>
						<h3>Restauration Projects</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sed dui eget lorem tincidunt.</p>
						<a href="#" class="readmore">READ MORE</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Service section end -->



	<section class="promo-section pt-0">
		<div class="promo-box set-bg" data-setbg="img/bg.jpg">
			<div class="container">
				<div class="row">
					<div class="col-lg-9 promo-text">
						<h1>In need of a <span>fabulouse</span> home?</h1>
						<p>Pellentesque lorem dolor, malesuada eget tortor vitae, tristique lacinia lectus. Pellentesque sed accumsan risus.</p>
					</div>
					<div class="col-lg-3 text-lg-right">
						<a href="#" class="site-btn sb-light mt-4">Get in Touch</a>
					</div>
				</div>
			</div>
		</div>
	</section>




<!-- footer section start -->

<?php
	
	include_once'footer.php';
?>
<!-- footer section end -->

	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/isotope.pkgd.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.owl-filter.js"></script>
	<script src="js/magnific-popup.min.js"></script>
	<script src="js/circle-progress.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>