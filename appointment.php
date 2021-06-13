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
                        <a class="nav-link active" href="appointment.php">E-APPOINTMENT</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            GOVERNMENT
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="resolution.php">RESOLUTION</a></li>
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
            <h2>E-Appointment</h2>

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">E-Appointment</li>
                </ol>
            </nav>
        </div>
    </section>

    <?php

    if (isset($_GET['opt'])) {
        $opt = $_GET['opt'];
    } else {
        $opt = '';
    }

    switch ($opt) {
        case 'barangay_clearance':
            require_once('includes/barangay_clearance.php');
            break;
        case 'indigency_cert';
            require_once('includes/indigency_cert.php');
            break;
        case 'business_permit';
            require_once('includes/business_permit.php');
            break;
        case 'fisher_cert';
            require_once('includes/fisher_cert.php');
            break;
        default:
            require_once('includes/select_docs.php');
            break;
    }

    ?>

    <?php include('includes/footer.php') ?>
    <?php include('includes/script.php') ?>
</body>

</html>