<h1 class="page-header">List of Resolutions</h1>
<div class="table-responsive">
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>File Name</th>
                <th>Date</th>
                <th colspan=2>Operation</th>
            </tr>
        </thead>
        <tbody>
            <?php 

                if (isset($_GET['pageno'])) {
                    $pageno = $_GET['pageno'];
                } else {
                    $pageno = 1;
                }
                $no_of_records_per_page = 10;
                $offset = ($pageno-1) * $no_of_records_per_page;


                $total_pages_sql = "SELECT COUNT(*) FROM tbl_resolution";
                $result = mysqli_query($con,$total_pages_sql);
                $total_rows = mysqli_fetch_array($result)[0];
                $total_pages = ceil($total_rows / $no_of_records_per_page);

                $sql = "SELECT * FROM tbl_resolution ORDER BY `resolution_id` DESC LIMIT $offset, $no_of_records_per_page";
                $result = mysqli_query($con,$sql);

                while($row = mysqli_fetch_array($result)){

            ?>
            <tr>
                <td><?php echo $row['resolution_id']?></td>
                <td><?php echo $row['resolution_title']?></td>
                <td><?php echo $row['resolution_file']?></td>
                <td><?php echo $row['resolution_date']?></td>
                <td><a class="btn btn-danger" href="admin_resolution.php?delete=<?php echo $row['resolution_id']?>"><span class="fas fa-trash-alt"></span></a></td>
                <td><a class="btn btn-success" href="admin_resolution.php?opt=edit_resolution&r_id=<?php echo $row['resolution_id']?>"><span class="fas fa-edit"></span></a></td>
            </tr>
            <?php

                }

                if (isset($_GET['delete'])) {
                    $Del = $_GET['delete'];
                    $Sql = "DELETE FROM tbl_resolution WHERE resolution_id='$Del'";
                    $result = mysqli_query($con,$Sql);

                    if ($result) {
                        header("location: admin_resolution.php");
                    }
                }
            
            ?>

        </tbody>
    </table>

    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
            <li class="page-item <?php if($pageno <= 1){ echo 'disabled'; }?>">
                <a class="page-link" href="<?php if($pageno > 1){ echo "?pageno=".($pageno - 1); }?>">Previous</a>
            </li>
            
            
            <?php
                
                for($i=1; $i<=$total_pages; $i ++){
                    if($pageno==$i)
                    {
                        $c=" active";
                    }
                    else
                    {
                        $c="";
                    }
                    echo'<li class="page-item'.$c.'"><a class="page-link" href="?pageno='.$i.'">'.$i.'</a></li>';
                }     
            ?>

            <li class="page-item <?php if($pageno >= $total_pages){ echo 'disabled'; }?>">
                <a class="page-link" href="<?php if($pageno < $total_pages){ echo "?pageno=".($pageno + 1); }?>">Next</a>
            </li>
        </ul>
    </nav>

</div>                        


