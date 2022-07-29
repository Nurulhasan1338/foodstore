<?php
include_once 'connection.php';

$name=$_POST['name'];
$pass=$_POST['password'];
$phone=$_POST['phone_number'];

$insert="INSERT INTO rasturant.customer (C_name,phone_num) VALUES ('$name','$phone')";
$result=mysqli_query($conn,$insert);

if($result){
    echo"successfull";
    header("location:client/client.php?customer=$name");
}
else{
echo"failed to insert";
}

?>
