<?php

$conn = mysqli_connect("localhost","root","","info");

$id = $_POST['id'];
$category = $_POST['category'];

$sql = "INSERT INTO `item_category`(`id`, `category`)
VALUES ('$id ','$category')";
$insert = mysqli_query($conn, $sql);

if(!$insert ){
    echo "error";

}
else{
    header("Location: /PHPProject/item_category/view.php");
}


?>