<?php
include_once('../repository/productRepository.php');

$productid =$_GET['id'];

$productRepository= new ProductRepository;

$product = $productRepository->getProductById($productid);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<link rel="stylesheet" href="registerProduct.css">

    <form method="post">
        <div class="container">
          <h1>Update product</h1>
          <p>Please fill in this form to Update an product.</p>
          <hr>
      
          
          <label for="id"><b>Id</b></label>
          <input type="number"  value="<?= $product['Id'] ?>" name="id" readonly required>

          <label for="sip"><b>Sip</b></label>
          <input type="number" min="30" max="2000" value="<?= $product['Sip'] ?>" name="sip" id="sip" required>
      
          <label for="rooms"><b>Rooms</b></label>
          <input type="number" min="0" max="30" value="<?= $product['Room'] ?>" name="room" id="room" required>

          <label for="bathroom"><b>Bathroom</b></label>
          <input type="number" min="0" max="30" value="<?= $product['Bathroom'] ?>" name="bathroom" id="bathroom" required>
      
          <label for="salon"><b>Salon</b></label>
          <input type="number" min="0" max="30"  value="<?= $product['Salon'] ?>" name="salon" id="salon" required>
          
          <label for="price"><b>Price</b></label>
          <input type="number"   value="<?= $product['Price'] ?>" name="price" id="price" required>

          <hr>

      
          
          <button type="submit" name="save" class="registerbtn">SAVE</button>
        </div>

        <?php
        include_once('../controllers/registerProductController.php');
        ?>
      </form>
</body>
</html>

<?php

if(isset($_POST['save'])){
    $id=$product['Id'];
    $sip=$_POST['sip'];
    $room=$_POST['room'];
    $bathroom=$_POST['bathroom'];
    $salon=$_POST['salon'];
    $price=$_POST['price'];
    

$productRepository->updateProduct($id,$sip,$room,$bathroom,$salon,$price);
header('location:dashboard.php');
}


?>