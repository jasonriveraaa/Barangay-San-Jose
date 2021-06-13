<h1 class="page-header">List of Uploaded Announcement Image</h1>
<div class="table-responsive">
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th>ID</th>
                <th>Image</th>
                <th>Operation</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $sql = "SELECT * FROM tbl_announcement";
                $result = mysqli_query($con,$sql);

                while($row = mysqli_fetch_assoc($result)){

            ?>
            <tr>
                <td><?php echo $row['announcement_id']?></td>
                <td><img width="50" height="50" src="../img/announcement/<?php echo $row['announcement_img']?>"></td>
                <td><a class="btn btn-danger" href="?delete=<?php echo $row['announcement_id']?>"><span class="fas fa-trash-alt"></span></a></td>
            </tr>
            <?php

                }

                if (isset($_GET['delete'])) {
                    $Del = $_GET['delete'];
                    $Sql = "DELETE FROM tbl_announcement WHERE announcement_id='$Del'";
                    $result = mysqli_query($con,$Sql);

                    if ($result) {
                        header("location: admin_announcement.php");
                    }
                }
            
            ?>

        </tbody>
    </table>
</div>                        


