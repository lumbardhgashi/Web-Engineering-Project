<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include_once('dashboard.php');
    ?>
<link rel="stylesheet" href="table.css">

<table border="2" style="margin-left: 650px; margin-top: 100px;">
        <p style="margin-left: 800px; margin-top: 80px; font-Size: 25px;">PRODUCTS</p>
        <hr>

        
        <link rel="stylesheet" href="AddProduct.css">
        <a href="registerProduct.php" ><button class="button" > ADD PRODUCT</button></a>
        
        
        <tr>
    <td><i><b>ID</b></i></td>
    <td><i><b>SIP</b></i></td>
    <td><i><b>ROOMS</b></i></td>
    <td><i><b>BATHROMS</b></i></td>
    <td><i><b>SALONS</b></i></td>
    <td><i><b>PRICE</b></i></td>
    <td><i><b>EDIT</b></i></td>
    <td><i><b>DELETE</b></i></td>
</tr>

<?php
    include_once('../repository/productRepository.php');

    $productRepository = new ProductRepository;

    $products=$productRepository->getAllProducts();

    foreach($products as $product){
        echo "
        <tr>
        <td>$product[Id]</td>
        <td>$product[Sip] m2</td>
        <td>$product[Room]</td>
        <td>$product[Bathroom]</td>
        <td>$product[Salon]</td>
        <td>$product[Price] $</td> 
        <td><a href='editProduct.php?id=$product[Id]'>Edit</a></td>
        <td><a href='deleteProduct.php?id=$product[Id]'>Delete</a></td>
       
        </tr>
        ";
    }
    ?>
    
    </table>
<br><br>

    
</body>
</html>