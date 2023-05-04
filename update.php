<?php
$con = mysqli_connect("localhost","root","","ebook");
if(isset($_GET['id']))
    {
    
    $id = $_GET['id'];
    
    $qu = mysqli_query($con,"select * from card where id='$id'");
    
    $row = mysqli_fetch_array($qu);
    
    
    }

session_start();
if(isset($_SESSION["name"])==null)
{

header("location:login.php");

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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


<!-- Form Start -->
<div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Book Info</h6>
                            <form method="post" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Book name</label>
                                    <input type="text" class="form-control" id="bookname"
                                        aria-describedby="emailHelp" name="bname" value="<?php echo $row[1]   ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Book Description</label>
                                    <input type="text" class="form-control" id="book description"name="bdis" value="<?php echo $row[2]   ?>">
                                </div>
                                
    
                            
                        </div>
                    </div>
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Author Info</h6>
                       
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Author Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="Author Name" name="aname" value="<?php echo $row[3]   ?>">
                                    </div>
                                </div>
                                <div class="row mb-3">

                                    
                                </div>
    
                            
                        </div>
                    </div>
                    <div class="col-sm-12 col-xl-6">
                        
                           
                                <div class="form-floating mb-3">
                                
                        </div>
</div>
</div>
                    </div>
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Book image</h6>
                            
                            <div>
                              
                                <input class="form-control form-control-lg" type="file" name="img" value="<?php echo $row[4]   ?>">
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">PRICING</h6>
                            
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="Location"
                                    placeholder="name@example.com" name="bprice" value="<?php echo $row[5]   ?>">
                                <label for="floatingInput">Book price</label>
</div>
<div class="form-floating mb-3">
                                <input type="text" class="form-control" id="Location"
                                    placeholder="name@example.com" name="sprice" value="<?php echo $row[6]   ?>">
                                <label for="floatingInput">Shipping price</label>
</div>
                           
                        </div>
                    </div>
                    <center><input type="submit" name="btnupd" class="btn btn-primary rounded-pill m-2" value="EDIT"></center>
                    </form>
            <!-- Form End -->


<?php
include "footer.php";

?>
<?php
if(isset($_POST['btnupd']))
{

    $img = $_FILES['img']["name"];
    $imgtemplocation = $_FILES['img']["tmp_name"];
    $s=move_uploaded_file($imgtemplocation,"cardimgf/".$img);
           $bname = $_POST["bname"];
           $bdis = $_POST["bdis"];
           $aname= $_POST["aname"];
           $bprice = $_POST["bprice"];
           $sprice = $_POST["sprice"];
           
$qu = mysqli_query($con,"update card set `bname`='$bname',`bdis`='$bdis',`aname`='$aname',`img`='$img',`bprice`='$bprice',`sprice`='$sprice' where id='$id'");
if($qu)
{

    echo'<script>alert("Data Updated");</script>';

    header("location:table.php");
}
else{

    echo'<script>alert("Data Not Updated");</script>';

}

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
    <?php
    
    if(isset($_POST["cardsub"]))
    {
        $img = $_FILES['img']["name"];
$imgtemplocation = $_FILES['img']["tmp_name"];
$s=move_uploaded_file($imgtemplocation,"cardimgf/".$img);
       $bname = $_POST["bname"];
       $bdis = $_POST["bdis"];
       $aname= $_POST["aname"];
       $aauth = $_POST["aauth"];
       $sloca = $_POST["sloca"];
       $connum = $_POST["connum"];
       $email = $_POST["email"];
       $bprice = $_POST["bprice"];
       $sprice = $_POST["sprice"];
       

        $insert = mysqli_query($con, "INSERT INTO `card`(`id`, `bname`, `bdis`, `aname`, `aauth`, `sloca`, `connum`, `email`, `img`, `bprice`, `sprice`) VALUES ('','$bname','$bdis','$aname','$aauth ',' $sloca','$connum','$email','$img','$bprice','$sprice')");
       if($insert > 0){
        echo "data inserted";  
       }else{
           echo "data not inserted";
       }
    }

    ?>
    
</body>
</html>
