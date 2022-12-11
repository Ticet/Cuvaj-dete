<?php
    include 'connection.php';
    $postID = $_POST['replyButton'];
    $text = $_POST['postContent'];
    session_start();
    $userID = $_SESSION['userID'];

    $query = "insert into reply(post_id, user_id, text) values('$postID', '$userID', '$text')";
    mysqli_query($conn, $query);

    header("Location: ../forumviewpost.php?post=$postID");
?>