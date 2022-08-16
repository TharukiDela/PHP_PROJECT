<?php

$conn = mysqli_connect("localhost","root","","info");

$id = $_POST['id'];
$invoiceNo = $_POST['invoice_no'];
$itemId = $_POST['item_id'];
$quantity = $_POST['quantity'];
$unitPrice = $_POST['unit_price'];
$amount = $_POST['amount'];

$sql = "INSERT INTO `invoice_master`(`id`, `invoice_no`, `item_id`, `quantity`, `unit_price`, `amount`) 
VALUES ('$id','$invoiceNo','$itemId','$quantity','$unitPrice','$amount')";
$insert = mysqli_query($conn, $sql);

if(!$insert ){
    echo "error";

}
else{
    header("Location: /PHPProject/invoice_master/view.php");
}


?>