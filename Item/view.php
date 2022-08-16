<?php
$conn = mysqli_connect("localhost","root","","info");

$sql = " SELECT * FROM `item`";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($result)){

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
<html>
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
        
        <table class="table">

            <thead>
                <tr>
                
                <th >Item Code</th>
                <th >Item Category</th>
                <th >Item Subcategory</th>
                <th >Item Name</th>
                <th >Quantity</th>
                <th >Unit Price</th>
                </tr>
            </thead>
        <tbody>

            <?php

                $sql = "SELECT * FROM `item`";
                $result = mysqli_query($conn, $sql);
                while($row = mysqli_fetch_assoc($result)){
                    echo
                    '<tr>
                        
                        <td>'.$row['item_code'].'</td>
                        <td>'.$row['item_category'].'</td>
                        <td>'.$row['item_subcategory'].'</td>
                        <td>'.$row['item_name'].'</td>
                        <td>'.$row['quantity'].'</td>
                        <td>'.$row['unit_price'].'</td>
                    
                    <td>
                    <button class= "btn btn-warning"><a href = "update.php? updateid='.$id.'" class="text-light">Update</a></button>
                    <button class = "btn btn-danger"><a href = "delete.php? deleteid='.$id.' "class="text-light" >Delete</a></button>
                    </td>
                    </tr>';

                }
            ?>
        <button class="btn btn-success my-5"><a href="index.php" class="text-light" >Add Item</a></button>


        </tbody>


    </div>
    
</table>
</body>
</html>
