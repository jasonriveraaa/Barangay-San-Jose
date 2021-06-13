<h1 class="page-header">List of Residents</h1>
<div class="table-responsive">
    <table class="table table-striped table-sm">
        <input class="form-control" id="search_input" type="text" placeholder="Search...">
        <thead>
            <tr>
                <th>ID</th>
                <th>Last Name</th>
                <th>First Name</th>
                <th>Age</th>
                <th>Gender</th>
                <th>Civil Status</th>
                <th>Address</th>
                <th>Contact No.</th>
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
            $offset = ($pageno - 1) * $no_of_records_per_page;


            $total_pages_sql = "SELECT COUNT(*) FROM tbl_resident";
            $result = mysqli_query($con, $total_pages_sql);
            $total_rows = mysqli_fetch_array($result)[0];
            $total_pages = ceil($total_rows / $no_of_records_per_page);

            $sql = "SELECT * FROM tbl_resident ORDER BY `resident_id` DESC LIMIT $offset, $no_of_records_per_page";
            $result = mysqli_query($con, $sql);

            while ($row = mysqli_fetch_array($result)) {


            ?>
                <tr>
                    <td><?php echo $row['resident_id'] ?></td>
                    <td><?php echo $row['resident_lname'] ?></td>
                    <td><?php echo $row['resident_fname'] ?></td>
                    <td><?php echo $row['resident_age'] ?></td>
                    <td><?php echo $row['resident_gender'] ?></td>
                    <td><?php echo $row['resident_status'] ?></td>
                    <td><?php echo $row['resident_address'] ?></td>
                    <td><?php echo $row['resident_contact'] ?></td>
                    <td><a class="btn btn-danger" href="admin_residents.php?delete=<?php echo $row['resident_id'] ?>"><span class="fas fa-trash-alt"></span></a></td>
                    <td><a class="btn btn-success" href="admin_residents.php?opt=edit_residents&res_id=<?php echo $row['resident_id'] ?>"><span class="fas fa-edit"></span></a></td>
                </tr>
            <?php

            }

            if (isset($_GET['delete'])) {
                $Del = $_GET['delete'];
                $Sql = "DELETE FROM tbl_resident WHERE resident_id='$Del'";
                $result = mysqli_query($con, $Sql);

                if ($result) {
                    header("location: admin_residents.php");
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