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
<?php
    if(!empty($_REQUEST['edit']) && $_REQUEST['edit']=='true'){
        $_SESSION['edit'] = true;
    }
?>
<main role = "main">
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
                    <h6>Upload a different photo...</h6>
                    <input type="file" class="form-control" name ="inputImage">
                </div>
            </div>
            <!-- Right column -->
            <div class="col-md-9 personal-info">
                
                <div class="alert alert-info alert-dismissable">
                    <a class="panel-close close" data-dismiss="alert">×</a> 
                    <i class="fa fa-coffee"></i>
                    <?php
                        if(!empty($_REQUEST['signup']) && $_REQUEST['signup']=='success')
                            echo "<strong>Successfully</strong> Signed Up";
                        else
                            echo "Hello <strong>".$_SESSION['user_name']."</strong>"
                    ?>
                </div>
                <h3>Personal info</h3>
                <form class="form-horizontal" role="form" name ="profileEdit" method="POST" action = "includes/profile.inc.php">
                    <?php
                        $data = array(
                            array('First name:','text','inputFirstName',''),
                            array('Last name:','text','inputLastName','')
                        );
                        if(empty($_REQUEST['signup'])){
                            $data[0][3] = $_SESSION['user_firstName'];
                            $data[1][3] = $_SESSION['user_lastName'];
                        }
                        for($i=0;$i<2;$i++){
                            echo "<div class=\"form-group\">
                            <label class=\"col-lg-3 control-label\">".$data[$i][0]."</label><div class=\"col-lg-8\">
                            <input class=\"form-control\" type=\"".$data[$i][1]."\" value=\"".
                            $data[$i][3]."\" name=\"".$data[$i][2]. "\" required></div></div>";
                        }
                    ?>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Gender:</label>
                        <div class="col-lg-8">
                            <div class="ui-select">
                                <select id="user_time_zone" class="form-control" name="inputGender" >
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label"></label>
                        <div class="col-md-8">
                            <button class="btn btn-success" name= "submit" type="submit">Save Changes</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
<hr>
<!--Footer component added here-->
<?php include 'components/footer.com.php'?>
<!--Footer component added here-->