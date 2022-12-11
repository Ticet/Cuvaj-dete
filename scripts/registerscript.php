<?php
    include 'connection.php';

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $passwordConfirm = $_POST['passwordConfirm'];

    echo $password;
    echo $passwordConfirm;

    if($password != $passwordConfirm) {
        header('Location: ../login2.html');
        die();
    }

    if(!$username or !$email or !$password) {
        die("Greska!!! Jedno ili vise polja je prazno!!!");
    }

    $query = "insert into user(username, email, password) values('$username', '$email', '$password')";
    mysqli_query($conn, $query);
    header('Location: ../login.html');
    
    mysqli_close($conn);
?>