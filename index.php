<!DOCTYPE html>
<html lang="en">
<?php include_once 'includes/head.php' ?>

<body>
    <?php include('includes/date-time.php') ?>
    <a id="button">
        <i class="fas fa-chevron-up"></i>
    </a>

    <nav class="logo">
        <img class="img-logo" src="img/logo.png" alt="">
    </nav>
    <?php include('includes/nav.php') ?>


    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <?php
            $sql = "SELECT carousel_img FROM tbl_carousel";
            $result = mysqli_query($con, $sql);

            $i = 0;
            foreach ($result as $row) {
                $actives = '';
                if ($i === 0) {
                    $actives = 'active';
                }

            ?>
                <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="<?php $i ?>" class="<?php echo $actives ?>"></li>

            <?php
                $i++;
            }
            ?>
        </ol>

        <div class="carousel-inner">
            <?php
            $i = 0;
            foreach ($result as $row) {
                $actives = '';
                if ($i === 0) {
                    $actives = 'active';
                }

            ?>
                <div class="carousel-item <?php echo $actives ?>">
                    <img src="img/carousel/<?php echo $row['carousel_img'] ?>" class="d-block w-100">
                </div>

            <?php
                $i++;
            }
            ?>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </a>
    </div>

    <section id="news">
        <div class="container">


            <div class="flex row">

                <div class="col-5">
                    <h1 class="news-header">Be Updated with District News</h1>
                    <p class="news-subheader">Read the News Updates and Articles about Government</p>
                    <div class="news-col">
                        <?php

                        $query = "SELECT * from news_card ORDER BY card_date DESC LIMIT 4";
                        $data = mysqli_query($con, $query);

                        while ($row = mysqli_fetch_assoc($data)) {
                            $card_id = $row['card_id'];
                            $card_title = $row['card_title'];
                            $card_desc = $row['card_desc'];
                            $card_img = $row['card_img'];
                            $card_date = $row['card_date'];

                        ?>
                            <div class="card" style="max-width: 540px; height: 140px">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <a href="full_news.php?n_id=<?php echo $card_id ?>">
                                            <img clas="img-responsive" src="img/news/<?php echo $card_img ?>" />
                                        </a>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title"><a href="full_news.php?n_id=<?php echo $card_id ?>"><?php echo $card_title ?></a></h5>
                                            <p class="card-text"><?php echo $card_desc ?></p>
                                            <p class="card-text"><small class="text-muted">Posted on <?php echo $card_date ?></small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <?php
                        }
                        ?>
                    </div>
                </div>

                <div class="col-auto">
                    <h1 class="news-header">Information Desk</h1>
                    <div class="accordion accordion-flush" id="accordionFlushExample">

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                    Barangay Hall
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse show" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <ul>
                                        <li>
                                            <i class="bi bi-person-fill"></i>
                                            Charles Jason Rivera
                                        </li>
                                        <li>
                                            <i class="bi bi-telephone-fill"></i>
                                            09754018144
                                        </li>
                                        <li>
                                            <i class="bi bi-building"></i>
                                            14 David Comp. 379 Gov A Pascual St. San
                                            Jose, Navotas City
                                        </li>
                                        <li>
                                            <i class="bi bi-envelope-fill"></i>
                                            charlesjasonriveraa@gmail.com
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                    Police Emergency
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <ul>
                                        <li>
                                            <i class="bi bi-person-fill"></i>
                                            Charles Jason Rivera
                                        </li>
                                        <li>
                                            <i class="bi bi-telephone-fill"></i>
                                            09754018144
                                        </li>
                                        <li>
                                            <i class="bi bi-building"></i>
                                            14 David Comp. 379 Gov A Pascual St. San
                                            Jose, Navotas City
                                        </li>
                                        <li>
                                            <i class="bi bi-envelope-fill"></i>
                                            charlesjasonriveraa@gmail.com
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                    Ambulance
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <ul>
                                        <li>
                                            <i class="bi bi-person-fill"></i>
                                            Charles Jason Rivera
                                        </li>
                                        <li>
                                            <i class="bi bi-telephone-fill"></i>
                                            09754018144
                                        </li>
                                        <li>
                                            <i class="bi bi-building"></i>
                                            14 David Comp. 379 Gov A Pascual St. San
                                            Jose, Navotas City
                                        </li>
                                        <li>
                                            <i class="bi bi-envelope-fill"></i>
                                            charlesjasonriveraa@gmail.com
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                    Bureau of Fire protection
                                </button>
                            </h2>
                            <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <ul>
                                        <li>
                                            <i class="bi bi-person-fill"></i>
                                            Charles Jason Rivera
                                        </li>
                                        <li>
                                            <i class="bi bi-telephone-fill"></i>
                                            09754018144
                                        </li>
                                        <li>
                                            <i class="bi bi-building"></i>
                                            14 David Comp. 379 Gov A Pascual St. San
                                            Jose, Navotas City
                                        </li>
                                        <li>
                                            <i class="bi bi-envelope-fill"></i>
                                            charlesjasonriveraa@gmail.com
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                                    DSWD
                                </button>
                            </h2>
                            <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <ul>
                                        <li>
                                            <i class="bi bi-person-fill"></i>
                                            Charles Jason Rivera
                                        </li>
                                        <li>
                                            <i class="bi bi-telephone-fill"></i>
                                            09754018144
                                        </li>
                                        <li>
                                            <i class="bi bi-building"></i>
                                            14 David Comp. 379 Gov A Pascual St. San
                                            Jose, Navotas City
                                        </li>
                                        <li>
                                            <i class="bi bi-envelope-fill"></i>
                                            charlesjasonriveraa@gmail.com
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                                    Department of Education
                                </button>
                            </h2>
                            <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <ul>
                                        <li>
                                            <i class="bi bi-person-fill"></i>
                                            Charles Jason Rivera
                                        </li>
                                        <li>
                                            <i class="bi bi-telephone-fill"></i>
                                            09754018144
                                        </li>
                                        <li>
                                            <i class="bi bi-building"></i>
                                            14 David Comp. 379 Gov A Pascual St. San
                                            Jose, Navotas City
                                        </li>
                                        <li>
                                            <i class="bi bi-envelope-fill"></i>
                                            charlesjasonriveraa@gmail.com
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingSeven">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseSeven">
                                    Text JRT
                                </button>
                            </h2>
                            <div id="flush-collapseSeven" class="accordion-collapse collapse" aria-labelledby="flush-headingSeven" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <ul>
                                        <li>
                                            <i class="bi bi-person-fill"></i>
                                            Charles Jason Rivera
                                        </li>
                                        <li>
                                            <i class="bi bi-telephone-fill"></i>
                                            09754018144
                                        </li>
                                        <li>
                                            <i class="bi bi-building"></i>
                                            14 David Comp. 379 Gov A Pascual St. San
                                            Jose, Navotas City
                                        </li>
                                        <li>
                                            <i class="bi bi-envelope-fill"></i>
                                            charlesjasonriveraa@gmail.com
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingEight">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseEight" aria-expanded="false" aria-controls="flush-collapseEight">
                                    Navotas City Hall
                                </button>
                            </h2>
                            <div id="flush-collapseEight" class="accordion-collapse collapse" aria-labelledby="flush-headingEight" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <ul>
                                        <li>
                                            <i class="bi bi-person-fill"></i>
                                            Charles Jason Rivera
                                        </li>
                                        <li>
                                            <i class="bi bi-telephone-fill"></i>
                                            09754018144
                                        </li>
                                        <li>
                                            <i class="bi bi-building"></i>
                                            14 David Comp. 379 Gov A Pascual St. San
                                            Jose, Navotas City
                                        </li>
                                        <li>
                                            <i class="bi bi-envelope-fill"></i>
                                            charlesjasonriveraa@gmail.com
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col">
                    <?php
                    if (isset($_SESSION['userName'])) {
                    } else {
                    ?>
                        <form action="includes/login.php" method="POST">
                            <div class="signin_widget">
                                <div class="signin_content">
                                    <div class="form-floating mb-2">
                                        <input type="text" class="form-control" name="form_username" id="floatingInput" placeholder="name.com" required>
                                        <label for="floatingInput">Username</label>
                                    </div>
                                    <div class="form-floating mb-2">
                                        <input type="password" class="form-control" name="form_password" id="floatingPassword" placeholder="Password" required>
                                        <label for="floatingPassword">Password</label>
                                    </div>
                                    <button type="submit" class="btn btn-secondary" name="btn_login">Login</button>
                                </div>
                            </div>
                        </form>
                    <?php
                    }
                    ?>

                    <div class="fb-root">
                        <center>
                            <div class="fb-page" data-href="https://www.facebook.com/Barangay-San-Jose-Navotas-City-127992000550343" data-tabs="timeline" data-width="500" data-height="" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                                <blockquote cite="https://www.facebook.com/Barangay-San-Jose-Navotas-City-127992000550343" class="fb-xfbml-parse-ignore">
                                    <a href="https://www.facebook.com/Barangay-San-Jose-Navotas-City-127992000550343">Barangay San Jose, Navotas City</a>
                                </blockquote>
                            </div>
                        </center>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <section id="events">
        <div class="container">
            <div class="flex-event">

                <div class="col">
                    <h1 class="events-header">Announcements</h1>
                    <div class="main">

                        <div class="slider-for">
                            <?php
                            $sql = "SELECT announcement_img FROM tbl_announcement";
                            $data = mysqli_query($con, $sql);

                            while ($row = mysqli_fetch_assoc($data)) {
                                $announ_img = $row['announcement_img'];

                            ?>
                                <div class="big-slider">
                                    <img class="slickimg" src="img/announcement/<?php echo $announ_img ?>">
                                </div>
                            <?php
                            }
                            ?>
                        </div>

                        <div class="slider-nav">
                            <?php
                            foreach ($data as $row) {
                            ?>
                                <div class="small-slider">
                                    <img class="slickimg" src="img/announcement/<?php echo $row['announcement_img'] ?>">
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>

                <div class="col-7">
                    <h1 class="events-header">Upcoming Schedules</h1>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <a class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Events</a>
                        <a class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Profile</a>
                    </div>

                    <div class="tab-content event-col" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                            <table class="table">
                                <tbody>
                                    <?php

                                    $query = "SELECT * from tbl_events ORDER BY event_id DESC LIMIT 4";
                                    $data = mysqli_query($con, $query);

                                    while ($row = mysqli_fetch_assoc($data)) {
                                        $event_img = $row['event_img'];
                                        $event_title = $row['event_title'];
                                        $event_time = $row['event_time'];
                                        $event_date = $row['event_date'];
                                        $event_location = $row['event_location'];



                                    ?>
                                        <tr class="event-list">
                                            <td scope="row" class="time-date-row">
                                                <strong class="e-date"><?php echo $event_date ?></strong>
                                                <strong class="e-time"><?php echo $event_time ?></strong>
                                            </td>
                                            <td scope="row" class="event-image">
                                                <img src="img/events/<?php echo $event_img ?>" />
                                            </td>
                                            <td scope="row" class="event-title">
                                                <a href="events.php">
                                                    <h6><?php echo $event_title ?></h6>
                                                </a>
                                                <p class="location"><i class="bi bi-geo-alt-fill"></i><?php echo $event_location ?></p>
                                            </td>
                                            <td scope="row">
                                                <a class="read-more" href="events.php">READ MORE</a>
                                            </td>
                                        </tr>
                                    <?php

                                    }
                                    ?>

                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                            ...
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>



    <?php include('includes/footer.php') ?>
    <?php include('includes/script.php') ?>
</body>

</html>