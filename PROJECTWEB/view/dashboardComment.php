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
<table border="2" style="margin-left: 630px; margin-top: 100px;" id="t2">

<p style="margin-left: 800px; margin-top: 80px; font-Size: 25px;">COMMENTS</p>
<hr>
<tr>
    <td><i><b>ID</b></i></td>
    <td><i><b>NAME</b></i></td>
    <td><i><b>SURNAME</b></i></td>
    <td><i><b>EMAIL</b></i></td>
    <td><i><b>COMMENTS</b></i></td>
    <td><i><b>DELETE</b></i></td>
</tr>

<?php
    include_once('../repository/commentsRepository.php');

    $commentRepository = new CommentRepository;

    $comments=$commentRepository->getAllComments();

    foreach($comments as $comment){
        echo "
        <tr>
        <td>$comment[Id]</td>
        <td>$comment[Name]</td>
        <td>$comment[Surname]</td>
        <td>$comment[Email]</td>
        <td>$comment[Comment]</td>
        <td><a href='deleteComment.php?id=$comment[Id]'>Delete</a></td>
        </tr>
        ";
    }
    ?>
</table>
</body>
</html>
