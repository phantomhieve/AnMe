<?php
// This part caused some error in *my pc*... check in yours
// include_once '../includes/db.inc.php';
// $total_pages = mysqli_fetch_array($conn->query("select count(name) from anime_list"))[0];
$total_pages = 21; 

$elements_per_page = 3;
                    
?>

<style>
.pageB{
    margin-top: 2rem; 
    margin-right: 2rem;
    padding-bottom: 2.5rem;
}
.page-link:hover{
    background-color: #17a2b8;
    color: #fff;
}
</style>

<div class="row pageB">
    <div class="col-md-12 padButton" >
        <ul class="pagination float-right place">
            <li class="page-item"><a class="page-link" href="
                <?php 
                    $page =1;
                    if(!empty($_REQUEST['page']))
                        $page = $_REQUEST['page'] -1 ;
                    $page = max(1,$page);
                    echo "main.php?page=".$page;
                ?>
            ">Previous</a>
            </li>
            
            <?php 
                $page = 1;
                if(!empty($_REQUEST['page']))
                    $page = max($_REQUEST['page'],1);
                $page = min($page,$total_pages);
                $start = (int)(ceil($page/5)-1);
                $start = $start*5+1;

                // changed the way the $total_pages will be calculated
                $end = min($start+5,$total_pages/$elements_per_page + 1);
                for($i= $start;$i<$end;$i++){
                    if($i==$_REQUEST['page'])
                        echo "<li class=\"page-item active\">";
                    else
                        echo "<li class=\"page-item\">";
                    echo"<a class=\"page-link\" href=\"main.php?page=$i\">$i</a></li>";
                }
            ?>
            
            <li class="page-item"><a class="page-link" href="
                <?php 
                    $page = 1;
                    if(!empty($_REQUEST['page']))
                        $page = $_REQUEST['page']+1;
                    $page = min($page,$total_pages);
                    echo "main.php?page=".$page;
                ?>
            ">Next</a></li>
        </ul>
    </div>
</div>
