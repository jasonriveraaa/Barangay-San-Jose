<h1 class="page-header">
    News
    <small>View All</small>
</h1>
<div class="table-responsive">
    <table class="table table-striped table-sm">
        <thead>
            <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Description</th>
            <th>Content</th>
            <th>Image</th>
            <th>Author</th>
            <th>Date</th>
            <th>Tag</th>
            <th colspan=2>Operation</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $sql = "SELECT * FROM news_card ORDER BY card_date DESC";
                $result = mysqli_query($con,$sql);

                while($row = mysqli_fetch_assoc($result)){

                    $old_img = $row['card_img'];

            ?>
            <tr>
                <td><?php echo $row['card_id']?></td>
                <td><?php echo $row['card_title']?></td>
                <td><?php echo $row['card_desc']?></td>
                <td><?php echo $row['card_content']?></td>
                <td><img width="50" height="50" src="../img/news/<?php echo $row['card_img']?>"></td>
                <td><?php echo $row['card_author']?></td>
                <td><?php echo $row['card_date']?></td>
                <td><?php echo $row['card_tag']?></td>
                <td><a class="btn btn-danger" href="admin_news.php?delete=<?php echo $row['card_id']?>"><span class="fas fa-trash-alt"></span></a></td>
                <td><a class="btn btn-success" href="admin_news.php?opt=edit_news&n_id=<?php echo $row['card_id']?>"><span class="fas fa-edit"></span></a></td>
            </tr>
            <?php

                }

                if (isset($_GET['delete'])) {
                    $Del = $_GET['delete'];
                    $Sql = "DELETE FROM news_card WHERE card_id='$Del'";
                    $result = mysqli_query($con,$Sql);

                    if ($result) {

                        unlink("../img/news/$old_img");
                        header("location: admin_news.php");
                    }
                }
            
            ?>

        </tbody>
    </table>
</div>                        


