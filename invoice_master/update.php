<?php
$conn = mysqli_connect("localhost","root","","info");

$id=$_GET['updateid'];
$sql = "SELECT * FROM `invoice_master` where id=$id";
$result = mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);

$id = $row['id'];
$invoiceNo = $row['invoice_no'];
$itemId = $row['item_id'];
$quantity = $row['quantity'];
$unitPrice = $row['unit_price'];
$amount= $row['amount'];


if(isset($_POST['submit'])){

    $id = $_POST['id'];
    $invoiceNo = $_POST['invoice_no'];
    $itemId = $_POST['item_id'];
    $quantity = $_POST['quantity'];
    $unitPrice = $_POST['unit_price'];
    $amount = $_POST['amount'];
   
    $sql = "UPDATE `invoice_master` SET `id`=$id,`invoice_no`=$invoiceNo,`item_id`=$itemId,`quantity`=$quantity,`unit_price`=$unitPrice,`amount`= $amount
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
                            <label >Invoice No</label>
                            <input type="text" name="invoice_no" class="form-control" required>
                            
                        </div>

                        <div class="form-group">
                            <label >Item ID</label>
                            <input type="text" name="item_id" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label >Quantity</label>
                            <input type="text"  name="quantity" class="form-control" required>
                        </div>
                        
                        <div class="form-group">
                            <label >Unit Price</label>
                            <input type="text"  name="unit_price" class="form-control" required >
                        </div>

                        <div class="form-group">
                            <label >Amount</label>
                            <<input type="tel"   name="amount" class="form-control" required>
                        </div>

                   
                    
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
        </div>
    </body>

</body>
</html>