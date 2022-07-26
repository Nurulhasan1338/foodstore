<?php
include_once("../connection.php");
if($conn->connect_error){
        echo"failed<br>";
    }
    else{
        echo"successful<br>";
    }
    $id=$_GET['id'];
    $cmd="select * from menu where D_id=$id";
    $data=mysqli_query($conn,$cmd);

    if($data){
      $info=mysqli_fetch_assoc($data);
      $id=$info['D_id'];
      $pname=$info['dish_name'];
      $price=$info['price'];
      $descrp=$info['description'];
      $img=$info['img'];
      
    $insert = "INSERT INTO `special` (`dish_name`, `type`, `des`, `price`, `D_id`, `img`) VALUES ('$pname', 'de', '$descrp', '$price', '$id', '$img')";

    $query_status= mysqli_query($conn,$insert);

if($query_status){

  header('location:admin.php');
  }

else{
echo"<br>failed in inserting";
}

}
else{
    echo"<br>failed";
}
?>