<?php
$conn = mysqli_connect("localhost","root","","info");

$sql = "SELECT * FROM `invoice`,`item`";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($result)){

    $id = $row['id'];
    $date = $row['date'];
    $time = $row['time'];
    $invoiceNo = $row['invoice_no'];
    $customer = $row['customer'];
    $itemCount = $row['item_count'];
    $amount = $row['amount'];

    $id = $row['id'];
    $itemCode = $row['item_code'];
    $itemCategory = $row['item_category'];
    $itemSubcategory = $row['item_subcategory'];
    $itemName = $row['item_name'];
    $quantity = $row['quantity'];
    $unitPrice = $row['unit_price'];


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
        
        <h2>Invoice - Item Report</h2>
        <table class="table">

            <thead>
                <tr>
                
                <th >Date</th>
                <th >Invoice No</th>
                <th >Customer</th>
                <th >Item Name</th>
                <th>Item Category</th>
                <th >Unit Price</th>
                </tr>
            </thead>
        <tbody>

            <?php

                $sql = "SELECT * FROM `invoice`,`item`";
                $result = mysqli_query($conn, $sql);
                while($row = mysqli_fetch_assoc($result)){
                    echo
                    '<tr>
                        
                        <td>'.$row['date'].'</td> 
                        <td>'.$row['invoice_no'].'</td>
                        <td>'.$row['customer'].'</td>
                        <td>'.$row['item_name'].'</td>
                        <td>'.$row['item_category'].'</td>
                        <td>'.$row['unit_price'].'</td>
                    
                    
                    </tr>';

                }
            ?>
        


        </tbody>


    </div>
    
</table>
</body>
</html>
