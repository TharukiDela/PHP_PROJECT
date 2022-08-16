<?php
$conn = mysqli_connect("localhost","root","","info");

$id=$_GET['updateid'];
$sql = "select * from `customer` where id=$id";
$result = mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);

$id = $row['id'];
$title = $row['title'];
$firstname = $row['first_name'];
$middlename = $row['middle_name'];
$lastname = $row['last_name'];
$contactNo = $row['contact_no'];
$district = $row['district'];


if(isset($_POST['submit'])){
   
    $id = $_POST['id'];
    $title = $_POST['title'];
    $firstname = $_POST['first_name'];
    $middlename = $_POST['middle_name'];
    $lastname = $_POST['last_name'];
    $contactNo = $_POST['contact_no'];
    $district = $_POST['district'];


    $sql = "UPDATE `customer` SET id= $id ,title=$title, first_name=$firstname, middle_name=$middlename, last_name=$lastname, contact_no=$contactNo, district=$district
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

            <h2>Customer Data</h2>
                <form action="insert.php" method="POST">
                    <div class="form-group">
                        <label >Title</label>
                        <input type="text" name="title" class="form-control" value=<?php echo $title?>>
                        
                    </div>

                    <div class="form-group">
                        <label >First Name</label>
                        <input type="text" name="first_name" class="form-control" value=<?php echo $firstname?>>
                    </div>

                    <div class="form-group">
                        <label >Middle Name</label>
                        <input type="text"  name="middle_name" class="form-control" value=<?php echo $middlename?>>
                    </div>
                    
                    <div class="form-group">
                        <label >Last Name</label>
                        <input type="text"  name="last_name" class="form-control" value=<?php echo $lastname?>>
                    </div>

                    <div class="form-group">
                        <label >Contact Number</label>
                        <input type="text" name="contact_no" class="form-control" value=<?php echo $contactNo?>>
                    </div>

                    <div class="form-group">
                        <label >District</label>
                        <input type="text" name="district" class="form-control" value=<?php echo $district?>>
                    </div>

                    
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
        </div>
    </body>

</body>
</html>