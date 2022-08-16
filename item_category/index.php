<?php
$conn = mysqli_connect("localhost","root","","info");

$sql = "SELECT * FROM `item_category` ";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($result)){
    $id = $row['id'];
    $category = $row['category'];
    
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

            <h2>Customer Data</h2>
                <form action="insert.php" form name="myForm" method="POST" onsubmit="return validateForm()">
                    <div class="form-group">
                       
                   
                    <div class="form-group">
                        <label >Category</label>
                        <input type="text" name="category" class="form-control" required>
                    </div>

                   

                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
        </div>
    </body>
</html>
