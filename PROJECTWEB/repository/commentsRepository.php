<?php

include_once('../database/databaseConnection.php');

class CommentRepository{
    private $connection;

    function __construct(){
        $conn= new DatabaseConnection;

        $this->connection=$conn->startConnection();
    }

    function insertComment($comment){

        $conn=$this->connection;

        $id=$comment->getId();
        $name=$comment->getName();
        $surname=$comment->getSurname();
        $email=$comment->getEmail();
        $comments=$comment->getComment();
        

        $sql="INSERT INTO comments (Id,Name,Surname,Email,Comment) VALUES (?,?,?,?,?)";

        $statement=$conn->prepare($sql);

        $statement->execute([$id,$name,$surname,$email,$comments]);

        echo"<script> alert('Your comment has successfully sent to admin'); </script>";
    }

    function getAllComments(){
        $conn =$this->connection;

        $sql="SELECT * FROM comments";

        $statement=$conn->query($sql);
        $comments=$statement->fetchAll();

        return $comments;
    }

    // function getCommentById($id){

    //     $conn=$this->connection;

    //     $sql="SELECT * FROM comments WHERE id='$id' ";

    //     $statement=$conn->query($sql);
    //     $comment=$statement->fetch();
    //     return $comment;

    // }

    // function updateComment($id,$name,$surname,$email,$comment){

    //     $conn =$this->connection;

    //     $sql="UPDATE comments SET name=?, surname=?, email=?, comment=? where id=? ";

    //     $statement=$conn->prepare($sql);

    //     $statement->execute([$name,$surname,$email,$comment,$id]);

    //     echo "<script> alert('Comment has been updated!')</script>";

    // }

    function deleteComment($id){
        $conn = $this->connection;

        $sql="DELETE FROM comments WHERE id=?";

        $statement=$conn->prepare($sql);

        $statement->execute([$id]);

        echo "<script> alert('Comment has been deleted!'); </script>";
    }



}

?>