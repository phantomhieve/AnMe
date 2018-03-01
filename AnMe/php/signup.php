<?php
  include("config.php");
  include("globalFunctions.php");
  include("links.php");
  session_set_cookie_params(0);
  session_start();
  //did some changes here
  if(isset($_SESSION['insignup']) and $_SESSION['insignup']){ 
    $username = (isset($_POST["inputUser"]))?$_POST["inputUser"]:"";
    $email = (isset($_POST["inputEmail"]))?$_POST["inputEmail"]:"";
    $pwd = (isset($_POST["inputPassword"]))?$_POST["inputPassword"]:"";

    try{  
      $sql="select * from `user` where username='$username'";
      $result= $conn->query($sql);
      if($result->num_rows > 0){
        $_SESSION['userExists']="true";
      } 
      else {
        $sql = "INSERT INTO `user` VALUES (NULL, '$username', '$pwd', '$email');";
        $result = $conn->query($sql);

        if($result=="1")
          $_SESSION['signupsuccess']="true";
        $conn->close();
        redirect($login_php);
      }

    } 
    catch(Exception $e){
      echo $sql . "<br>" . $e->getMessage();
    }
  }
?>

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
        if(userName.length<3 || userName.length>10){
          alert("User Name must be 3-10 characters long");
          return false;
        }
        if( firstPass != secondPass){
          alert("Passwords do not Match");
          return false;
        }
        else if(firstPass.length <8 || firstPass.length >20){
          alert("Password must be 8-20 characters long");
          return false;
        }
        return true;
      }
    </script>
  </head>
  <body class="text-center">
    <form name= "signup" class="form-signin" method="post" action = "" onsubmit="return validateForm()">
      <img class="mb-4" src="../image/index2.png" alt="" width="200" height="200">
      <h1 class="h3 mb-3 font-weight-normal">Enter Details</h1>
      <label for="inputUser" class="sr-only">User Name</label>
      <input type="text" id="inputUser" name="inputUser" class="form-control" placeholder="User Name" required>
      <?php
      	if(isset($_SESSION['userExists']) and $_SESSION['userExists']=="true"){
          	echo '<small id="passwordHelpInline" class="text-muted">
          		<font color="red">Username already used.</font>
        		</small>';
        }
      ?>
      <label for="inputEmail" class="sr-only">Email address</label> 
      <input type="email" id="inputEmail" name="inputEmail" class="form-control" placeholder="Email address" required>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="Password" required>
      <label for="inputRePassword" class="sr-only">Re - Password</label>
      <input type="password" id="inputRePassword" name = "inputRePassword"class="form-control" placeholder="Re - Password" required>

      
      <small id="passwordHelpInline" class="text-muted" >
        User Name must be 3-10 characters long.<br>
        Password must be 8-20 characters long.
      </small>

      <br><br>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign up</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
    </form>
  </body>
</html>
<?php
  //and also here
  session_set_cookie_params(0);
  session_start();
  $_SESSION['insignup']=True;
?>
