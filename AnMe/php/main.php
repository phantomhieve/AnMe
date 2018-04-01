<?php
/*include("links.php");
include("globalFunctions.php");

session_start();

if(!isset($_SESSION['status']))
  redirect($root);
else if($_SESSION['status']=="false")
  redirect($root);*/
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
    
    <main role="main">
      <!-- Jumbotron component added Here -->
      <?php include 'components/jumbotron.php';?>
      <!-- Jumbotron component added Here -->

      <div class="album py-5 bg-light">
        <div class="container">
          <div class="row">
            <?php
              /*
              start = global[counter]*9
              end = min(start + 9,len(table))
              */
              for ($i = 0;$i< 18;$i++){
                echo '<div class="col-md-4">';
                echo '<div class="card mb-4 box-shadow">';
                //change here for image
                echo '<img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">';
                echo '<div class="card-body">';
                //change here for text
                echo '<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>';
                echo '<div class="d-flex justify-content-between align-items-center">';
                echo '<div class="btn-group">';
                //here for functionality
                echo '<button type="button" class="btn btn-sm btn-outline-secondary">View</button>';
                echo '<button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>';
                echo '</div>';
                echo '<small class="text-muted">9 mins</small>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
              }
            ?>
            <div class ="container">
              <div class="btn-group float-right">
                <button type="button" class="btn btn-md btn-outline-primary">Previous</button>
                <button type="button" class="btn btn-md btn-outline-success">Next</button>
                <?php
                /*
                on click of button pre check if start not 0 decrement 1 and refresh
                on click of button next increment if ceil(len(table)/9)> start ; start+=1
                */
                ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
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
