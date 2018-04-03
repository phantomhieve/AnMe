<?php
  session_start();
  if(!isset($_SESSION['user_id'])){
     header("Location: ../index.php");
  }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../image/index2.png">
    <title>Display</title>

    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/main.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/view.css">
  </head>
  <body onunload="destroy()">
    <script language="javascript">
      function destroy()
      {
        window.open('destroy.php');
      }
    </script>

    <!-- Navbar Component Added Here -->
    <?php include 'components/navbar.php';?>
    <!-- Navbar Component Added Here -->
    <div class="row">
      <!--image field-->
      <div class="col-md-12">
        <div class="img">
          <img src="../image/test.jpg" class = "img-fluid mx-auto d-block" alt="Otaku-Forever">
        </div>
      </div>
      <!--text field-->
      <div class="container ">
        <div class="col-md-12">
          <div class="text">
            <p>Name</p></br>
            <p>Name</p></br>
            <p>Name</p></br>
            <p>Name</p></br>
            <p>Name</p></br>
          </div>
        </div>
      </div>
    </div>
    <div style = "padding: 2rem;"></div>
    <!--Footer component added here-->
    <?php include 'components/footer.php'?>
    <!--Footer component added here-->
    <!-- Bootstrap core JavaScript
================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../js/popper.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="../js/holder.min.js"></script>
  </body>
</html>