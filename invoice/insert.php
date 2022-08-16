<?php

$conn = mysqli_connect("localhost","root","","info");

$id = $_POST['id'];
$date = $_POST['date'];
$time = $_POST['time'];
$invoiceNo = $_POST['invoice_no'];
$customer = $_POST['customer'];
$itemCount = $_POST['item_count'];
$amount = $_POST['amount'];

$sql = "INSERT INTO `invoice`(`id`, `date`, `time`, `invoice_no`, `customer`, `item_count`, `amount`)
VALUES ('$id','$date','$time','$invoiceNo','$customer','$itemCount','$amount')";
$insert = mysqli_query($conn, $sql);

if(!$insert ){
    echo "error";

}
else{
    header("Location: /PHPProject/invoice/view.php");
}


?>