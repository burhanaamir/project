<?php
$con = mysqli_connect("localhost","root","","ebook");
if(isset($_GET['id']))
    {
    
    $id = $_GET['id'];
    
    $qu = mysqli_query($con,"select * from card where id='$id'");
    
    $a = mysqli_fetch_array($qu);
    
    
    }
    ?>
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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
   html, body{
  width: 100%;
  height: 100%;
  margin: 0;
  padding: 0;
  font-family: 'Open Sans', sans-serif;
  color: #231F20;
  background-color: #F2F2F1;
}

a{
  text-decoration: none;
}

p, li, a{
  font-size: 14px;
  line-height: 160%;
}

input, select{
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  outline: none;
}

select::-ms-expand { /* for IE 11 */
    display: none;
}

h1, h2, h3, h4, h5, h6{
  font-weight: 200;
  position: relative;
  margin-bottom: 40px;
}

/* GRID */

.twelve { width: 100%; }
.eleven { width: 91.53%; }
.ten { width: 83.06%; }
.nine { width: 74.6%; }
.eight { width: 66.13%; }
.seven { width: 57.66%; }
.six { width: 49.2%; }
.five { width: 40.73%; }
.four { width: 32.26%; }
.three { width: 23.8%; }
.two { width: 15.33%; }
.one { width: 6.866%; }

/* COLUMNS */

.col {
  display: block;
  float:left;
  margin: 1% 0 1% 1.6%;
}

.col:first-of-type {
  margin-left: 0;
}

.container{
  width: 100%;
  max-width: 940px;
  margin: 0 auto;
  position: relative;
}

/* CLEARFIX */

.cf:before,
.cf:after {
    content: " ";
    display: table;
}

.cf:after {
    clear: both;
}

.cf {
    *zoom: 1;
}

/* FORM */

.form-wrapper{
  margin: 50px auto;
  padding: 20px 10px;
  background: linear-gradient(to right, #fff 40.73%, 
  #f5deb0
 40.83%);
  position: relative;
  overflow: hidden;
  color: #2c3e50;
}

.form-wrapper h2:after{
  content: "";
  position: absolute;
  left: 0;
  bottom: -12px;
  width: 30px;
  height: 2px;
  background-color: #2c3e50;
}

.five img{
  width: 45%;
  height: auto;
  margin: 50px auto 30px auto;
  display: block;
}

.five .item, .five .price{
  text-align: center;
  margin: 5px auto;
}

form, .title{
  width: 100%;
  height:100%;
 
}

/* form{
  margin-top: 20%;
} */

input{
  border: none;
  border-bottom: 1px solid #fff;
  background-color: transparent;
  padding: 10px 0px;
  display: block;
  margin: 15px auto;
  width: 100%;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  color: #fff;
  font-size: 14px;
  font-family: 'Open Sans', sans-serif;
}

.edate{
  margin-top: 20px;
}

.edate p{
  color: #fff;
  font-size: 12px;
}

select{
  background: transparent;
  border: none;
  font-size: 12px;
  font-family: 'Open Sans', sans-serif;
  padding: 5px;
  width: 30%;
  color: #fff;
  background-color: #2c3e50;
  outline: none;
}

.select-wrapper{
  position: relative;
  display: inline;
  margin-right: 30px;
}

.select-wrapper:before{
  content: 'v';
  font-family: 'Open Sans', sans-serif;
  color: #fff;
  display: inline-block;
  position: absolute;
  right: 0px;
  top: 4px;
  pointer-events: none;
  font-size: 12px;
}

option{
  background: #fff;
  color: #2c3e50;
}

::-webkit-input-placeholder{
  color: #fff;
  font-size: 12px;
}
::-moz-placeholder{
  color: #fff;
  font-size: 12px;
}
:-ms-input-placeholder{
  color: #fff;
  font-size: 12px;
}
:-moz-placeholder{
  color: #fff;
  font-size: 12px;
}

.submit-wrapper{
  text-align: right;
}

input.submit{
  border: 1px solid #fff;
  color: #fff;
  display: inline-block;
  width: auto;
  cursor: pointer;
  padding: 8px 20px;
  margin: 30px 0;
  font-size: 12px;
  -webkit-transition: all 0.5s ease-in-out;
  -o-transition: all 0.5s ease-in-out;
  transition: all 0.5s ease-in-out;
}

input.submit:hover{
  background-color: #fff;
  color: #a3d158;
}
</style>
<body>
    <?php
include 'header.php';?>
<div class="container">
    <div class="form-wrapper cf">
      <div class="five col">
        <div class="title">
         
          <img src="bookcheck.jpg" >
        </div>
      </div>
      <div class="seven col">
      <center><h2 style="color:black;">Checkout</h2></center>
        <form class="form" method="post">
          <input type="text" name="name" id="fname" placeholder=" First Name" style="color:black;" >
          <input type="text" name="email" id="lname" placeholder="Email" style="color:black;">
          <input type="text" name="add" id="add" placeholder="Address" style="color:black;" >
          <input type="tel" name="contact" id="contact" placeholder="Contact Number" style="color:black;" >
           <label for="cars" style="color:black;"><?php echo $a[1]   ?></label>
           <label for="cars" style="color:black;">Total=PKR <?php echo $a[5]   ?></label>
            <div class="select-wrapper">
            <label for="cars" style="color:black;">Select Payment Method</label>
              <select style="color:black;" name="payment">
                <option>Cash On Delivery</option>
              </select>
            </div>
          </div>
          <div class="submit-wrapper">
            <input class="submit" type="submit" value="Buy Now" name="order">
          </div>
        </form>
      </div>
    </div>
  </div>
  <?php
include 'footer.php';
?>
<?php
    
if(isset($_POST["order"]))
{
   $fname = $_POST["name"];
   $email = $_POST["email"];
   $add= $_POST["add"];
   $contact = $_POST["contact"];
   $cod = $_POST["payment"];
   
   

    $insert = mysqli_query($con, "INSERT INTO `order`(`id`, `name`, `email`, `address`, `number`, `ordered`, `paytype`, `amount`) VALUES ('','$fname','$email','$add','$contact','$a[1]','$cod','$a[5]')");
   if($insert > 0){
    echo'<script>alert("Order Place")</script>'; 
   }else{
    echo'<script>alert("Order Not Place")</script>';
   }
}


?>
<?php
}
?>
</body>
</html>