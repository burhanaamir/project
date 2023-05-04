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


<section>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1 class="page-title">Contact us</h1>
				<div class="breadcrumbs">
					<span class="item"><a href="index.html">Home /</a></span>
					<span class="item">Contact us</span>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="contact-information padding-large mt-3">
	<div class="container">
		<div class="row">
			<div class="col-md-6 p-0 mb-3">
				
				<h2>Get in Touch</h2>

				<div class="contact-detail d-flex flex-wrap mt-4">
					<div class="detail mr-6 mb-4">
						<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						<ul class="list-unstyled list-icon">
							<li><i class="icon icon-phone"></i>+1650-243-0000</li>
							<li><i class="icon icon-envelope-o"></i><a href="mailto:info@yourcompany.com">info@yourcompany.com</a></li>
							<li><i class="icon icon-location2"></i>North Melbourne VIC 3051, Australia</li>
						</ul>
					</div><!--detail-->
					<div class="detail mb-4">
						<h3>Social Links</h3>
						<div class="social-links flex-container">
							<a href="#" class="icon icon-facebook"></a>
							<a href="#" class="icon icon-twitter"></a>
							<a href="#" class="icon icon-pinterest-p"></a>
							<a href="#" class="icon icon-youtube"></a>
							<a href="#" class="icon icon-linkedin"></a>
						</div><!--social-links-->
					</div><!--detail-->

				</div><!--contact-detail-->
			</div><!--col-md-6-->

			<div class="col-md-6 p-0">
				
				<div class="contact-information">
					<h2>Send A Message</h2>
					<form name="contactform" method="post" class="contact-form d-flex flex-wrap mt-4">
						<div class="row">
					    	<div class="col-md-6">
								<input type="text" minlength="2" name="name" placeholder="Name" class="u-full-width" name="name" required >
							</div>
							<div class="col-md-6">
								<input type="email" name="email" placeholder="E-mail" class="u-full-width" name="email" required>
							</div>
						</div>

						<div class="row">
							<div class="col-md-12">

								<textarea class="u-full-width" name="message" placeholder="Message" style="height: 150px;" required ></textarea>

								

								<button type="submit" name="submit" class="btn btn-full btn-rounded">Submit</button>
							</div>
						</div>
					</form>

				</div><!--contact-information-->

			</div><!--col-md-6-->

		</div>
	</div>
</section>

<section class="google-map">
	<div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=2880%20Broadway,%20New%20York&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://getasearch.com/fmovies"></a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:100%;}</style><a href="https://www.embedgooglemap.net">embedgooglemap.net</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:100%;}</style></div></div>
</section>

<?php
include "footer.php";
?>

<?php
if(isset($_POST['submit']))
{

	


    $name = $_POST['name'];
    $email = $_POST['email'];
    $mass = $_POST['message'];
    $insert = mysqli_query($con, "INSERT INTO `contact`(`id`, `name`, `email`, `message`) VALUES ('','$name','$email','$mass')");
if($insert)
{
    echo'<script>alert("massage sent")</script>';
}
}


?>

<script src="js/jquery-1.11.0.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/script.js"></script>
<?php
}
?>
</body>
</html>	