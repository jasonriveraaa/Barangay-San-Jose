<?php
if (isset($_POST['btn_add_user'])) {

    $user_username = $_POST['form_user_username'];
    $user_password = $_POST['form_user_password'];
    $user_lname = $_POST['form_user_lname'];
    $user_fname = $_POST['form_user_fname'];
    $user_email = $_POST['form_user_email'];
    $user_role = $_POST['form_user_role'];

    $sql = "INSERT INTO tbl_users (user_username,user_password,user_lname,user_fname,user_email,user_role) VALUE ('$user_username',MD5('$user_password'),'$user_lname','$user_fname','$user_email','$user_role')";

    $result = mysqli_query($con, $sql);

    if ($result) {
        header("location: admin_users.php");
    } else {
        echo "Query Failed";
    }
}
?>

<h1 class="page-header">Add New User</h1>

<form action="" class="row" method="POST" enctype="multipart/form-data">

    <div class="col-md-6">
        <label for="lastname" class="form-label">Username</label>
        <input type="text" class="form-control" id="lastname" name="form_user_username">
    </div>

    <div class="col-md-6">
        <label for="firstname" class="form-label">Password</label>
        <input type="password" class="form-control" id="firstname" name="form_user_password">
    </div>

    <div class="col-md-4">
        <label for="Last name" class="form-label">Last name</label>
        <input type="text" class="form-control" id="Last name" name="form_user_lname">
    </div>

    <div class="col-md-4">
        <label for="Last name" class="form-label">First name</label>
        <input type="text" class="form-control" id="Last name" name="form_user_fname">
    </div>

    <div class="col-md-4">
        <label for="inputGender" class="form-label">Role</label>
        <select id="inputGender" class="form-control" name="form_user_role">
            <option selected>-- Select your Role --</option>
            <option value="admin">Admin</option>
            <option value="author">Author</option>
        </select>
    </div>

    <div class="col-md-5">
        <label for="inputContactNo" class="form-label">Email</label>
        <input type="email" class="form-control" id="inputContactNo" name="form_user_email">
    </div>

    <div class="col-md-12">
        <button class="btn btn-success mt-5" type="submit" name="btn_add_user">Submit</button>
    </div>

</form>