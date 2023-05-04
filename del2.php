<?php
$con = mysqli_connect("localhost","root","","ebook");

if(isset($_GET['id']))
{

$id = $_GET['id'];

$qu = mysqli_query($con,"select * from featurecard where id='$id'");

$row = mysqli_fetch_array($qu);


}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css.css">
</head>
<body>

<?php



$qu = mysqli_query($con,"DELETE FROM `featurecard` WHERE id='$id'");
if($qu)
{
    header("location:table.php");
}
else{

    echo'<script>alert("Data Not Updated");</script>';

}







?>

    
</body>
</html>