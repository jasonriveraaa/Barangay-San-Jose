<?php
session_start();
include_once('db.php');

if (isset($_POST['btn_login'])) {

    $username = mysqli_real_escape_string($con, $_POST['form_username']);
    $password = mysqli_real_escape_string($con, $_POST['form_password']);
    $password = md5($password);

    $query = "SELECT * FROM tbl_users WHERE user_username = '$username'";
    $data = mysqli_query($con, $query);

    while ($row = mysqli_fetch_assoc($data)) {

        $db_user_id = $row['user_id'];
        $db_user_username = $row['user_username'];
        $db_user_password = $row['user_password'];
        $db_user_email = $row['user_email'];
        $db_user_fname = $row['user_fname'];
        $db_user_lname = $row['user_lname'];
        $db_user_role = $row['user_role'];
    }

    if ($username === $db_user_username && $password === $db_user_password) {

        $_SESSION['userName'] = $db_user_username;
        $_SESSION['userRole'] = $db_user_role;
        $_SESSION['userfname'] = $db_user_fname;
        $_SESSION['userlname'] = $db_user_lname;
        header("location: ../admin/index.php");
    } else {
        header("location: ../index.php");
    }
}
