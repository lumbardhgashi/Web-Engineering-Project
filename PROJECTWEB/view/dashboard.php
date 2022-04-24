<?php
include_once('header.php');



if($_SESSION['is_logged_in'] == true and $_SESSION['role'] == "admin"){

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
    <link rel="stylesheet" href="dashboard.css">
    <main>
        <nav class="sidebar" method="POST">
            <ul class="items">
                <div>
                    <li class="logo">
                        <img alt="" src="download.jpeg" />
                    </li>
                    <li class="item" >
                        <a href="dashboardUser.php">USERS</a>
                    </li>
                    <li class="item" >
                        <a href="dashboardComment.php">COMMENTS</a>
                    </li>
                    <li class="item" >
                        <a href="dashboardProduct.php">PRODUCTS</a>
                    </li>
                   
                </div>

                <div>
                    <li id="logout" class="item">
                        <a href="logout.php">Log Out</a>
                    </li>
                </div>

            </ul>
        </nav>
    </main>

<?php
}else{
    header('location:login.php');
}

?>

</body>

</html>