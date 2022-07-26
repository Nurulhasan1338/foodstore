<?php
include_once('../connection.php');

$name=$_POST["dish"];
$price=$_POST["price"];
$descrip=$_POST["des"];
$img=$_FILES["dimg"];

$img_name="uplodedImg/$name.jpg";
move_uploaded_file($img['tmp_name'],$img_name);


$query_status= mysqli_query($conn,"INSERT INTO menu (dish_name,price,description,img)
VALUES ('$name','$price','$descrip','$img_name')");

if($query_status){
header("location:admin.php");
}

else{
echo"<br>failed";
}

?>