<h1 class="page-header">List of Residents Who Request for Barangay Clearance</h1>
<div class="table-responsive">
    <table class="table table-striped table-sm">
        <input class="form-control" id="search_input" type="text" placeholder="Search...">
        <thead>
            <tr>
                <th>ID</th>
                <th>Last Name</th>
                <th>First Name</th>
                <th>Middle Name</th>
                <th>Suffix</th>
                <th>Address</th>
                <th>Purpose</th>
                <th>Request Date</th>
                <th>Release Date</th>
                <th>Status</th>
                <th colspan="2">Operation</th>
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
            $offset = ($pageno - 1) * $no_of_records_per_page;


            $total_pages_sql = "SELECT COUNT(*) FROM tbl_clearance";
            $result = mysqli_query($con, $total_pages_sql);
            $total_rows = mysqli_fetch_array($result)[0];
            $total_pages = ceil($total_rows / $no_of_records_per_page);

            $sql = "SELECT * FROM tbl_clearance ORDER BY `clearance_id` DESC LIMIT $offset, $no_of_records_per_page";
            $result = mysqli_query($con, $sql);

            while ($row = mysqli_fetch_array($result)) {


            ?>
                <tr class="uppercase">
                    <td><?php echo $row['clearance_id'] ?></td>
                    <td><?php echo $row['clearance_lname'] ?></td>
                    <td><?php echo $row['clearance_fname'] ?></td>
                    <td><?php echo $row['clearance_mname'] ?></td>
                    <td><?php echo $row['clearance_suffix'] ?></td>
                    <td><?php echo $row['clearance_address'] ?></td>
                    <td><?php echo $row['clearance_purpose'] ?></td>
                    <td><?php echo $row['clearance_date'] ?></td>
                    <td><?php echo $row['clearance_appointment_date'] ?></td>
                    <td><?php echo $row['clearance_status'] ?></td>
                    <!-- <td><a class="btn btn-danger" href="?delete=<?php echo $row['clearance_id'] ?>"><span class="fas fa-trash-alt"></span></a></td> -->
                    <td><a class="btn btn-success" href="?opt=clearance&done=<?php echo $row['clearance_id'] ?>"><span class="fas fa-check"></span></a></td>
                    <td><a class="btn btn-danger" href="?opt=clearance&cancelled=<?php echo $row['clearance_id'] ?>"><span class="fas fa-times"></span></a></td>
                </tr>
            <?php

            }

            // if (isset($_GET['delete'])) {
            //     $del = $_GET['delete'];
            //     $Sql = "DELETE FROM tbl_clearance WHERE clearance_id ='$del'";
            //     $result = mysqli_query($con, $Sql);

            //     if ($result) {
            //         header("location: admin_documents.php?opt=clearance");
            //     }
            // }
            if (isset($_GET['done'])) {
                $done = $_GET['done'];
                $sql_setTo_done = "UPDATE tbl_clearance SET clearance_status = 'Done' WHERE clearance_id ='$done'";
                $result = mysqli_query($con, $sql_setTo_done);

                if ($result) {

                    header("location: admin_documents.php?opt=clearance");
                }
            }

            if (isset($_GET['cancelled'])) {
                $cancel = $_GET['cancelled'];
                $sql_setTo_cancelled = "UPDATE tbl_clearance SET clearance_status = 'Cancelled' WHERE clearance_id ='$cancel'";
                $result = mysqli_query($con, $sql_setTo_cancelled);

                if ($result) {

                    header("location: admin_documents.php?opt=clearance");
                }
            }

            ?>

        </tbody>
    </table>
</div>
<nav aria-label="Page navigation example">
    <ul class="pagination justify-content-end">
        <li class="page-item <?php if ($pageno <= 1) {
                                    echo 'disabled';
                                } ?>">
            <a class="page-link" href="<?php if ($pageno > 1) {
                                            echo "?opt=clearance&pageno=" . ($pageno - 1);
                                        } ?>">Previous</a>
        </li>


        <?php

        for ($i = 1; $i <= $total_pages; $i++) {
            if ($pageno == $i) {
                $c = " active";
            } else {
                $c = "";
            }
            echo '<li class="page-item' . $c . '"><a class="page-link" href="?opt=clearance&pageno=' . $i . '">' . $i . '</a></li>';
        }
        ?>

        <li class="page-item <?php if ($pageno >= $total_pages) {
                                    echo 'disabled';
                                } ?>">
            <a class="page-link" href="<?php if ($pageno < $total_pages) {
                                            echo "?opt=clearance&?pageno=" . ($pageno + 1);
                                        } ?>">Next</a>
        </li>
    </ul>
</nav>