<!-- Navbar Component Added Here -->
<?php
    include 'components/header.com.php';
    include 'includes/db.inc.php';

    $elements_per_page = 9;
?>
<!-- Navbar Component Added Here -->

<main role="main">
    
    <!-- Jumbotron component added Here -->
    <?php include 'components/jumbotron.com.php';?>
    <!-- Jumbotron component added Here -->
    
    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row">
            <?php

            
                $page = 1;
                if(!empty($_REQUEST['page']))
                    $page = $_REQUEST['page'];

                $maxChars = 128;

                for($i = 0; $i < $elements_per_page; $i++){
                    
                    $id_anime = ($elements_per_page * ($page - 1)) + 1 + $i;
                    


                    $sql = "select name,description,image,rating from anime_list where id=$id_anime";
                    $row = mysqli_fetch_array($conn->query($sql));
                    if(empty($row)){
                        break;
                    }
                    $name = $row[0];
                    $desc = $row[1];

                    if(strlen($desc)>=$maxChars)
                        $desc = substr($row[1],0,$maxChars-3)."...";
                            
                    echo '<div class="col-md-4">';
                    echo '<div class="card mb-4 box-shadow">';
                    
                    //change here for image
                    echo '<img height="300" width="300"class="card-img-top" src="data:image;base64,'.$row[2].'" alt="'.$name.'">';
                    echo '<div class="card-body">';
                    
                    //change here for text
                    echo '<p class="card-text">'.$desc.'</p>';
                    echo '<div class="d-flex justify-content-between align-items-center">';
                    echo '<div class="btn-group">';
                    
                    //here for functionality
                    echo '<button type="button" class="btn btn-sm btn-outline-secondary">View</button>';
                    echo '<button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>';
                    echo '</div>';
                    echo '<small class="text-muted">'.$row[3].'/10.0</small>';
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