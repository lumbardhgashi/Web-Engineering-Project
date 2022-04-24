<?php
$productid=$_GET['id'];

include_once('../repository/productRepository.php');


$productRepository= new ProductRepository();


$productRepository->deleteProduct($productid);

header('location:dashboardProduct.php');



?>