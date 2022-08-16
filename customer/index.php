<?php
$conn = mysqli_connect("localhost","root","","info");

$sql = "SELECT * FROM `customer`";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($result)){
    $id = $row['id'];
    $title = $row['title'];
    $firstname = $row['first_name'];
    $middlename = $row['middle_name'];
    $lastname = $row['last_name'];
    $contactNo = $row['contact_no'];
    $district = $row['district'];

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
                        <label >Title</label>
                        <input type="text" name="title" class="form-control" required>
                        
                    </div>

                    <div class="form-group">
                        <label >First Name</label>
                        <input type="text" name="first_name" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label >Middle Name</label>
                        <input type="text"  name="middle_name" class="form-control" required>
                    </div>
                    
                    <div class="form-group">
                        <label >Last Name</label>
                        <input type="text"  name="last_name" class="form-control" required >
                    </div>

                    <div class="form-group">
                        <label >Contact Number</label>
                        <<input type="tel"  pattern="[0-9]{10}" name="contact_no" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label >District</label>
                        <input type="text" name="district" class="form-control" required>
                    </div>

                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
        </div>
    </body>
</html>
