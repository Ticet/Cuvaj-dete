<?php
    session_start();
    $userID = $_SESSION['userID'];


    if(!$userID) {
        header('Location: ../login.html');
    }


    include 'connection.php';

    $postName = $_POST['postName'];
    $postContent = $_POST['postContent'];
    $tagsArray = $_POST['checkBoxTag'];
    $tags = '';

    //put all tags into a single string
    foreach($tagsArray as $tag) {
        $tags = $tags.' '.$tag; 
    }


    $query = "insert into post( user_id, name, content, tags, date) values('$userID', '$postName', '$postContent', '$tags', CURRENT_TIMESTAMP)";
    mysqli_query($conn, $query);
    header('Location: ../forum.php');
?>