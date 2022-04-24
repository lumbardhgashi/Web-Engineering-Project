<?php
$userid=$_GET['id'];

include_once('../repository/userRepository.php');


$userRepository= new UserRepository();


$userRepository->deleteUser($userid);

header('location:dashboardUser.php');



?>