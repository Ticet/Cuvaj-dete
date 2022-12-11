<?php
    include 'connection.php';

    $email = $_POST['email'];
    $password = $_POST['password'];


    // check if fields are not empty
    if(!$email or !$password) {
        die('Greska!!! Jedno ili vise polja je prazno!!!');
    }


    $query = "select password, user_id from user where email = '$email'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);


    //check if the password is correct and if it is redirect to index and start session
    if($password == $row['password']) {
        session_start();
        $_SESSION['userID'] = $row['user_id'];
        header('Location: ../homepage.php');
    }

    mysqli_close($conn);
?>