<h1 class="page-header">List of Uploaded Carousel Image</h1>
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
                $sql = "SELECT * FROM tbl_carousel";
                $result = mysqli_query($con,$sql);

                while($row = mysqli_fetch_assoc($result)){

            ?>
            <tr>
                <td><?php echo $row['carousel_id']?></td>
                <td><img width="50" height="50" src="../img/carousel/<?php echo $row['carousel_img']?>"></td>
                <td><a class="btn btn-danger" href="?delete=<?php echo $row['carousel_id']?>"><span class="fas fa-trash-alt"></span></a></td>
            </tr>
            <?php

                }

                if (isset($_GET['delete'])) {
                    $Del = $_GET['delete'];
                    $Sql = "DELETE FROM tbl_carousel WHERE carousel_id='$Del'";
                    $result = mysqli_query($con,$Sql);

                    if ($result) {
                        header("location: admin_carousel.php");
                    }
                }
            
            ?>

        </tbody>
    </table>
</div>                        


