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
    <title>Happy Meal-menu</title>
</head>
<body>

          <!-- Nav Bar -->
<nav>
    <div class='head'>
        <a  href='client.php'>Menu</a>
        <a href='special.php'>Todays special</a>
        <a  class='active' href='review.php'>Reviews</a>
    </div>
</nav>

            <!-- review Box -->

<div class="my-5 mx-3 p-2 row">

        <div class="col-9">
                <div class="border rounded p-3 shadow">
                    <p class="fs-3 text-light border-bottom w-100 ">Customers Experience</p> 
                    <ul class="list-group list-group-flush">
                        <?php
                        include_once("../connection.php");
                        $query=mysqli_query($conn,"SELECT * FROM `review` ORDER BY `review`.`r_id` DESC");
                        $rows=mysqli_num_rows($query);

                        for($i=0;$i<$rows;$i++){
                            $info=mysqli_fetch_assoc($query);
                            $name=$info['name'];
                            $descrp=$info['review'];
                            $time=$info['time'];
                            echo"
                        <li class='list-group-item'>
                        <div class='ab'>
                        <h5 class='card-title'>$name</h5>
                        <p class='card-subtitle mb-2 text-muted'>$time</p>
                        <p class='card-text'>$descrp</p>   
                        </div>
                        </li>";
                        }
                        ?>
                        </ul>
                </div>
        </div>

            <!-- Form box -->

       <div class="col-3">
            <div class="border rounded p-3">
                <p class="fs-5 text-light">Share your Experience...</p>
                <form action="review1.php" method="POST">
                    <div class="mb-3">
                        <input type="text" class="form-control" name="name" id="exampleFormControlInput1"  value="unknown" placeholder="Enter your Name" require>
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control" name="comments"  id="exampleFormControlTextarea1"  placeholder="Your comments" rows="3" require>Food is amazing value for mmoney</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>    
            </div>
        </div>
   
</div>
</body>
</html>