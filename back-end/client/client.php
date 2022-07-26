

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../client.css">
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx"
      crossorigin="anonymous"
    />
    <style>
      body{
        background-image: url(../../assets/banner3.jpg);
        background-size: cover;
        background-repeat: no-repeat;
        width: 100%;
        min-height:100vh; 
        background-attachment: fixed;
      }
    </style>
    <!-- JavaScript Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
      crossorigin="anonymous"
    ></script>
    <title>Happy Meal-menu</title>
</head>
<body>
<nav>

    <div class='head'>
        <a  class='active' href='client.php'>Menu</a>
        <a href='special.php'>Todays special</a>
        <a href='review.php'>Reviews</a>
    </div>

</nav>
</body>
</html>


<?php

echo"<h1 class='header text-light mx-3'>welcome to Happy Meal</h1>";

echo"
<div class='container mt-5'>
 <div class='row row-cols-2'>
";
include_once('../connection.php');

$cmd="select * from menu";
$dishes=mysqli_query($conn,$cmd);
$rows=mysqli_num_rows($dishes);

for($i=0;$i<$rows;$i++){
    $info=mysqli_fetch_assoc($dishes);
    $id=$info['D_id'];
    $pname=$info['dish_name'];
    $price=$info['price'];
    $descrp=$info['description'];
    $img=$info['img'];
    echo"
    <div class='col mt-4'>
    <div class='card rounded'>
    <img src=../admin/$img class='w-100' alt=''>
    <div class='d-flex align-items-end text-light card-body vh-25 top-0 '>
    <div class='ca'>
      <h5 class='card-title'>$pname</h5>
      <h6>$price rs</h6>
      <p class='card-text'>$descrp</p>
      
      <a href='addspecial.php?id=$id' class='btn btn-transparant border-warning text-warning mx-2 mybtg'>add to Cart</a>
    </div>
    </div>
    </div>
</div>
    ";
}

echo"
</div>
</div>
";
?>