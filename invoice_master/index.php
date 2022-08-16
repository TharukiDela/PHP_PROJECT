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

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>crud operations</title>

    <script>
     function validateForm() {
    let x = document.forms["myForm"]["title"].value;
    if (x == "") {
    alert("Title must be filled out");
   
    return false;
  }
}
</script>
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

                   

                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
        </div>
    </body>
</html>
