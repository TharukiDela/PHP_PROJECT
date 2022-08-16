<?php
$conn = mysqli_connect("localhost","root","","info");

$sql = "SELECT * FROM `item_category`";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($result)){

    $id = $row['id'];
    $category = $row['category'];
   

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    
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
                
                    <th >ID</th>
                    <th >Category</th>
                    
                </tr>
            </thead>
        <tbody>

            <?php

                $sql = "SELECT * FROM `item_category`";
                $result = mysqli_query($conn, $sql);
                while($row = mysqli_fetch_assoc($result)){
                    echo
                    '<tr>
                        
                        <td>'.$row['id'].'</td>
                        <td>'.$row['category'].'</td>
                        
                    
                    <td>
                    <button class= "btn btn-warning"><a href = "update.php? updateid='.$id.'" class="text-light">Update</a></button>
                    <button class = "btn btn-danger"><a href = "delete.php? deleteid='.$id.' "class="text-light" >Delete</a></button>
                    </td>
                    </tr>';

                }
            ?>
        <button class="btn btn-success my-5"><a href="index.php" class="text-light" >Add</a></button>


        </tbody>


    </div>
    
</table>
</body>
</html>
