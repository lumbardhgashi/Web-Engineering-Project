<?php

include_once('../models/comment.php');
include_once('../repository/commentsRepository.php');

if(isset($_POST['send'])){

    
    if(empty($_POST['name']) || empty($_POST['surname']) || empty($_POST['email']) || empty($_POST['comments']) ){
        echo"<script> alert('Please Fill up all fields!'); </script>";

    }else{

        $name=$_POST['name'];
        $surname=$_POST['surname'];
        $email=$_POST['email'];
        $comment=$_POST['comments'];
        $id=$name.rand(1,999);

        $comment = new Comment($id,$name,$surname,$email,$comment);
        
        $commentRepository= new CommentRepository();

        $commentRepository->insertComment($comment);

    }
}

?>