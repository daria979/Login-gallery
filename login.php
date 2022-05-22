<?php
    //$email = $_POST['email'];
    //$password = $_POST['password'];
    include_once 'server.php';

    if (isset ($_POST ['login'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        
        $select = mysqli_query($conn, "SELECT * FROM userdata WHERE email = '$email' AND pwd = '$password' " );
        
        $count = mysqli_num_rows($select);
        
       // echo "$pass";
        
        //ERROR Messages
        
        if(empty($email)  || empty($password)){
            echo '<script>alert("All fields are required!")</script>';
        }
        else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo '<script>alert("Invalid email format!")</script>';
        }
        else if ($count>0){
            header("Location: content.php");
            //echo '<script>alert("este bun!")</script>';
        }
        else{
            //header("Location: login.php");
            echo '<script>alert("Wrong password!")</script>';
        } 
    }    
    
    
    