<?php
$conn = mysqli_connect("localhost","root","","info");

$id=$_GET['updateid'];
$sql = "SELECT * FROM `item_category` where id=$id";
$result = mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);

$id = $row['id'];
$category = $row['category'];



if(isset($_POST['submit'])){
   
    $id = $_POST['id'];
    $category = $_POST['category'];
   
    $sql  = "UPDATE `item_category` SET id=$id, category=$category
    WHERE id=$id ";

    
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
        <h2>Customer Data</h2>
                <form action="insert.php" form name="myForm" method="POST" onsubmit="return validateForm()">
                    <div class="form-group">
                       
                   
                    <div class="form-group">
                        <label >Category</label>
                        <input type="text" name="category" class="form-control" required>
                    </div>

           
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
        </div>
    

</body>
</html>