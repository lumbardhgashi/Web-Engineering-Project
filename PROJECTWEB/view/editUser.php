<?php
include_once('../repository/userRepository.php');

$userid =$_GET['id'];

$userRepository= new UserRepository;

$user = $userRepository->getUserById($userid);
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
<form method="Post">
  <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
    
    <label for="name"><b>Name</b></label>
    <input type="text" value="<?= $user['Name']?>" name="name" id="name" required>
    <label for="surname"><b>Surname</b></label>
    <input type="text" value="<?= $user['Surname']?>" name="surname" id="surname" required>
    <label for="email"><b>Email</b></label>
    <input type="text" value="<?= $user['Email']?>" name="email" id="email" required>
    <label for="username"><b>UserName</b></label>
    <input type="text" value="<?= $user['Username']?>" name="username" id="UserName" required>
    <label for="password"><b>Password</b></label>
    <input type="password" value="<?= $user['Password']?>" name="password" id="password" required>
   
    <input type="submit" name="save" value="save" class="registerbtn"><br><br>
  </div>
  

  
</form>

<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: black;
}

* {
  box-sizing: border-box;
}


.container {
  padding: 16px;
  background-color: white;
}


input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}


hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}


.registerbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}


a {
  color: dodgerblue;
}


.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
</body>
</html>

<?php

if(isset($_POST['save'])){
$id=$user['Id'];
$name=$_POST['name'];
$surname=$_POST['surname'];
$email=$_POST['email'];
$username=$_POST['username'];
$password=$_POST['password'];

$userRepository->updateUser($id,$name,$surname,$email,$username,$password);
header('location:dashboard.php');
}


?>