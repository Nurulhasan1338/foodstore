
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
    <!-- JavaScript Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
      crossorigin="anonymous"
    ></script>
    <title>Happy Meal-menu</title>
    <style>
      body{
        background-image: url(../../assets/banner.jpg);
        background-size: cover;
        background-repeat: no-repeat;
        width: 100%;
        height: 100vh;
        position: fixed;
      }
    </style>
</head>
<body>
<nav>
    <div class="head ">
        <a href="admin.php">Menu</a>
        <a href="add_dish.html">Add Dish</a>
        <a  class="active" href="special.php">Todays special</a>
        <a href="review.php">Reviews</a>
    </div>
</nav>
<div class='container mt-5'>
<h1 class='text-light'>Todays Special</h1>
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
    <img src=$img class='w-100' alt=''>
    <div class='d-flex align-items-end text-light card-body vh-25 top-0 '>
    <div class='ca'>
      <h5 class='card-title'>$pname</h5>
      <h6>$price rs</h6>
      <p class='card-text'>$descrp</p>
      
      <a href='addspecial.php?id=$id' class='btn btn-transparant border-success text-success mx-2 mybtg'>add to special</a>
      <a href='delete.php?id=$id' class='btn btn-transparant border-danger text-danger mx-2 mybtr'>Remove</a>
      <a href='edit.php?id?$id' class='btn btn-transparant border-info text-info mx-2 mybti'>Edit</a>
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

