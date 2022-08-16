<?php
$conn = mysqli_connect("localhost","root","","info");

$sql = "SELECT * FROM `district`";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($result)){
    $id = $row['id'];
    $district = $row['district'];
    $active = $row['active'];
  

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

            <h2>District Data</h2>
                <form action="insert.php" form name="myForm" method="POST" onsubmit="return validateForm()">
                    <div class="form-group">
                        <label >District</label>
                        <input type="text" name="district" class="form-control" required>
                        
                    </div>

                    <div class="form-group">
                        <label >Active</label>
                        <input type="text" name="active" class="form-control" required>
                    </div>

                    
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
        </div>
    </body>
</html>
