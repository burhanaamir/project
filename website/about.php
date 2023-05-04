<?php
$con = mysqli_connect("localhost","root","","ebook");
session_start();
if(isset($_SESSION["name"])==null)
{

header("location:index.php");


}
else{

?>
<!DOCTYPE html>
	<html lang="en">
	<head>
		<title>Book Store</title>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <meta name="format-detection" content="telephone=no">
	    <meta name="apple-mobile-web-app-capable" content="yes">
	    <meta name="author" content="">
	    <meta name="keywords" content="">
	    <meta name="description" content="">

	    <link rel="stylesheet" type="text/css" href="css/normalize.css">
	    <link rel="stylesheet" type="text/css" href="icomoon/icomoon.css">
	    <link rel="stylesheet" type="text/css" href="css/vendor.css">
	    <link rel="stylesheet" type="text/css" href="style.css">

		<!-- script
		================================================== -->
		<script src="js/modernizr.js"></script>

	</head>

<body>
<?php
include "header.php";
?>
<div class="site-banner">
	<div class="banner-content">
		<div class="container">
			<div class="row">
				<div class="col-md-12">			
					<div class="colored">
						<h1 class="page-title">About Us</h1>
						<div class="breadcum-items">
							<span class="item"><a href="index.html">Home /</a></span>
							<span class="item colored">About Us</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div><!--site-banner-->

<section class="chief-detail padding-large">
	<div class="container">
		<div class="row">
			<div class="single-image col-md-12">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut cursus leo vel orci malesuada, id sodales em volutpat. Vivamus sagittis pulvinar dignissim. Mauris tempus a lacus eu aliquet. Mauris gravida at ectus quis venenatis. Aenean quis feugiat turpis. Etiam lacinia interdum nibh, non convallis magna lementum vel. Phasellus varius quam ligula, in lobortis risus porttitor ut. Praesent ipsum elit, lobortis n tincidunt a, dapibus et lorem. Praesent eget dui a est fringilla rutrum sit amet in eros. Vestibulum ut ros sed enim feugiat lobortis. Suspendisse fermentum nunc in est mattis molestie. Mauris ut placerat isus. Aenean mollis neque libero, ut pellentesque arcu dapibus vel.</p>
				<p>Praesent nec nisl euismod, lacinia tellus eget, bibendum ex. Maecenas imperdiet gravida pulvinar. aecenas feugiat id tellus sed sodales. Praesent maximus ultricies elit eget accumsan. Proin tortor ante, ltrices a aliquet a, facilisis quis sapien. Donec eu turpis at velit scelerisque faucibus id eget dolor. tiam lobortis ante ipsum, sed venenatis ligula facilisis quis. Fusce blandit commodo mauris, sed fringilla isi congue et. Nunc eu eros ex.</p>
				
			</div>
		</div>
	</div>
</section>

<section class="our-team bg-sand padding-large">
	<div class="container">
		<div class="row">
			
			<div class="col-md-12">
				<h2 class="section-title text-center mb-4">Our Team</h2>
			</div>

		</div>

		<div class="row">

			<div class="col-md-3">

				<div class="team-member text-center">
					
					<figure>
						<a href="#"><img src="images/team-member2.jpg" alt="post" class="member-image"></a>
					</figure>

					<div class="member-details text-center">
						<h4>Mrs. Nocole Sara</h4>
						<div class="designation colored">CEO-Founder</div>
						<div class="social-links color-primary ">
							<a href="#" class="icon icon-facebook pr-10"></a>
							<a href="#" class="icon icon-twitter pr-10"></a>
							<a href="#" class="icon icon-pinterest-p"></a>
						</div>
					</div>

				</div>

			</div><!--col-md-3-->

			<div class="col-md-3 text-center">

				<div class="team-member text-center">
					<figure>
						<img src="images/team-member5.jpg" alt="post" class="member-image">
					</figure>
					<div class="member-details text-center">
						<h4>Ms Sienna Jolie</h4>
						<div class="designation colored">General Manager</div>
						<div class="social-links color-primary">
							<a href="#" class="icon icon-facebook pr-10"></a>
							<a href="#" class="icon icon-twitter pr-10"></a>
							<a href="#" class="icon icon-pinterest-p"></a>
						</div>
					</div><!--text-content-->
				</div>

			</div><!--col-md-3-->

			<div class="col-md-3 text-center">

				<div class="team-member text-center">
					<figure>
						<img src="images/team-member7.jpg" alt="post" class="member-image">
					</figure>
					<div class="member-details text-center">
						<h4>Ms Jenny Blacksmith</h4>
						<div class="designation colored">Assistant Manager</div>
						<div class="social-links color-primary">
							<a href="#" class="icon icon-facebook pr-10"></a>
							<a href="#" class="icon icon-twitter pr-10"></a>
							<a href="#" class="icon icon-pinterest-p"></a>
						</div>
					</div><!--text-content-->
				</div>

			</div><!--col-md-3-->

			<div class="col-md-3 text-center">

				<div class="team-member text-center">
					<figure>
						<img src="images/team-member3.jpg" alt="post" class="member-image">
					</figure>
					<div class="member-details text-center">
						<h4>Mrs Lora Inn</h4>
						<div class="designation colored">Staff</div>
						<div class="social-links color-primary">
							<a href="#" class="icon icon-facebook pr-10"></a>
							<a href="#" class="icon icon-twitter pr-10"></a>
							<a href="#" class="icon icon-pinterest-p"></a>
						</div>
					</div><!--text-content-->
				</div>

			</div><!--col-md-3-->

		</div>
	</div>
</section>

<section class="padding-large">
	<div class="container">
		<h2 class="section-title text-center mt-5">Our Mission</h2>
		<div class="row">
			<div class="col-md-12">
				<img src="images/post-img3.jpg" alt="book-authors" class="align-right">
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste.
				</p>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste.
				</p>
			
			</div>

		</div>
	</div>
</section>

<?php
include "footer.php";
?>

<script src="js/jquery-1.11.0.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/script.js"></script>
<?php
}
?>
</body>
</html>	