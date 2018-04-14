<style>
    @media only screen and (min-width: 768px) {
        body{
            padding-bottom: 5rem;
        }
  }
}
</style>
<!-- Navbar Component Added Here -->
<?php include 'components/header.com.php';?>
<!-- Navbar Component Added Here -->
<main role ="main">
    <div class="container">
        <h1>
            <?php 
                echo $_SESSION['user_name'];
                    if ($_SESSION['user_moderator']==1)
                        echo "  (Mod)";
            ?>
        </h1>
        <hr>
        <div class="row">
            <!-- left column -->
            <div class="col-md-3">
                <div class="text-center">
                    <img data-src="holder.js/200x200?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" class="img-fluid" alt="avatar">
                </div>
            </div>
        
            <!-- right column -->
            <div class="col-md-9 personal-info">

                <div class="alert alert-info alert-dismissable">
                    <a class="panel-close close" data-dismiss="alert">×</a> 
                    <i class="fa fa-coffee"></i>
                    <?php
                        if(!empty($_REQUEST['edit']) && $_REQUEST['edit']=='success')
                            echo "<strong>Information Updated</strong> ";
                        else
                            echo "Hello <strong>".$_SESSION['user_name']."</strong>"
                    ?>
                </div>
                <u><h3>Otaku <?php echo $_SESSION['user_name'];?></h3></u>
                <div class="row">
                    <div class="col-xs-6 col-md-6">
                        <div class="container">
                            <h4>Name: <h4>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-6">
                        <div class="container">
                        <h4><?php echo $_SESSION['user_firstName']." ".$_SESSION['user_lastName']; ?> <h4>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-xs-6 col-md-6">
                        <div class="container">
                            <h4>Gender: <h4>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-6">
                        <div class="container">
                        <h4><?php echo $_SESSION['user_gender'];?> <h4>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-xs-6 col-md-6">
                        <div class="container">
                            <h4>Email:<h4>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-6">
                        <div class="container">
                        <h4><?php echo $_SESSION['user_email'];?> <h4>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-xs-6 col-md-6">
                        <div class="container">
                            <h4>Total Contributions: <h4>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-6">
                        <div class="container">
                        <h4><?php echo $_SESSION['user_contribution'];?> <h4>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="col-md-8 text-center">
                    <button class="btn btn-primary btn-lg" onclick="location.href = 'profile.edit.php?edit=true'">Edit</button>
                </div>
            </div>
    </div>
    <hr>
</div>    
</main>
<!--Footer component added here-->
<?php include 'components/footer.com.php'?>
<!--Footer component added here-->