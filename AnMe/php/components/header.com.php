<?php
  session_start();
  if(!isset($_SESSION['user_name'])){
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
  </head>
  <body onunload="destroy()">
    <script language="javascript">
      function destroy()
      {
        window.open('destroy.php');
      }
    </script>
    <!--Navbar starts here-->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="main.php?page=1">AnMe</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="profile.php">
                <?php echo (isset($_SESSION['user_name']))?$_SESSION['user_name']:"Otaku"; ?>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="<?php include("links.php"); echo $addcontent_html?>">Add Content </a>
            </li>
            <?php
                session_start();
                $moderator = 0;
                if(isset($_SESSION['user_moderator']))
                    $moderator = $_SESSION['user_moderator'];
                if ($moderator==1){
                    echo "<li class= \" nav-item \">";
                    echo " <a class= \" nav-link active \" href=\" $review_html \"> Review </a>";
                    echo "</li>";
                }
            ?>
            <li class="nav-item">
                <a class="nav-link active" href="includes/logout.inc.php">Logout</a>
            </li>
        </ul>
            <!--- Lets leave this for Now
            <form class="form-inline mt-2 mt-md-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
            -->
        </div>
    </nav>
    <!--Navbar ends here-->