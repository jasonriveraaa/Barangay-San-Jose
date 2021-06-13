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

    <section class="sub-header">
        <div class="container">
            <h2>News</h2>

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">News</li>
                </ol>
            </nav>
        </div>
    </section>

    <section id="main-list">
        <div class="container">

            <?php

            $query = "SELECT * FROM news_card ORDER BY card_date DESC";
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

                <div class="nws-div">
                    <h1>
                        <a class="nws-title" href="full_news.php?n_id=<?php echo $card_id ?>"><?php echo $card_title ?></a>
                    </h1>
                    <p>by <span class="author-name"><?php echo $card_author ?></span> </p>
                    <small class="text-muted" style="font-size:13px;">Posted on <?php echo $card_date ?></small>
                    <hr class="hr">
                    <!-- 900 max img width  -->
                    <img class="news-image" src="img/news/<?php echo $card_img ?>">

                    <p class="nws-desc"><?php echo $card_desc ?></p>
                    <a class="nws-btn" href="full_news.php?n_id=<?php echo $card_id ?>">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                </div>

            <?php
            }
            ?>

        </div>
    </section>

    <?php include('includes/footer.php') ?>
    <?php include('includes/script.php') ?>
</body>

</html>