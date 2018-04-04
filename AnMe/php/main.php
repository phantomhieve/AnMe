<!-- Navbar Component Added Here -->
<?php include 'components/header.com.php';?>
<!-- Navbar Component Added Here -->

<main role="main">
    
    <!-- Jumbotron component added Here -->
    <?php include 'components/jumbotron.com.php';?>
    <!-- Jumbotron component added Here -->
    
    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row">
                <?php
                    //what page to display
                    $page = 1;
                    if(!empty($_REQUEST['page']))
                        $page = $_REQUEST['page'];
                    
                    for ($i = 0;$i< 9;$i++){
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
                        echo '</div></div></div></div>';
                    }
                ?>
            </div>
            <!--Button component added here-->
            <?php include 'components/button.com.php'?>
            <!--Button component added here-->
        </div>
    </div>
</main>
<!--Footer component added here-->
<?php include 'components/footer.com.php'?>
<!--Footer component added here-->
