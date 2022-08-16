<?php

$conn = mysqli_connect("localhost","root","","info");

$id= $_POST['id'];
$district = $_POST['district'];
$active = $_POST['active'];

$sql = "INSERT INTO `district`(`id`, `district`, `active`)
VALUES ('$id','$district','$active')";
$insert = mysqli_query($conn, $sql);

if(!$insert ){
    echo "error";

}
else{
    header("Location: /PHPProject/district/view.php");
}


?>