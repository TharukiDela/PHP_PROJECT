<?php

$conn = mysqli_connect("localhost","root","","info");


$itemCode = $_POST['item_code'];
$itemCategory = $_POST['item_category'];
$itemSubcategory = $_POST['item_subcategory'];
$itemName= $_POST['item_name'];
$quantity = $_POST['quantity'];
$unitPrice= $_POST['unit_price'];

$sql = "INSERT INTO `item`(`item_code`, `item_category`, `item_subcategory`, `item_name`, `quantity`, `unit_price`)
VALUES ('$itemCode','$itemCategory','$itemSubcategory','$itemName','$quantity','$unitPrice') ";
$insert = mysqli_query($conn, $sql);

if(!$insert ){
    echo "error";

}
else{
    header("Location: /PHPProject/Item/view.php");
}


?>