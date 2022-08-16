<?php
$conn = mysqli_connect("localhost","root","","info");

$sql = "SELECT * FROM `invoice_master`";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($result)){

    $id = $row['id'];
    $invoiceNo = $row['invoice_no'];
    $itemId = $row['item_id'];
    $quantity = $row['quantity'];
    $unitPrice = $row['unit_price'];
    $amount= $row['amount'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    <div class = "container">
        
        <table class="table">

            <thead>
                <tr>
                    
                    <th >Invoice No </th>
                    <th >Item Id</th>
                    <th >Quantity</th>
                    <th >Unit Price</th>
                    <th >Amount</th>
                
                </tr>
            </thead>
        <tbody>

            <?php

                $sql = "SELECT * FROM `invoice_master`";
                $result = mysqli_query($conn, $sql);
                while($row = mysqli_fetch_assoc($result)){
                    echo
                    '<tr>
                        
                        <td>'.$row['invoice_no'].'</td>
                        <td>'.$row['item_id'].'</td>
                        <td>'.$row['quantity'].'</td>
                        <td>'.$row['unit_price'].'</td>
                        <td>'.$row['amount'].'</td>
                        
                    
                    <td>
                    <button class= "btn btn-warning"><a href = "update.php? updateid='.$id.'" class="text-light">Update</a></button>
                    <button class = "btn btn-danger"><a href = "delete.php? deleteid='.$id.' "class="text-light" >Delete</a></button>
                    </td>
                    </tr>';

                }
            ?>
        <button class="btn btn-success my-5"><a href="index.php" class="text-light" >Add</a></button>


        </tbody>


    </div>
    
</table>
</body>
</html>
