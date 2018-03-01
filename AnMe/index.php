
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, height=900%">
    <meta name="description" content="Anime,anime list, top anime shows">
    <meta name="author" content="Mayuresh Konda, Atul Khetan">    
  
    <title>Login</title>
    
    <link rel="icon" href="image/index.png">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/signin.css" rel="stylesheet">
  </head>
  
  <body class="text-center">
    
    <form class="form-signin" method="post" action = "php/login.php">
    
      <h3 style="font-family:kgel">いらっしゃいませ</h3>
      <p>Infos for anime otaku</p>
      <img class="mb-4 center" src="image/index2.png" alt="" width="100%" height="100%">
      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
      
      <label for="inputEmail" class="sr-only">Email address</label>     
      <input type="email" id="inputEmail" name="inputEmail" class="form-control" placeholder="Email address" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="Password" required>
      
      <?php
      	session_start();        
      	if(isset($_SESSION['status']) and $_SESSION['status']=="false"){
          	echo '<small id="passwordHelpInline" class="text-muted">
          		<font color="red">Wrong Email or Password !</font>
        			</small>';
        }
      ?>
      
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" name="rememberme" value="true">Remember me
        </label>
      </div>
      
      <button class="btn btn-lg btn-success btn-block" type="submit">Sign in</button>
      <button class="btn btn-lg btn-primary btn-block" onclick="window.location.href='http://anme4anime.rf.gd/php/signup.php'">Sign up</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
      <small><a href="http://anme4anime.rf.gd/php/logout.php">Clear session</a></small>
    </form>
  </body>
</html>
