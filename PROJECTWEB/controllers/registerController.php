<?php 
include_once('../models/user.php');
include_once('../repository/userRepository.php');

if(isset($_POST['registerBtn'])){
    if(empty($_POST['name']) || empty($_POST['surname']) || empty($_POST['email']) || empty($_POST['username']) || empty($_POST['password'])){
        echo"<script> alert('Please Fill up all fields!'); </script>";

    }else{

        $name=$_POST['name'];
        $surname=$_POST['surname'];
        $email=$_POST['email'];
        $username=$_POST['username'];
        $password=$_POST['password'];
        $id=$username.rand(1,999);

        $user = new User($id,$name,$surname,$email,$username,$password);
        
        $userRepository= new UserRepository();

        $userRepository->insertUser($user);

    }
}

?>