<?php
$conn = mysqli_connect("localhost","root","","info");

$id=$_GET['updateid'];
$sql = "SELECT * FROM `district` WHERE id=$id";
$result = mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);

$id = $row['id'];
$district = $row['district'];
$active = $row['active'];
  


if(isset($_POST['submit'])){
   
    $id = $_POST['id'];
    $district = $_POST['district'];
    $active = $_POST['active'];
   

    $sql = "UPDATE `district` SET id= $id, district= $district, active= $active
    where id=$id ";
    
    $result = mysqli_query($conn, $sql);
    
    if($result){
        header("Location: view.php");
    }
}
   
?>
<!DOCTYPE html>
<html >
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <title>update</title>
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

</body>
</html>