<?php
$conn = mysqli_connect("localhost","root","","info");

$id=$_GET['updateid'];
$sql = "select * from `item` where id=$id";
$result = mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);

$id = $row['id'];
$itemcode = $row['item_code'];
$itemcategory = $row['item_category'];
$subcategory = $row['item_subcategory'];
$itemname = $row['item_name'];
$quantity = $row['quantity'];
$price = $row['unit_price'];



if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $itemcode = $_POST['item_code'];
    $itemcategory = $_POST['item_category'];
    $subcategory = $_POST['item_subcategory'];
    $itemname = $_POST['item_name'];
    $quantity = $_POST['quantity'];
    $price = $_POST['unit_price'];
    
  

    $sql = "UPDATE `item` SET item_code=$itemcode, item_category= $itemcategory,
    item_subcategory=$subcategory,item_name=$itemname,quantity=$quantity,unit_price= $price WHERE 
    id=$id ";
    
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

        <h2>Item Data</h2>
                <form action="insert.php" form name="myForm" method="POST" onsubmit="return validateForm()">
                    <div class="form-group">
                        <label >Item code</label>
                        <input type="text" name="item_code" class="form-control" required>
                        
                    </div>

                      
                    <div class="form-group">
                        <label >Item Name</label>
                        <input type="text"  name="item_name" class="form-control" required >
                    </div>

                    <div class="form-group">
                        <label >Category</label>
                       
                    

                        <select name="category" id="category" name="item_category" >
                            <option value="Printers">Printers</option>
                            <option value="Laptops">Laptops</option>
                            <option value="Gadgets">Gadgets</option>
                            <option value="Ink bottels">Ink bottels</option>
                            <option value="Cartridges">Cartridges</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label >  Sub category</label>
                       
                    

                        <select name="category" id="category" name="item_subcategory" >
                            <option value="HP">HP</option>
                            <option value="Dell">Dell</option>
                            <option value="Lenovo">Lenovo</option>
                            <option value="Acer">Acer</option>
                            <option value="Samsung<">Samsung<</option>
                        </select>
                    </div>

                    
                    
                   

                    <div class="form-group">
                        <label>Quantity</label>
                        <<input type="text"  name="quantity" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label >Unit Price</label>
                        <input type="text" name="unit_price" class="form-control" required>
                    </div>

                    
                    
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
        </div>
    </body>

</body>
</html>