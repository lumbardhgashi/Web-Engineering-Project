<?php

include_once('../database/databaseConnection.php');

class UserRepository{
    private $connection;

    function __construct(){
        $conn= new DatabaseConnection;

        $this->connection=$conn->startConnection();
    }

    function insertUser($user){
        $conn=$this->connection;

        $id=$user->getId();
        $name=$user->getName();
        $surname=$user->getSurname();
        $email=$user->getEmail();
        $username=$user->getUsername();
        $password=$user->getPassword();
        $role="user";

        $sql="INSERT INTO user (Id,Name,Surname,Email,Username,Password,Role) VALUES(?,?,?,?,?,?,?)";

        $statement=$conn->prepare($sql);

        $statement->execute([$id,$name,$surname,$email,$username,$password,$role]);

        echo"<script> alert('You have successfully registered, You can now access products'); </script>";
        header('location:../view/login.php');
    }
    function getAllUsers(){
        $conn =$this->connection;

        $sql="SELECT * FROM user";

        $statement=$conn->query($sql);
        $users=$statement->fetchAll();

        return $users;
    }

    function getUserById($id){

        $conn=$this->connection;

        $sql="SELECT * FROM user WHERE id='$id' ";

        $statement=$conn->query($sql);
        $user=$statement->fetch();
        return $user;

    }

    function updateUser($id,$name,$surname,$email,$username,$password){

        $conn =$this->connection;

        $sql="UPDATE user SET name=?, surname=?, email=?, username=?, password=? where id=? ";

        $statement=$conn->prepare($sql);

        $statement->execute([$name,$surname,$email,$username,$password,$id]);

        echo "<script> alert('User has been updated!')</script>";

    }

    function deleteUser($id){
        $conn = $this->connection;

        $sql="DELETE FROM user WHERE id=?";

        $statement=$conn->prepare($sql);

        $statement->execute([$id]);

        echo "<script> alert('User has been deleted!'); </script>";
    }

    



}

?>