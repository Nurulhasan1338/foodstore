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
            overflow:hidden;
        background-image: url(../../assets/banner2.jpg);
        background-size: cover;
        background-repeat: no-repeat;
        width: 100%;
        min-height:100vh; 
        background-attachment: fixed;
      }
.list-group-flush {
    height: 25rem;
    overflow: scroll;
    overflow-x:hidden;

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
        <a href="admin.php">Menu</a>
        <a href="add_dish.html">Add Dish</a>
        <a href="special.php">Todays special</a>
        <a class="active" href="review.php">Reviews</a>
    </div>
</nav>
<div class="my-5 mx-3 p-2 border rounded p-3 shadow mystyl">

            <p class="fs-3 text-light border-bottom">Customers Experience</p> 
            <ul class="list-group list-group-flush">
                <?php
                include_once("../connection.php");
                $query=mysqli_query($conn,"SELECT * FROM `review` ORDER BY `review`.`r_id` DESC");
                $rows=mysqli_num_rows($query);
                for($i=0;$i<$rows;$i++){
                $info=mysqli_fetch_assoc($query);
                $id=$info['r_id'];
                $name=$info['name'];
                $descrp=$info['review'];
                $time=$info['time'];
                echo"
                <li class='list-group-item pb-2 border rounded'>
                <div class='row'>
                <div class='col-10'>
                <h5 class='card-title'>$name</h5>
                <p class='card-subtitle mb-2 text-muted'>$time</p>
                <p class='card-text'>$descrp</p>   
                </div>
                <div class='col-2'>
                <a href='deleter.php?id=$id' class='btn btn-danger'><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash' viewBox='0 0 16 16'>
                <path d='M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z'/>
                <path fill-rule='evenodd' d='M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z'/>
              </svg></i></a>
                </div>
                </div>
                </li> ";
                }
                ?>
                </ul>
        

</div>
</body>
</html>