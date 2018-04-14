<?php
  session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0">
    <meta name="description" content="Anime,anime list, top anime shows">
    <meta name="author" content=" Atul Khetan ,Mayuresh Konda">    
    <title>Login</title>
    <link rel="icon" href="image/index.png">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    <form name = "login" class="form-signin" method="POST" action = "php/includes/login.inc.php">
      <h3 style="font-family: aa">いらっしゃいませ</h3>
      <p style="font-family: kgel">Infos for anime otaku</p>
      <img class="mb-2 center" src="image/index2.png" alt="" width="200px" height="200px">
      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
      
      <label for="inputUser" class="sr-only">User Name</label>     
      <input type="text" id="inputUser" name="inputUser" class="form-control" placeholder="User Name / Email Address" required >
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="Password" required>
      <?php        
      	if(!empty($_REQUEST['login']) && $_REQUEST['login']=='error'){
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
      <button class="btn btn-lg btn-success btn-block" name= "submit" type="submit">Sign in</button>
      <button class="btn btn-lg btn-primary btn-block" type= "button" onclick="location.href = 'php/signup.php'">Sign up</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
    </form>
  </body>
</html>
