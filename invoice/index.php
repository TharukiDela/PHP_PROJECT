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

                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
        </div>
    </body>
</html>
