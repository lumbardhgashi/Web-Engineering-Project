<?php

include_once('header.php');

?>
<!DOCTYPE html>   
<html>   
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1">  
<title> Login Page </title>  
<style>   
Body {  
  font-family: Calibri, Helvetica, sans-serif;  
  background-color: rgb(185, 99, 99);  
}  
button {   
       background-color: #4CAF50;   
       width: 100%;  
        color: orange;   
        padding: 15px;   
        margin: 10px 0px;   
        border: none;   
        cursor: pointer;   
         }   
   
 input[type=text], input[type=password] {   
        width: 100%;   
        margin: 8px 0;  
        padding: 12px 20px;   
        display: inline-block;   
        border: 2px solid green;   
        box-sizing: border-box;   
    }  
 button:hover {   
        opacity: 0.7;   
    }   
  .cancelbtn {   
        width: auto;   
        padding: 10px 18px;  
        margin: 10px 5px;  
    }   
        
     
 .container {   
        padding: 25px;   
        background-color: rgb(87, 96, 99);  
        width: 700px;
        height: 300px;
        margin-top: 20px;
        
    }   
</style>   
</head>    
<body>    
    <center> <h1 style="margin-top: 100px;">  LOGIN TO LGEP COMPANY   </h1> 
    <form method="POST" >  
        <?php

        include_once('../controllers/loginController.php');
        ?>
        <div class="container">   
            <label>Username : </label>   
            <input type="text" placeholder="Enter Username" name="username" required>  
            <label>Password : </label>   
            <input type="password" placeholder="Enter Password" name="password" required>  
            <button type="submit" name="submit">Login</button>   
            <input type="checkbox" checked="checked"> Remember me   
            <button type="reset" class="cancelbtn"> Cancel</button>   
            Register if you are'nt: <a href="register.php"> Register </a>   
        </div></center> 
    </form>    
</body>     
</html>  