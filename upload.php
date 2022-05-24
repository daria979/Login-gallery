<?php
    include_once 'server.php';

    if(isset($_POST['submit'])){

        $titlePost = $_POST['title'];
        $descPost = $_POST['content'];

        //$newFileName = $_POST['filename'];
        
        //$fileName = $file["name"];
        //$fileExt = explode(".", $fileName);

        //$fileName = basename($path, ".php");
        //$fileTempName = $file["tmp_name"];

        $fileName = $_FILES["file"]["name"];
        if( empty($titlePost) || empty($descPost)){
            echo '<script>alert("All fields are required!")</script>';
        }else{
            $sql = "INSERT INTO detail_post (titlepost, descpost, imgFullNameGallery) VALUES ('$titlePost', '$descPost', '$fileName');";
            mysqli_query($conn, $sql);
            header("Location: content.php?upload=succes");
            //echo '<script>alert("All GOOOOOD!!!!")</script>';

        }

        //ERROR MESSAGES

        
        /*
        $fileType = $file["type"];
        $fileTempName = $file["tmp_name"];
        $fileError = $file["error"];
        $sileSize = $file["size"];

        
        $fileActualExt = strtolower((end($fileExt)));

        $allowed = array("jpg", "jpeg", "png");

        if(in_array($fileActualExt, $allowed)){
            if($fileError === 0){
                if($fileSize > 2000000){
                    include_once "dbcode.sql";
                }
                else{
                    echo '<script>alert("File size is too big!")</script>';
                    exit();
                }
            }else{
                echo '<script>alert("You had an error!")</script>';
                exit();
            }
        }else{
            echo '<script>alert("You need to upload a proper file type")</script>';
            exit();
        }*/



    }
