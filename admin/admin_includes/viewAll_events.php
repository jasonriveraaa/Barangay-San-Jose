<h1 class="page-header">
    Events
    <small>View All</small>
</h1>
<div class="table-responsive">
    <table class="table table-striped table-sm">
        <thead>
            <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Description</th>
            <th>Image</th>
            <th>Location</th>
            <th>Date</th>
            <th>Time</th>
            <th colspan=2>Operation</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $sql = "SELECT * FROM tbl_events";
                $result = mysqli_query($con,$sql);

                while($row = mysqli_fetch_assoc($result)){

                    $old_img = $row['event_img'];

            ?>
            <tr>
                <td><?php echo $row['event_id']?></td>
                <td><?php echo $row['event_title']?></td>
                <td><?php echo $row['event_description']?></td>
                <td><img width="50" height="50" src="../img/events/<?php echo $row['event_img']?>"></td>
                <td><?php echo $row['event_location']?></td>
                <td><?php echo $row['event_date']?></td>
                <td><?php echo $row['event_time']?></td>
                <td><a class="btn btn-danger" href="admin_events.php?delete=<?php echo $row['event_id']?>"><span class="fas fa-trash-alt"></span></a></td>
                <td><a class="btn btn-success" href="admin_events.php?opt=edit_event&e_id=<?php echo $row['event_id']?>"><span class="fas fa-edit"></span></a></td>
            </tr>
            <?php

                }

                if (isset($_GET['delete'])) {
                    $Del = $_GET['delete'];
                    $Sql = "DELETE from tbl_events where event_id='$Del'";
                    $result = mysqli_query($con,$Sql);

                    if ($result) {

                        unlink("../img/events/$old_img");
                        header("location: admin_events.php");
                    }
                }
            
            ?>

        </tbody>
    </table>
</div>                        


