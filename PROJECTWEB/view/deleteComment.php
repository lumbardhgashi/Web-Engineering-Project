<?php
$commentid=$_GET['id'];

include_once('../repository/commentsRepository.php');


$commentRepository= new CommentRepository();


$commentRepository->deleteComment($commentid);

header('location:dashboardComment.php');



?>