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

<section class="padding-large">
	<div class="container">
		<div class="row">

			<div class="products-grid grid">
        <?php
      $sel= mysqli_query( $con,"SELECT `id`, `bname`, `bdis`, `aname`, `img`, `bprice`, `sprice` FROM `card`");
    while($a = mysqli_fetch_array($sel)){
        echo '
        <figure class="product-style">
        <img src="cardimgf/'. $a[4] .'" alt="Books" class="product-item">
        <a href="checkout.php ?id='.$a[0].'"><button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to Cart</button></a>
        <figcaption>
          <h3>'.$a[1].'</h3>
          <h3>'.$a[3].'</h3>
          <p>'.$a[2].'</p>
          
          <div class="item-price">PKR '.$a[5].'</div>
        </figcaption>
      </figure>
        ';
    }
			  	?>
    </div>
    </div>
    </div>
    </Section>
    <?php
    include "footer.php";
    ?>
    <?php
}
    ?>
</body>
</html>