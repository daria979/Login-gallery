<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_content.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
   
    <title>Login-gallery</title>
</head>
<body>
    <ul>
        <li><a class="active" href="#">Home</a></li>
        <li><a href="#">Log in / Sign up</a></li>
        <li><a href="logout.php">Log out</a></li>
      </ul>




      <div class="wrapper">
        <div class="blog_post">
          <div class="img_pod">
            <img src="https://png.pngtree.com/png-vector/20190114/ourlarge/pngtree-vector-avatar-icon-png-image_313572.jpg" alt="random image">
          </div>
              <form action="upload.php" method="POST" enctype="multipart/form-data">
                <label>Title:</label>
                <input type="text" name="title" /><br><br>
                <label>Content:</label>
                <textarea name ="content"rows="10" cols="30" placeholder="Scrie aici ce mesaj doreşti"> </textarea>

                <div class="container">
                  <input type="file" name="file" class="btn" placeholder="Add images">
                  <img style="align-items:center; display:flex;" src="https://cdn4.iconfinder.com/data/icons/social-communication/142/add_photo-512.png">
                </div>
                <button class="btn_primary" type="submit" name="submit">Post</button>
              </form>
          </div>
        </div>
      </div>
      

      <footer>
        <p>Copyright &copy; 2022 Trip Daria & Eros Alexandra</p>
          </footer>
</body>
    </html>