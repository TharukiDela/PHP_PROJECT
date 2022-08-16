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
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #04AA6D;
}
</style>
</head>
<body>

<ul>
  <li><a class="active" href="#home">Home</a></li>
  <li><a href="http://localhost/PHPProject/customer/view.php">Customer</a></li>
  <li><a href="http://localhost/PHPProject/Item/view.php">Item</a></li>
  <li><a href="http://localhost/PHPProject/invoice/report.php">Invoice Report</a></li>
  <li><a href="http://localhost/PHPProject/invoice-item.php">Invoice - Item Report</a></li>
  
  
  
</ul>


    
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
        <h2>Invoice Report</h2>
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
                    
                    
                    </tr>';

                }
            ?>
        


        </tbody>


    </div>
    
</table>
</body>
</html>
