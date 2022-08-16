<?php
$conn = mysqli_connect("localhost","root","","info");

$sql = "SELECT * FROM `item`";
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

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <title>crud operations of Item</title>

    <script>
     function validateForm() {
    let x = document.forms["myForm"]["item_code"].value;
    if (x == "") {
    alert("Item code must be filled out");
   
    return false;
  }
}
</script>
  </head>
  <body>
        <div class="container my-5">

            <h2>Item Data</h2>
                <form action="insert.php" form name="myForm" method="POST" onsubmit="return validateForm()">
                    <div class="form-group">
                        <label >Item code</label>
                        <input type="text" name="item_code" class="form-control" required>
                        
                    </div>

                      
                    <div class="form-group">
                        <label >Item Category</label>

                        <select name="item_category" >
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>
                   

                    <div class="form-group">
                        <label >  Sub category</label>

                        <select name="item_subcategory" >
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Item Name</label>
                        <input type="text"  name="item_name" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label>Quantity</label>
                        <input type="number"  name="quantity" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label >Unit Price</label>
                        <input type="number" name="unit_price" class="form-control" required>
                    </div>

                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
        </div>
    </body>
</html>
