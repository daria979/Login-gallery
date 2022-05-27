<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_feed.css">

    <title>Document</title>
</head>
<body>


<?php

    include_once 'server.php';

    $sql = "SELECT * FROM detail_post ORDER BY idpost DESC";

    $stmt = mysqli_stmt_init($conn);

    
    if(!mysqli_stmt_prepare($stmt, $sql)){
        echo "SQL statement failed!";
    }
    else{
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        while($row = mysqli_fetch_assoc($result)){

            echo '<section class="user_post">

            <h3 class="title-post post">'.$row["titlepost"].'</h3>
            
            <div class="desc-post post">'.$row["descpost"].'</div>
           
            <img src="data:image;base64,'.$row["imgFullNameGallery"].'" class="img-post post">
            
    
         </section>';
        }
    }

   
?>
   
    
     

    
</body>
</html>