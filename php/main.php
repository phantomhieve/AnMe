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
                    // CardDeck function component added here
                    include 'components/carddeck.com.php';
                    // CardDeck function component added here
                    $page = 1;
                    if(!empty($_REQUEST['page']))
                        $page = $_REQUEST['page'];
                    $maxChars = 128;
                    for($i = 0; $i < $elements_per_page; $i++){

                        // sql part here need to change-----
                        $id_anime = ($elements_per_page * ($page - 1)) + 1 + $i;
                        $sql = "select name,description,image,rating from anime_list where id=$id_anime";
                        $row = mysqli_fetch_array($conn->query($sql));
                        // sql part here need to change-----

                        // data from the data base----
                        if(empty($row))
                            break;
                        $name = $row[0];
                        $desc = $row[1];

                        if(strlen($desc)>=$maxChars)
                            $desc = substr($row[1],0,$maxChars-3)."...";
                        // data from the data base----
                        cardDeck($row[2],$name,$desc,$row[3]);
                    }
                ?>
            </div>
        </div>
    </div>
    <!--Button component added here-->
    <?php include 'components/button.com.php'?>
    <!--Button component added here-->
</main>
<!--Footer component added here-->
<?php include 'components/footer.com.php'?>
<!--Footer component added here-->