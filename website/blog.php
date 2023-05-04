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

<section class="hero-section jarallax">
	
	<div class="container">
		<div class="row">
			<div class="col-md-12">			
				<h1 class="page-title">Our Blog</h1>
				<div class="breadcrumbs">
					<span class="item"><a href="index.html">Home /</a></span>
					<span class="item">Our Blog</span>
				</div>
			</div>
		</div>
	</div>

</section>

<section id="latest-blog" class="scrollspy-section padding-large">
	<div class="container">
		
		<div class="row">
			<div class="col-md-12">
				
				<!-- post grid -->
				<div class="post-grid">
					<div class="row">
						
						<div class="col-md-4">
							
							<article class="post-item">

								<figure>
									<a href="#" class="image-hvr-effect">
										<img src="images/post-img1.jpg" alt="post" class="post-image">			
									</a>
								</figure>

								<div class="post-content">	
									<div class="meta-date">Mar 30, 2021</div>			
								    <h3 class="post-title"><a href="#">modern vibes bedrooms, todays trending design</a></h3>
								    <p>Lectus molestie id enim ipsum. Netus sed cursus nibh iaculis ipsum turpis nulla blandit dui.</p>
								</div>
							</article>

						</div>

						<div class="col-md-4">

							<article class="post-item">
								<figure>
									<a href="#" class="image-hvr-effect">
										<img src="images/post-img2.jpg" alt="post" class="post-image">
									</a>
								</figure>
								<div class="post-content">	
									<div class="meta-date">Mar 29, 2021</div>			
								    <h3 class="post-title"><a href="#">How to make minimalist living rooms pop-out</a></h3>
								    <p>Lectus molestie id enim ipsum. Netus sed cursus nibh iaculis ipsum turpis nulla blandit dui.</p>
								</div>
							</article>
						</div>

						<div class="col-md-4">
							<article class="post-item">
								<figure>
									<a href="#" class="image-hvr-effect">
										<img src="images/post-img3.jpg" alt="post" class="post-image">
									</a>
								</figure>
								<div class="post-content">		
									<div class="meta-date">Mar 27, 2021</div>			
								    <h3 class="post-title"><a href="#">how to make your resort that looks outstanding</a></h3>
								    <p>Lectus molestie id enim ipsum. Netus sed cursus nibh iaculis ipsum turpis nulla blandit dui.</p>
								</div>
							</article>
						</div>

					</div>
				</div>
				<!-- / post grid -->

			</div>

		</div>

		<div class="row">
			<div class="col-md-12">
				
				<div class="post-grid">
					<div class="row">
						
						<div class="col-md-4">
							
							<article class="post-item">

								<figure>
									<a href="#" class="image-hvr-effect">
										<img src="images/post-img1.jpg" alt="post" class="post-image">			
									</a>
								</figure>

								<div class="post-content">	
									<div class="meta-date">Mar 30, 2021</div>			
								    <h3 class="post-title"><a href="#">modern vibes bedrooms, todays trending design</a></h3>
								    <p>Lectus molestie id enim ipsum. Netus sed cursus nibh iaculis ipsum turpis nulla blandit dui.</p>
								</div>
							</article>

						</div>

						<div class="col-md-4">

							<article class="post-item">
								<figure>
									<a href="#" class="image-hvr-effect">
										<img src="images/post-img2.jpg" alt="post" class="post-image">
									</a>
								</figure>
								<div class="post-content">	
									<div class="meta-date">Mar 29, 2021</div>			
								    <h3 class="post-title"><a href="#">How to make minimalist living rooms pop-out</a></h3>
								    <p>Lectus molestie id enim ipsum. Netus sed cursus nibh iaculis ipsum turpis nulla blandit dui.</p>
								</div>
							</article>
						</div>

						<div class="col-md-4">
							<article class="post-item">
								<figure>
									<a href="#" class="image-hvr-effect">
										<img src="images/post-img3.jpg" alt="post" class="post-image">
									</a>
								</figure>
								<div class="post-content">		
									<div class="meta-date">Mar 27, 2021</div>			
								    <h3 class="post-title"><a href="#">how to make your resort that looks outstanding</a></h3>
								    <p>Lectus molestie id enim ipsum. Netus sed cursus nibh iaculis ipsum turpis nulla blandit dui.</p>
								</div>
							</article>
						</div>

					</div>
				</div>

			</div>

		</div>


		<div class="row">
			<div class="col-md-12">
				
				<div class="post-grid">
					<div class="row">
						
						<div class="col-md-4">
							
							<article class="post-item">

								<figure>
									<a href="#" class="image-hvr-effect">
										<img src="images/post-img1.jpg" alt="post" class="post-image">			
									</a>
								</figure>

								<div class="post-content">	
									<div class="meta-date">Mar 30, 2021</div>			
								    <h3 class="post-title"><a href="#">modern vibes bedrooms, todays trending design</a></h3>
								    <p>Lectus molestie id enim ipsum. Netus sed cursus nibh iaculis ipsum turpis nulla blandit dui.</p>
								</div>
							</article>

						</div>

						<div class="col-md-4">

							<article class="post-item">
								<figure>
									<a href="#" class="image-hvr-effect">
										<img src="images/post-img2.jpg" alt="post" class="post-image">
									</a>
								</figure>
								<div class="post-content">	
									<div class="meta-date">Mar 29, 2021</div>			
								    <h3 class="post-title"><a href="#">How to make minimalist living rooms pop-out</a></h3>
								    <p>Lectus molestie id enim ipsum. Netus sed cursus nibh iaculis ipsum turpis nulla blandit dui.</p>
								</div>
							</article>
						</div>

						<div class="col-md-4">
							<article class="post-item">
								<figure>
									<a href="#" class="image-hvr-effect">
										<img src="images/post-img3.jpg" alt="post" class="post-image">
									</a>
								</figure>
								<div class="post-content">		
									<div class="meta-date">Mar 27, 2021</div>			
								    <h3 class="post-title"><a href="#">how to make your resort that looks outstanding</a></h3>
								    <p>Lectus molestie id enim ipsum. Netus sed cursus nibh iaculis ipsum turpis nulla blandit dui.</p>
								</div>
							</article>
						</div>

					</div>
				</div>

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