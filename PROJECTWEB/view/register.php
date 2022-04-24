<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>

<form method="Post">
  <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
    
    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter name" name="name" id="name" required>
    <label for="surname"><b>Surname</b></label>
    <input type="text" placeholder="Enter surname" name="surname" id="surname" required>
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required>
    <label for="username"><b>UserName</b></label>
    <input type="text" placeholder="Enter UserName" name="username" id="UserName" required>
    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" id="password" required>
   
  
    <p>By creating an account you agree to our <a href="Terms.php">Terms & Privacy</a>.</p>

    <input type="submit" name="registerBtn" value="register" class="registerbtn"><br><br>
  </div>
  
  <div class="container signin">
    <p>Already have an account? <a href="login.php">Sign in</a>.</p>
  </div>
<?php
include_once('../controllers/registerController.php');
?>
  
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
