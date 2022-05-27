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
        $imageTempLoc = $_FILES["file"]["tmp_name"];

        $image = base64_encode(file_get_contents($imageTempLoc));
        //echo $image;
        if( empty($titlePost) || empty($descPost)){
            echo '<script>alert("All fields are required!")</script>';
        }else{
            $sql = "INSERT INTO detail_post (titlepost, descpost, imgFullNameGallery) VALUES ('$titlePost', '$descPost', '$image');";
            move_uploaded_file($_FILES["file"]["name"],"images/".$_FILES["file"]["name"]);
            mysqli_query($conn, $sql);
            header("Location: feed.php");
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
                if($fileSize < 2000000){
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
