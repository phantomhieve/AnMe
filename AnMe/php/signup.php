<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Icon not added yet-->
    <link rel="icon" href="../image/index2.png">
    <!-- Icon not added yet-->
    <title>Sign Up</title>
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/signin.css" rel="stylesheet">
    <script language = "javascript">
      function validateForm(){
        var firstPass = document.forms["signup"]["inputPassword"].value;
        var secondPass = document.forms["signup"]["inputRePassword"].value;
        var userName= document.forms["signup"]["inputUser"].value;
        if(userName.length<5){
          alert("User Name must contain atleast 5 characters");
          return false;
        }
        if( firstPass != secondPass){
          alert("Passwords do not Match");
          return false;
        }
        else if(firstPass.length <8){
          alert("Password must contain atleast 8 characters");
          return false;
        }
        return true;
      }
    </script>
  </head>
  <body class="text-center">
    <form name= "signup" class="form-signin" method="POST" action = "includes/signup.inc.php" onsubmit="return validateForm()">
      <img class="mb-4" src="../image/index2.png" alt="" width="200" height="200">
      <h1 class="h3 mb-3 font-weight-normal">Enter Details</h1>
      
      <label for="inputUser" class="sr-only">User Name</label>
      <input type="text" id="inputUser" name="inputUser" class="form-control" placeholder="User Name" required>
      <label for="inputEmail" class="sr-only">Email address</label> 
      <input type="email" id="inputEmail" name="inputEmail" class="form-control" placeholder="Email address" required>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="Password" required>
      <label for="inputRePassword" class="sr-only">Re - Password</label>
      <input type="password" id="inputRePassword" name = "inputRePassword"class="form-control" placeholder="Re - Password" required>
      
      <?php
      if(!empty($_REQUEST['signup']) && $_REQUEST['signup']=='usertaken'){
        echo '<small id="passwordHelpInline" class="text-muted">
          		<font color="red">Username or Email already used.</font>
        		</small></br>';
      }
      ?>
      <small id="passwordHelpInline" class="text-muted" >
        User Name must be atleast 5 characters long.<br>
        Password must be atleast 8 characters long.
      </small>
      <br><br>
      <button class="btn btn-lg btn-primary btn-block" name ="submit" type="submit">Sign up</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
    </form>
  </body>
</html>
