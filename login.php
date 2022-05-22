<?php
    //$email = $_POST['email'];
    //$password = $_POST['password'];
    include_once 'server.php';

    if (isset ($_POST ['login'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        //isset($cOTLdata['char_data']);
        //$len = isset($cOTLdata['char_data']) ? count($cOTLdata['char_data']) : 0;

        //$pass = "SELECT pwd FROM userdata WHERE email=?";

        //ERROR Messages
        
        if(empty($email)  || empty($password)){
            echo '<script>alert("All fields are required!")</script>';
        }
        else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo '<script>alert("Invalid email format!")</script>';
        }//de modificat acest if!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
        else if (password_verify($password, $pass)) {
            header("Location: content.php");
        }/////////////////////////////////////////////////////////////////////////////////////////////////
        }else{
            echo '<script>alert("NUUUUUUUUU E BUN!")</script>';
            exit();
        }
    
    
    