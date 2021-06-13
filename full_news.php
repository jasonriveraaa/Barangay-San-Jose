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
                        <a class="nav-link active" href="news.php">NEWS</a>
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


    <?php

    if (isset($_GET['n_id'])) {

        $Card_ID = $_GET['n_id'];
    }

    $query = "SELECT * FROM news_card WHERE card_id='$Card_ID'";
    $data = mysqli_query($con, $query);

    while ($row = mysqli_fetch_assoc($data)) {
        $card_id = $row['card_id'];
        $card_title = $row['card_title'];
        $card_content = $row['card_content'];
        $card_desc = $row['card_desc'];
        $card_img = $row['card_img'];
        $card_author = $row['card_author'];
        $card_date = $row['card_date'];

    ?>

        <section class="sub-header">
            <div class="container">
                <h2><?php echo $card_title ?></h2>

                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">News</li>
                    </ol>
                </nav>
            </div>
        </section>

        <article class="container">
            <div class="news-content">
                <div class="news-content-img">
                    <img src="img/news/<?php echo $card_img ?>" class="img-fluid" alt="...">
                </div>
                <p><small class="text-muted" style="font-size:13px;">Posted on <?php echo $card_date ?> By <span class="author-name"><?php echo $card_author ?></span></small></p>
                <div class="full-content"><?php echo $card_content ?></div>
            </div>
        </article>

    <?php
    }
    ?>

    <?php include('includes/footer.php') ?>
    <?php include('includes/script.php') ?>
</body>

</html>