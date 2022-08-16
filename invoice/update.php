<?php
$conn = mysqli_connect("localhost","root","","info");

$id=$_GET['updateid'];
$sql = "SELECT * FROM `invoice` where id=$id";
$result = mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);

$id = $row['id'];
$date = $row['date'];
$time = $row['time'];
$invoiceNo = $row['invoice_no'];
$customer = $row['customer'];
$itemCount = $row['item_count'];
$amount = $row['amount'];



if(isset($_POST['submit'])){
   
    $id = $_POST['id'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $invoiceNo = $_POST['invoice_no'];
    $customer= $_POST['customer'];
    $itemCount  = $_POST['item_count'];
    $amount = $_POST['amount'];

    $sql = "UPDATE `invoice` SET `id`=$id,`date`=$date,`time`=$time ,`invoice_no`= $invoiceNo,`customer`= $customer,`item_count`=  $itemCount,`amount`= $amount
    WHERE id=$id";

   
    $result = mysqli_query($conn, $sql);
    
    if($result){
        header("Location: view.php");
    }
}
   
?>
<!DOCTYPE html>
<html >
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <title>update</title>
</head>
<body>

            <div class="container my-5">

           
                <form action="insert.php" form name="myForm" method="POST" onsubmit="return validateForm()">
                    <div class="form-group">
                        <label >Date</label>
                        <input type="date" name="date" class="form-control" required>
                        
                    </div>

                    <div class="form-group">
                        <label >Time</label>
                        <input type="time" name="time" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label >Invoice No</label>
                        <input type="text"  name="invoice_no" class="form-control" required>
                    </div>
                    
                    <div class="form-group">
                        <label >Customer</label>
                        <input type="text"  name="customer" class="form-control" required >
                    </div>

                    <div class="form-group">
                        <label >Item Count</label>
                        <<input type="text" name="item_count" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label >Amount</label>
                        <input type="text" name="amount" class="form-control" required>
                    </div>

                    
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
        </div>
    </body>

</body>
</html>