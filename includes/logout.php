<?php
    session_start();

    $_SESSION['userName'] = null;
    $_SESSION['userRole'] = null;
    header("location: ../index.php");
