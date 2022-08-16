<?php
$conn = mysqli_connect("localhost","root","","info");

$sql = "SELECT * FROM `invoice`";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($result)){

    $id = $row['id'];
    $date = $row['date'];
    $time = $row['time'];
    $invoiceNo = $row['invoice_no'];
    $customer = $row['customer'];
    $itemCount = $row['item_count'];
    $amount = $row['amount'];

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
                
                <th >Date</th>
                <th >Time</th>
                <th >Invoice No</th>
                <th >Customer</th>
                <th >Item Count</th>
                <th >Amount</th>
                </tr>
            </thead>
        <tbody>

            <?php

                $sql = "SELECT * FROM `invoice`";
                $result = mysqli_query($conn, $sql);
                while($row = mysqli_fetch_assoc($result)){
                    echo
                    '<tr>
                        
                        <td>'.$row['date'].'</td>
                        <td>'.$row['time'].'</td>
                        <td>'.$row['invoice_no'].'</td>
                        <td>'.$row['customer'].'</td>
                        <td>'.$row['item_count'].'</td>
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
