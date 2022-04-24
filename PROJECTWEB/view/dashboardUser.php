
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include_once('dashboard.php');
    ?>
    <link rel="stylesheet" href="table.css">
<table border="2" style="margin-left: 500px; margin-top: 100px;">

<p style="margin-left: 800px; margin-top: 80px; font-Size: 25px;">USERS ON OUR APP</p>
<hr>
<tr>
    <td><i><b>ID</b></i></td>
    <td><i><b>NAME</b></i></td>
    <td><i><b>SURNAME</b></i></td>
    <td><i><b>EMAIL</b></i></td>
    <td><i><b>USERNAME</b></i></td>
    <td><i><b>PASSWORD</b></i></td>
    <td><i><b>ROLE</b></i></td>
    <td><i><b>EDIT</b></i></td>
    <td><i><b>DELETE</b></i></td>
</tr>

<?php
include_once('../repository/userRepository.php');

$userRepository = new UserRepository;

$users=$userRepository->getAllUsers();

foreach($users as $user){
    echo "
    <tr>
    <td>$user[Id]</td>
    <td>$user[Name]</td>
    <td>$user[Surname]</td>
    <td>$user[Email]</td>
    <td>$user[Username]</td>
    <td>$user[Password]</td>
    <td>$user[Role]</td>
    <td><a href='editUser.php?id=$user[Id]'>Edit</a></td>
    <td><a href='deleteUser.php?id=$user[Id]'>Delete</a></td>
    </tr>
    ";
}
?>
</table>
</body>
</html>