<?php


include_once 'connection.php';
$cat = mysqli_query($conn, "SELECT * FROM category");
$img = mysqli_query($conn, "SELECT * FROM images");
$result = mysqli_query($conn, "SELECT * FROM tables");
$res = mysqli_query($conn, "SELECT * FROM tables");




		






?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Arcade - Architecture</title>
	<meta charset="UTF-8">
	<meta name="description" content="Arcade - Architecture Template">
	<meta name="keywords" content="arcade, architecture, onepage, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->   
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/animate.css"/>
	<link rel="stylesheet" href="css/magnific-popup.css"/>
	<link rel="stylesheet" href="css/owl.carousel.css"/>
	<link rel="stylesheet" href="css/style.css"/>


</head>
<body>
<!-- header section -->
<?php

	include_once'header.php';
?>

	<!-- Page header section start -->
	<section class="page-header-section set-bg" data-setbg="img/header-bg.jpg">
		<div class="container">
			<h1 class="header-title">Portfolio<span>.</span></h1>
		</div>
	</section>
	<!-- Page header section end -->


<!-- this loop-1 is for images & category tables -->


	<!-- Page section start -->
	<div class="page-section spad">
		<div class="container">
			<!-- portfolio filter menu -->
			<ul class="portfolio-filter">
				<?php 
					while ($row = mysqli_fetch_array($cat)) {
				
				 ?>
				<li class="filter" data-filter="<?php echo $row["att"]; ?>"><?php echo $row["cat_name"]; ?></li>
				
				<?php
					}
				?>
			</ul>
	</div>
	</div>
	<!-- PROJECT 1 -->

		<!-- portfolio items -->
		
		<div class="portfolio-warp">
			<div id="portfolio">
				<div class="grid-sizer"></div>
				<?php while ($report = mysqli_fetch_array($img)) { ?>
				<!-- portfolio item -->
				<div class="grid-item set-bg <?php echo $report['cls']; ?>" data-setbg="<?php echo $report['file']; ?>"><a class="img-popup" href="<?php echo $report['file']; ?>"></a></div>
				<!-- portfolio item -->
					<?php
					}
				
				?>
			</div>
		</div>
		
	<!-- End of loop-1 -->



	<!-- this loop-2 is for dynamic tables -->

	<?php
while($rv = mysqli_fetch_array($res)) {
	$rm = $rv['tbName'];
	 
	$data = mysqli_query($conn,"SELECT uploaded.id, $rm.category, uploaded.file FROM uploaded INNER JOIN ON uploaded.cat_id=$rm.id");		
?>
<br>
<br>
<div>
	<h2 class="p-3" style="border: 5px solid;
  border-image-source: linear-gradient(45deg, rgb(0,143,104), rgb(250,224,66));
  border-image-slice: 1;
"><?php echo $rv["tbName"];?></h2>
</div>
	<!-- Page section start -->
	
	<div class="page-section spad">
		<div class="container">
			<!-- portfolio filter menu -->
			<ul class="portfolio-filter">
				
				<li class="filter" data-filter=""></li>
		

				
			</ul>
	</div>
	</div>
	<!-- PROJECT 2 -->
 
		<!-- portfolio items -->
		
		<div class="portfolio-warp">
			<div id="portfolio">
				
				
				<!-- portfolio item -->
				
					<div class="row">
						
							
						
				
					<div class="grid-item" >
					<?php
					
					while ($rz=mysqli_fetch_array($data)) {  
					?>
						<img src="<?php echo $rz['file'];?>">
					<?php
					}
					?>
				
					</div>
				
				
					


					</div>
				
				<!-- portfolio item -->
				
					
			</div>
		</div>
		
		
		<?php
	}
	?>
      <!-- End of loop-2 -->
		<br>
		<br>
	
	
	<!-- Page section end -->
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