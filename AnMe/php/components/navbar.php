<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="<?php include("links.php"); echo $main_php?>">AnMe</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="<?php include("links.php"); echo $profile_html?>">
              <?php echo (isset($_SESSION['username']))?$_SESSION['username']:"Otaku"; ?>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="<?php include("links.php"); echo $addcontent_html?>">Add Content </a>
        </li>
        <!-- Only for moderator hide for others-->
        <?php
            //set a variable for moderator
            $moderator = True;
            if ($moderator){
                echo "<li class= \" nav-item \">";
                echo " <a class= \" nav-link active \" href=\" $review_html \"> Review </a>";
                echo "</li>";
            }
        ?>
        <!-- Only for moderator hide for others-->
        <li class="nav-item">
            <a class="nav-link active" href="<?php include("links.php"); echo $logout_php?>">Logout</a>
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