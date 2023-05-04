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
<style>
		body {
		
			background-color: #f2f2f2;
		}

		h1 {
			text-align: center;
			margin-top: 50px;
		}

		
		.container-fluid {
			width: 80%;
			margin: 0 auto;
			background-color: #fff;
			padding: 20px;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
		}

		form {
			display: flex;
			flex-direction: column;
			align-items: center;
			margin: 20px;
		}

		input[type=text], select, textarea {
			width: 100%;
			padding: 12px;
			border: 1px solid #ccc;
			border-radius: 4px;
			resize: vertical;
		}

		input[type=submit] {
			background-color: #4CAF50;
			color: #fff;
			padding: 12px 20px;
			border: none;
			border-radius: 4px;
			cursor: pointer;
		}

		input[type=submit]:hover {
			background-color: #45a049;
		}
		#structure{
			color:black;
			text-align: center;
			margin-top: 50px;
			text-decoration: underline;
			font-weight: 700;
		}

	</style>
<body>
<?php include 'header.php'; ?>
 
<h1>International Essay Writing Competition</h1>

	<div class="container-fluid">
		<p id="structure">Enter the competition by filling out the form below:</p>

		<form action="#">
			<label for="name">Name</label>
			<input type="text" id="name" name="name" placeholder="Your name...">

			<label for="email">Email</label>
			<input type="text" id="email" name="email" placeholder="Your email...">

			<label for="country">Country</label>
			<select id="country" name="country">
				<option value="USA">USA</option>
				<option value="Canada">Canada</option>
				<option value="UK">UK</option>
				<option value="Australia">Australia</option>
				<option value="New Zealand">New Zealand</option>
			</select>

			<label for="essay"> Attach Your Essay Here</label>
			<input class="form-control form-control-lg" type="file" name="img">

			<input type="submit" value="Submit">
		</form>
	</div>

<br>
	<div class="container-fluid">
		<H1>Your Essay Should Have The Following Structure</H1>
  <div class="row row-cols-2">
    <div class="col" id="structure">THEME</div>
    <div class="col">“Youth Creating a Peaceful Future”
What does a peaceful world look like to you? How can young people work together, using creative ideas and approaches to realize a peaceful future? Please share your specific ideas.</div>
<div class="col" id="structure">GUIDELINES</div>
    <div class="col">Essays may be submitted by anyone up to 25 years old (as of June 15, 2023) in one of the following age categories: a) Children (ages up to 14) 　b) Youth (ages 15 - 25) <br>
	Essays must be 700 words or less in English or French, or 1600 characters or less in Japanese. Essays must be typed, with your name and essay title included at the top of the first page. <br>

There are no particular rules regarding formatting (font style, size, line space, etc.). However, essays must be submitted in either MS Word (DOC/DOCX) or PDF format. <br>

 Your name and essay title are not included in the word count limit.
Essays must be original and unpublished. Plagiarized entries will be rejected.
	</div>
	<div class="col" id="structure">DEADLINE</div>
    <div class="col">Entries must be received by June 15, 2023 (23:59 your local time).</div>
  </div>
  <div class="col" id="structure">AWARDS</div>
    <div class="col">The following awards will be given in the Children’s category and Youth category respectively: <br>
1st Prize: Certificate, prize of 100,000 Yen (approx. US$740 as of Feb. 2023) and gift ... 1 entrant <br>
2nd Prize: Certificate, prize of 50,000 Yen (approx. US$370 as of Feb. 2023) and gift ... 3 entrants <br>
3rd Prize: Certificate and gift ... 5 entrants <br>
Honorable Mention: Certificate and gift ... 25 entrants</div>
</div>
	<div class="container">
		

		
	</div>
<?php include 'footer.php'; ?>
<script src="js/jquery-1.11.0.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/script.js"></script>

</body>
</html>
<?php
}
?>