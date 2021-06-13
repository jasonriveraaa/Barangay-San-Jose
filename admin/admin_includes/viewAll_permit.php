<h1 class="page-header">List of Residents Who Request for Business Permit</h1>
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
                <th>Business Name</th>
                <th>Business Address</th>
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


            $total_pages_sql = "SELECT COUNT(*) FROM tbl_business";
            $result = mysqli_query($con, $total_pages_sql);
            $total_rows = mysqli_fetch_array($result)[0];
            $total_pages = ceil($total_rows / $no_of_records_per_page);

            $sql = "SELECT * FROM tbl_business ORDER BY `business_id` DESC LIMIT $offset, $no_of_records_per_page";
            $result = mysqli_query($con, $sql);

            while ($row = mysqli_fetch_array($result)) {


            ?>
                <tr class="uppercase">
                    <td><?php echo $row['business_id'] ?></td>
                    <td><?php echo $row['business_lname'] ?></td>
                    <td><?php echo $row['business_fname'] ?></td>
                    <td><?php echo $row['business_mname'] ?></td>
                    <td><?php echo $row['business_suffix'] ?></td>
                    <td><?php echo $row['business_owner_address'] ?></td>
                    <td><?php echo $row['business_name'] ?></td>
                    <td><?php echo $row['business_address'] ?></td>
                    <td><?php echo $row['business_date'] ?></td>
                    <td><?php echo $row['business_appointment_date'] ?></td>
                    <td><?php echo $row['business_status'] ?></td>
                    <!-- <td><a class="btn btn-danger" href="?delete=<?php echo $row['business_id'] ?>"><span class="fas fa-trash-alt"></span></a></td> -->
                    <td><a class="btn btn-success" href="?opt=permit&done=<?php echo $row['business_id'] ?>"><span class="fas fa-check"></span></a></td>
                    <td><a class="btn btn-danger" href="?opt=permit&cancelled=<?php echo $row['business_id'] ?>"><span class="fas fa-times"></span></a></td>
                </tr>
            <?php

            }

            // if (isset($_GET['delete'])) {
            //     $Del = $_GET['delete'];
            //     $Sql = "DELETE FROM tbl_business WHERE business_id ='$Del'";
            //     $result = mysqli_query($con, $Sql);

            //     if ($result) {
            //         header("location: admin_business.php");
            //     }
            // }

            if (isset($_GET['done'])) {
                $done = $_GET['done'];
                $sql_setTo_done = "UPDATE tbl_business SET business_status = 'Done' WHERE business_id ='$done'";
                $result = mysqli_query($con, $sql_setTo_done);

                if ($result) {

                    header("location: admin_documents.php?opt=permit");
                }
            }

            if (isset($_GET['cancelled'])) {
                $cancel = $_GET['cancelled'];
                $sql_setTo_cancelled = "UPDATE tbl_business SET business_status = 'Cancelled' WHERE business_id ='$cancel'";
                $result = mysqli_query($con, $sql_setTo_cancelled);

                if ($result) {

                    header("location: admin_documents.php?opt=permit");
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
                                            echo "?pageno=" . ($pageno - 1);
                                        } ?>">Previous</a>
        </li>


        <?php

        for ($i = 1; $i <= $total_pages; $i++) {
            if ($pageno == $i) {
                $c = " active";
            } else {
                $c = "";
            }
            echo '<li class="page-item' . $c . '"><a class="page-link" href="?pageno=' . $i . '">' . $i . '</a></li>';
        }
        ?>

        <li class="page-item <?php if ($pageno >= $total_pages) {
                                    echo 'disabled';
                                } ?>">
            <a class="page-link" href="<?php if ($pageno < $total_pages) {
                                            echo "?pageno=" . ($pageno + 1);
                                        } ?>">Next</a>
        </li>
    </ul>
</nav>