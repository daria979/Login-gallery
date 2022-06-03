<?php
    include_once 'server.php';

    if(isset($_POST['submit'])){

        $titlePost = $_POST['title'];
        $descPost = $_POST['content'];

        $fileName = $_FILES["file"]["name"];
        $imageTempLoc = $_FILES["file"]["tmp_name"];

        $image = base64_encode(file_get_contents($imageTempLoc));

        if( empty($titlePost) || empty($descPost)){
            echo '<script>alert("All fields are required!")</script>';
        }else{
            $sql = "INSERT INTO detail_post (titlepost, descpost, imgFullNameGallery) VALUES ('$titlePost', '$descPost', '$image');";
            //move_uploaded_file($_FILES["file"]["name"],"images/".$_FILES["file"]["name"]);
            mysqli_query($conn, $sql);
            header("Location: feed.php");
        }





    }
