<?php
    include_once 'server.php';

    if (isset($_POST['surname'])) {
        $surname = mysqli_real_escape_string($conn, $_POST['surname']) ;
    }
    
    if (isset($_POST['firstname'])) {
        $firstname = mysqli_real_escape_string($conn, $_POST['firstname']); }
    
    
    if (isset ($_POST ['email'])) {
    
        $email = mysqli_real_escape_string($conn, $_POST['email']) ;}
    
    
    if (isset($_POST['password'])) {
        $password = mysqli_real_escape_string($conn, $_POST['email']) ;}

    //pentru criptarea parolei
    //$hash = password_hash($password,  PASSWORD_DEFAULT);
    
    $select = mysqli_query($conn, "SELECT * FROM userdata WHERE email = '".$_POST['email']."'");

    //ERROR Messages

    if(empty($surname)  || empty($firstname)  || empty($email)  || empty($password)){
        echo '<script>alert("All fields are required!")</script>';
        
    }else if(mysqli_num_rows($select)) {
        echo '<script>alert("This email address is already used!")</script>';
        }
        else{
            $sql = "INSERT INTO userdata (surname, firstname, email, pwd) VALUES ('$surname', '$firstname', '$email','$password'); ";
            mysqli_query($conn, $sql);
            header("Location: index.php?singup=succes");
            
        }
   

