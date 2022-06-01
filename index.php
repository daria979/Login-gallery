<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_index.css">
    <link rel="stylesheet" href="style_generator.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
   
    <title>Login-gallery</title>
</head>
<body>

   <form action="login.php" method="POST">
      <input id="login" type="radio" name="tab"/>
      <label class="tab_label" for="login">log in</label>
      <!--<input id="signup" type="radio" name="tab"/>
      <label class="tab_label" for="signup">sign up</label>-->

      <figure class="reveal_login">
        <p>Please log in with your account.</p>
        
        <input type="text"  placeholder="E-mail" name="email"/>
        <input type="password" placeholder="Password" name="password"/> 

        <!--<input id="logged_in" type="checkbox"/>
        <label class="content_label" for="logged_in">Keep me logged in</label>-->

        <button class="button-5" type="submit" name="login">Log in</button>
      </figure>  

</form>
<form action="signup.php" method="POST">
      <!--<input id="login" type="radio" name="tab"/>
      <label class="tab_label" for="login">log in</label>-->
      <input id="signup" type="radio" name="tab"/>
      <label class="tab_label" for="signup">sign up</label> 

      <figure class="reveal_signin">
        <p>You can register a new account.</p>     

        <input type="text"  placeholder="Name" name="surname"/>
        <input type="text"  placeholder="Username" name="firstname"/>
        <input type="text"  placeholder="E-mail" name="email"/>
        <input type="password" placeholder="Password" name="password"/> 

        <button class="button-5" type="submit" name="submit">Sign up</button>
      </figure>
</form>



<div class="container">
      <h2>Password Generator</h2>
      <div class="result-container">
        <span id="result"></span>
        <button class="btn" id="clipboard">
          <i class="far fa-clipboard"></i>
        </button>
      </div>
      <div class="settings">
        <div class="setting">
          <label>Password Length</label>
          <input type="number" id="length" min="4" max="20" value="20">
        </div>
        <div class="setting">
          <label>Include uppercase letters</label>
          <input type="checkbox" id="uppercase" checked>
        </div>
        <div class="setting">
          <label>Include lowercase letters</label>
          <input type="checkbox" id="lowercase" checked>
        </div>
        <div class="setting">
          <label>Include numbers</label>
          <input type="checkbox" id="numbers" checked>
        </div>
        <div class="setting">
          <label>Include symbols</label>
          <input type="checkbox" id="symbols" checked>
        </div>
      </div>

      <button class="btn btn-large" id="generate">
        Generate Password
      </button>
    </div>
    <script src="app.js"></script>

</body>
</html>