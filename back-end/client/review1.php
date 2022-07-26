
<?php
include_once("../connection.php");
$name=$_POST["name"];
$comment=$_POST["comments"];

$query_status= mysqli_query($conn,"INSERT INTO `review` (`review`, `name`) VALUES ('$comment','$name');");

if($query_status){
header("location:review.php");
}

else{
echo"<br>failed";
}
?>