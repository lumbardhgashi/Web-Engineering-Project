<?php 
include_once('../models/products.php');
include_once('../repository/productRepository.php');

if(isset($_POST['registerbtn'])){
    if(empty($_POST['photo1']) || empty($_POST['photo2']) || empty($_POST['photo3']) || empty($_POST['sip']) || empty($_POST['room'])
    || empty($_POST['bathroom']) || empty($_POST['salon']) || empty($_POST['price'])){

        echo"<script> alert('Please Fill up all fields!'); </script>";

    }else{

        $photo1=$_POST['photo1'];
        $photo2=$_POST['photo2'];
        $photo3=$_POST['photo3'];
        $sip=$_POST['sip'];
        $room=$_POST['room'];
        $bathroom=$_POST['bathroom'];
        $salon=$_POST['salon'];
        $price=$_POST['price'];
        $id=$room.rand(1,999);

        $product = new Product($id,$photo1,$photo2,$photo3,$sip,$room,$bathroom,$salon,$price);
        
        $productRepository= new ProductRepository;

        $productRepository->insertProduct($product);

    }
}

?>