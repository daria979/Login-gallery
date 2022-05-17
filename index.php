<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <title>Login-gallery</title>
</head>
<body>
   <form action="signup.php" method='POST'>
      <input id="login" type="radio" name="tab"/>
      <label class="tab_label" for="login">log in</label>
      <input id="signup" type="radio" name="tab"/>
      <label class="tab_label" for="signup">sign up</label>  
      <!--<figure class="reveal_login">
        <p>Please log in with your account.</p>
        <input type="text" placeholder="user"/>      
        <input type="password" placeholder="password"/> 
        <input id="logged_in" type="checkbox"/>
        <label class="content_label" for="logged_in">Keep me logged in</label>
        <input type="submit" value="Log in"/>
      </figure>-->  
      <figure class="reveal_signin">
        <p>You can register a new account.</p>     
        <input type="text"  placeholder="Surname" name="surname"/>
        <input type="text"  placeholder="Last Name" name="firstname"/>
        <input type="text"  placeholder="E-mail" name="email"/>
        <input type="password" placeholder="Password" name="password"/> 

        <button type="submit" name="submit">Sign in</button>
      </figure>
    </form>

</body>
</html>