<?php

include_once('../database/databaseConnection.php');

class ProductRepository{
    private $connection;

    function __construct(){
        $conn= new DatabaseConnection;

        $this->connection=$conn->startConnection();
    }

    function insertProduct($product){
        $conn=$this->connection;

        $id=$product->getId();
        $photo1=$product->getPhoto1();
        $photo2=$product->getPhoto2();
        $photo3=$product->getPhoto3();
        $sip=$product->getSip();
        $room=$product->getRoom();
        $bathroom=$product->getBathroom();
        $salon=$product->getSalon();
        $price=$product->getPrice();

        $sql="INSERT INTO product(Id,Photo1,Photo2,Photo3,Sip,Room,Bathroom,Salon,Price) VALUES(?,?,?,?,?,?,?,?,?)";

        $statement=$conn->prepare($sql);

        $statement->execute([$id,$photo1,$photo2,$photo3,$sip,$room,$bathroom,$salon,$price]);

        echo"<script> alert('You have successfully Add Produc'); </script>";
    }
    
    function getAllProducts(){
        $conn =$this->connection;

        $sql="SELECT * FROM product";

        $statement=$conn->query($sql);
        $products=$statement->fetchAll();

        return $products;
    }

    function getProductById($id){

        $conn=$this->connection;

        $sql="SELECT * FROM product WHERE id='$id' ";

        $statement=$conn->query($sql);
        $product=$statement->fetch();
        return $product;

    }

    function updateProduct($id,$sip,$room,$bathroom,$salon,$price){

        $conn =$this->connection;

        $sql="UPDATE product SET sip=?, room=?, bathroom=?, salon=?, price=? where id=? ";

        $statement=$conn->prepare($sql);

        $statement->execute([$sip,$room,$bathroom,$salon,$price,$id]);

        echo "<script> alert('Product has been updated!')</script>";

    }

    function deleteProduct($id){
        $conn = $this->connection;

        $sql="DELETE FROM product WHERE id=?";

        $statement=$conn->prepare($sql);

        $statement->execute([$id]);

        echo "<script> alert('Product has been deleted!'); </script>";
    }

}

?>