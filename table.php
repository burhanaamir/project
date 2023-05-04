<?php
$con = mysqli_connect("localhost","root","","ebook");
session_start();
if(isset($_SESSION["name"])==null)
{

header("location:login.php");


}
else{

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DASHMIN - Bootstrap Admin Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

   <?php
   include "head.php";
   ?>
   <a href="website\index.php">GO TO SITE</a>
  
<table class="table table-bordered"> <h3>cards</h3>
<th>Id</th>
<th>Book Name</th>
<th>Book discription</th>
<th>Author Name</th>

<th>Book IMG</th>
<th>Book price</th>
<th>Shipping price</th>
<th>Update Action</th>
<th>Delete Action</th>
<?php

$qu = mysqli_query($con,"SELECT `id`, `bname`, `bdis`, `aname`, `img`, `bprice`, `sprice` FROM `card` ");

 while($row=mysqli_fetch_array($qu))
 {

 echo'
 <tr>
 <td>'.$row[0].'</td>
 <td>'.$row[1].'</td>
 <td>'.$row[2].'</td>
 <td>'.$row[3].'</td>
 <td>'.$row[4].'</td>
 <td>'.$row[5].'</td>
 <td>'.$row[6].'</td>
 <td><a href="update.php ?id='.$row[0].'"><input type="button" value="EDIT"class="btn btn-primary"></td>
 <td><a href="del.php ?id='.$row[0].'"><input type="button" value="DELETE"class="btn btn-danger"></td>
 </tr>

 ';

}


?>
<table class="table table-bordered"> <h3>Feature cards</h3>
<th>Id</th>
<th>Book Name</th>
<th>Book discription</th>
<th>Author Name</th>

<th>Book IMG</th>
<th>Book price</th>
<th>Shipping price</th>
<th>Update Action</th>
<th>Delete Action</th>
<?php

$qu = mysqli_query($con,"SELECT `id`, `bname`, `bdis`, `aname`, `img`, `bprice`, `sprice` FROM `featurecard` ");

 while($row=mysqli_fetch_array($qu))
 {

 echo'
 <tr>
 <td>'.$row[0].'</td>
 <td>'.$row[1].'</td>
 <td>'.$row[2].'</td>
 <td>'.$row[3].'</td>
 <td>'.$row[4].'</td>
 <td>'.$row[5].'</td>
 <td>'.$row[6].'</td>
 <td><a href="update2.php ?id='.$row[0].'"><input type="button" value="EDIT"class="btn btn-primary"></td>
 <td><a href="del2.php ?id='.$row[0].'"><input type="button" value="DELETE"class="btn btn-danger"></td>
 </tr>

 ';

}


?>
<table class="table table-bordered"><h3>Orders</h3>
<th>Id</th>
<th>Name</th>
<th>Email</th>
<th>Address</th>
<th>Number</th>
<th>Book Name</th>
<th>Payment Type</th>
<th>Amount</th>
<?php
$qu = mysqli_query($con,"SELECT `id`, `name`, `email`, `address`, `number`, `ordered`, `paytype`, `amount` FROM `order` ");

 while($row=mysqli_fetch_array($qu))
 {

 echo'
 <tr>
 <td>'.$row[0].'</td>
 <td>'.$row[1].'</td>
 <td>'.$row[2].'</td>
 <td>'.$row[3].'</td>
 <td>'.$row[4].'</td>
 <td>'.$row[5].'</td>
 <td>'.$row[6].'</td>
 <td>'.$row[7].'</td>
 <td><a href="# ?id='.$row[0].'"><input type="button" value="Confirm order"class="btn btn-primary"></td>
 </tr>

 ';

}
?>



<table class="table table-bordered"><h3>Messages</h3>
<th>Id</th>
<th>sender Name</th>
<th>Email</th>
<th>massage</th>
<?php

$qu = mysqli_query($con,"SELECT `id`, `name`, `email`, `message` FROM `contact` ");

 while($row=mysqli_fetch_array($qu))
 {

 echo'
 <tr>
 <td>'.$row[0].'</td>
 <td>'.$row[1].'</td>
 <td>'.$row[2].'</td>
 <td>'.$row[3].'</td>
 
 </tr>

 ';

}


?>







    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</table>
</table>
</table>
</body>
</html>

<?php
}
?>
