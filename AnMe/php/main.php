<?php
  include("globalFunctions.php");
  include("links.php");

  start_session();
  if($_SESSION['status']=='false'){
    redirect($root);
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
    <link href="../css/navbar-top-fixed.css" rel="stylesheet">
    <title>Display</title>

    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/main.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="#">AnMe</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <!--Show username -->
          <li class="nav-item active">
            <a class="nav-link" href="#">Profile</a>
          </li>
          <!--Show username -->
          <li class="nav-item">
            <a class="nav-link active" href="#">Add Content </a>
          </li>
          <!-- Only for moderator hide for others-->
          <li class="nav-item">
            <a class="nav-link active" href="#">Review </a>
          </li>
          <!-- Only for moderator hide for others-->
        </ul>
        <form class="form-inline mt-2 mt-md-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>
    <main role="main">
      <section class="jumbotron text-center">
        <div class="container" style = "height:150px;">
          <h1 class="jumbotron-heading">Anime List</h1>
          <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don't simply skip over it entirely.</p>
        </div>
      </section>
      <div class="album py-5 bg-light">
        <div class="container">
          <div class="row">

            <?php
            /*
            start = global[counter]*9
            end = min(start + 9,len(table))
            */
            for ($i = 0;$i< 5;$i++){
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
    <footer class="text-muted">
      <div class="container">
        <p class="float-right">
          <a href="#">Back to top</a>
        </p>
        <p>Album example is &copy; Bootstrap, but please download and customize it for yourself!</p>
        <p>New to Bootstrap? <a href="../../">Visit the homepage</a> or read our <a href="../../getting-started/">getting started guide</a>.</p>
      </div>
    </footer>

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
