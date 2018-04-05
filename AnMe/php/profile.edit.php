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
                        function printTags($data,$till){
                            for($i=0;$i<$till;$i++){
                                echo "<div class=\"form-group\">
                                <label class=\"col-lg-3 control-label\">".$data[$i][0]."</label><div class=\"col-lg-8\">
                                <input class=\"form-control\" type=\"".$data[$i][1]."\" value=\"".
                                $data[$i][3]."\" name=\"".$data[$i][2]. "\" required></div></div>";
                            }
                        }
                        $array = array(
                            array('First name:','text','inputFirstName',''),
                            array('Last name:','text','inputLastName','')
                        );
                        printTags($array,2);
                    ?>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Gender:</label>
                        <div class="col-lg-8">
                            <div class="ui-select">
                                <select id="user_time_zone" class="form-control" name="inputGender" >
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <?php
                        if(empty($_REQUEST['signup'])){
                            session_start();
                            $array = array(
                                array('Email:','email','inputEmail',$_SESSION['user_email']),
                                array('Password:','password','inputPassowrd',''),
                                array('Confirm password:','password','inputRePassword','')
                            );
                            printTags($array,3);
                        }
                    ?>
                    <div class="form-group">
                        <label class="col-md-3 control-label"></label>
                        <div class="col-md-8">
                            <button class="btn btn-success" name= "submit" type="submit">Save Changes</button>
                            <?php
                                if(empty($_REQUEST['signup']))
                                    echo "<input type=\"reset\" class=\"btn btn-default\" value=\"Cancel\">"; 
                            ?>
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