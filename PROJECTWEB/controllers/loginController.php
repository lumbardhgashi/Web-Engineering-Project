<?php


$_SESSION['is_logged_in'] = false;


include_once('../repository/userRepository.php');

$userRepository= new UserRepository;
$users=$userRepository->getAllUsers();

if($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['submit'])){
    foreach($users as $user){
        if($_POST['username'] == $user['Username'] && $_POST['password'] == $user['Password']){
            
            $_SESSION['is_logged_in'] = true;
            $_SESSION['username'] = $user['Username'];
            $_SESSION['password'] = $user['Password'];
            $_SESSION['name'] = $user['Name'];
            $_SESSION['surname'] = $user['Surname'];
            $_SESSION['email']=$user['Email'];
            $_SESSION['role']=$user['Role'];

            header("location:home.php");
            
        }else {
            $error = 'Email or Password is incorrect';
        }
    }
    }
    
}

?>