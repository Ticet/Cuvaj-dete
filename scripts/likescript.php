<?php
    include 'connection.php';

    session_start();
    $userID = $_SESSION['userID'];
    $postIDArray = explode(' ', $_POST['likeBTN']);
    $postID = $postIDArray[1];
    $isLikedStr = $postIDArray[0];
    $isLiked = false;

    if($isLikedStr == '1') {
        $isLiked = true;
    }


    if(!$isLiked) {
        $query = "insert into likes(post_id, user_id) values('$postID', '$userID')";
        mysqli_query($conn, $query);
        $countQuery = "update post set likes = likes + 1 where post_id = '$postID'";
        mysqli_query($conn, $countQuery);
    }
    else {
        $dislikeQuery = "delete from likes where user_id = '$userID' and post_id = '$postID'";
        mysqli_query($conn, $dislikeQuery);
        $countUnQuery = "update post set likes = likes - 1 where post_id = '$postID'";
        mysqli_query($conn, $countUnQuery);
    }

    header("Location: ../forumviewpost.php?post=$postID")

?>