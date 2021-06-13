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
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            GOVERNMENT
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="resolution.php">RESOLUTION</a></li>
                            <li><a class="dropdown-item" href="#">ORDINANCE</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="contact.php">CONTACTS</a>
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
            <h2>Contact Us</h2>

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                </ol>
            </nav>
        </div>
    </section>

    <section class="info">
        <div class="contact-info">
            <i class="fas fa-map-marker-alt contact-icon"></i>
            <h5 class="contact-info-header">Our Location</h5>
            <p class="contact-description">2 E Naval St. San Jose Navotas City</p>
        </div>
        <div class="contact-info">
            <i class="fas fa-phone contact-icon"></i>
            <h5 class="contact-info-header">Call Us</h5>
            <p class="contact-description">Telephone: 3557512</p>
            <p class="contact-description">Mobile: 09754018144</p>
        </div>
        <div class="contact-info">
            <i class="far fa-envelope contact-icon"></i>
            <h5 class="contact-info-header">Email Us</h5>
            <p class="contact-description">Email: barangay_sanjose@gmail.com</p>
        </div>
    </section>

    <section class='map'>
        <div class="container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d482.48160512662594!2d120.94195941947994!3d14.664291448338403!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5de44baa528dab64!2sBarangay%20San%20Jose%2C%20District%202%20Barangay%20Hall!5e0!3m2!1sen!2sph!4v1612427162710!5m2!1sen!2sph"></iframe>
        </div>
    </section>



    <?php include('includes/footer.php') ?>
    <?php include('includes/script.php') ?>

</body>

</html>