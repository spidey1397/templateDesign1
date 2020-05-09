<?php


include_once 'connection.php';
$cat = mysqli_query($conn, "SELECT * FROM category");
$img = mysqli_query($conn, "SELECT * FROM images");
$result = mysqli_query($conn, "SELECT * FROM tables");





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
while($rs = mysqli_fetch_array($result)) {
$rp = $rs['tbName'];		
?>
<br>
<br>
<div>
	<h2 class="p-3" style="background: #092756;
 background: -moz-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%),-moz-linear-gradient(top, rgba(57,173,219,.25) 0%, rgba(42,60,87,.4) 100%), -moz-linear-gradient(-45deg, #670d10 0%, #092756 100%);
 background: -webkit-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), -webkit-linear-gradient(top, rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), -webkit-linear-gradient(-45deg, #670d10 0%,#092756 100%);
 background: -o-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), -o-linear-gradient(top, rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), -o-linear-gradient(-45deg, #670d10 0%,#092756 100%);
 background: -ms-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), -ms-linear-gradient(top, rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), -ms-linear-gradient(-45deg, #670d10 0%,#092756 100%);
 background: -webkit-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), linear-gradient(to bottom, rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), linear-gradient(135deg, #670d10 0%,#092756 100%); color: #fff;"><?php echo $rs["tbName"];?></h2>
</div>
	<!-- Page section start -->
	<?php 
		$record = mysqli_query($conn,"SELECT * FROM $rp");
		
		while ($report = mysqli_fetch_array($record)) { 
	?>
	<div class="page-section spad">
		<div class="container">
			<!-- portfolio filter menu -->
			<ul class="portfolio-filter">
				
				<li class="filter" data-filter=""><?php echo $report["cat_id"]; ?></li>
				
				
			</ul>
	</div>
	</div>
	<!-- PROJECT 2 -->
 
		<!-- portfolio items -->
		
		<div class="portfolio-warp">
			<div id="portfolio">
				<div class="grid-sizer"></div>
				
				<!-- portfolio item -->
				<div class="grid-item set-bg <?php echo $report['cls']; ?>"><img src="<?php echo $report['file'];?>	"> </div>
				<!-- portfolio item -->
					
			</div>
		</div>
		<?php
					}
				
				?>
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