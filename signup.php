<?php
    include_once 'server.php';

    if (isset($_POST['surname'])) {
        $surname = $_POST['surname'];
    }
    
    if (isset($_POST['firstname'])) {
        $firstname = $_POST['firstname'];}
    
    
    if (isset ($_POST ['email'])) {
    
        $email = $_POST['email'];}
    
    
    if (isset($_POST['password'])) {
        $password = $_POST['password'];}

    $sql = "INSERT INTO userdata (surname, firstname, email, pwd) VALUES ('$surname', '$firsname', '$email','$password'); ";
    mysqli_query($conn, $sql);

    header("Location: index.php?signup=success");