<style>
@media (min-width:781px) {
  .padButton{
    padding-bottom: 2.5rem;
  }
  .page-link:hover{
        background-color: #17a2b8;
        color: #fff;
    }
}
</style>
<div class="row">
    <div class="col-md-12 padButton" >
        <ul class="pagination float-right">
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
                //need to change here for total pages globals
                $total_pages = 2;

                $start = 0;
                $can_go = min(((bool)($total_pages/5))*5,$total_pages);
                if(!empty($_REQUEST['page']))
                    $start = $_REQUEST['page'];
                $start =max($start,1);
                $start = (ceil($start/5)-1)*5+1;
                $end = min($start+$can_go,$total_pages+1);
                if($start>$end-$can_go)
                    $start = $end-5;
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
                    //need to change here for total pages globals
                    $total_pages = 2;
                    
                    $page =1;
                    if(!empty($_REQUEST['page']))
                        $page = $_REQUEST['page']+1;
                    $page = min($page,$total_pages);
                    echo "main.php?page=".$page;
                ?>
            ">Next</a></li>
        </ul>
    </div>
</div>