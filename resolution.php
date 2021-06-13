<!DOCTYPE html>
<html lang="en">
<?php include('includes/head.php') ?>

<body>
    <?php include('includes/date-time.php') ?>
    <nav class="navbar navbar-expand-lg navbar-light nav-2 sticky-top">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#">
                <img src="./img/logo.png" alt="" width="60" height="50">
            </a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="news.php">NEWS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="events.php">EVENTS</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            ABOUT US
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="mission_vision.php">Mission Vission & History</a></li>
                            <li><a class="dropdown-item" href="barangay_profile.php">Barangay Profile</a></li>
                            <li><a class="dropdown-item" href="barangay_officlals.php">Barangay Officials</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="appointment.php">E-APPOINTMENT</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            GOVERNMENT
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item active" href="resolution.php">RESOLUTION</a></li>
                            <li><a class="dropdown-item" href="#">ORDINANCE</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">CONTACTS</a>
                    </li>

                </ul>

            </div>
        </div>
    </nav>

    <a id="button">
        <i class="fas fa-chevron-up"></i>
    </a>

    <section class="sub-header">
        <div class="container">
            <h2>List of Resolution</h2>

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="index.php">Government</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Resolution</li>
                </ol>
            </nav>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="resolution-content">
                <p class="resolution-header">Barangay Resolutions</p>

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Date</th>
                            <th scope="col">Title</th>
                        </tr>
                    </thead>

                    <?php

                    if (isset($_GET['pageno'])) {
                        $pageno = $_GET['pageno'];
                    } else {
                        $pageno = 1;
                    }
                    $no_of_records_per_page = 15;
                    $offset = ($pageno - 1) * $no_of_records_per_page;


                    $total_pages_sql = "SELECT COUNT(*) FROM tbl_resolution";
                    $result = mysqli_query($con, $total_pages_sql);
                    $total_rows = mysqli_fetch_array($result)[0];
                    $total_pages = ceil($total_rows / $no_of_records_per_page);

                    $sql = "SELECT * FROM tbl_resolution ORDER BY `resolution_date` DESC LIMIT $offset, $no_of_records_per_page";
                    $res_data = mysqli_query($con, $sql);
                    while ($row = mysqli_fetch_array($res_data)) {
                        //here goes the data

                    ?>
                        <tr>
                            <td><?php echo $row['resolution_date']; ?></td>
                            <td><a target="_blank" class="resolution-pdf" href="pdf/resolutions/<?php echo $row['resolution_file']; ?>"><?php echo $row['resolution_title']; ?></a></td>
                        </tr>
                    <?php
                    }

                    ?>
                </table>

                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
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

            </div>
        </div>
    </section>

    <?php include('includes/footer.php') ?>
    <?php include('includes/script.php') ?>
</body>

</html>