
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
        background-image: url(../../assets/banner5.jpg);
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
    <div class="head">
<a href='client.php'>Menu</a>
        <a  class="active" href="special.php">Todays special</a>
        <a href="review.php?customer=$name">Reviews</a>
    </div>
</nav>
<div class='container mt-5'>
<h1 class='text-light p-3 w-50'>Todays Special</h1>
    <div class='row row-cols-2'>

<?php
include_once("../connection.php");
$cmd="select * from special";
$dishes=mysqli_query($conn,$cmd);
$rows=mysqli_num_rows($dishes);

for($i=0;$i<$rows;$i++){
    $info=mysqli_fetch_assoc($dishes);
    $id=$info['D_id'];
    $pname=$info['dish_name'];
    $price=$info['price'];
    $descrp=$info['des'];
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
</div>
";
?>
</body>
</html>

