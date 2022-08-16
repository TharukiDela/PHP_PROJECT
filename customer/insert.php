<?php

$conn = mysqli_connect("localhost","root","","info");

$title = $_POST['title'];
$firstname = $_POST['first_name'];
$middlename = $_POST['middle_name'];
$lastname = $_POST['last_name'];
$contactNo = $_POST['contact_no'];
$district = $_POST['district'];

$sql = "INSERT INTO customer(`title`, `first_name`, `middle_name`, `last_name`, `contact_no`, `district`) VALUES 
('$title','$firstname','$middlename','$lastname','$contactNo','$district')";
$insert = mysqli_query($conn, $sql);

if(!$insert ){
    echo "error";

}
else{
    header("Location: /PHPProject/customer/view.php");
}


?>