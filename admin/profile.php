<!DOCTYPE html>
<html lang="en">

<?php include('admin_includes/head.php')?>

<?php
    //DISPLAY DATA
    if(isset($_SESSION['userName'])){

        $username = $_SESSION['userName'];
        $sql = "SELECT * FROM tbl_users WHERE user_username='$username'";
        $data = mysqli_query($con,$sql);

        while ($row = mysqli_fetch_assoc($data)) {
             
            $user_username = $row['user_username'];
            $user_password = $row['user_password'];
            $user_lname = $row['user_lname'];
            $user_fname = $row['user_fname'];
            $user_email = $row['user_email'];
        }
    
    }

    //UPDATE DATA
    if (isset($_POST['btn_update_profile'])) {
        
        $user_username = $_POST['form_user_username'];
        $user_password = $_POST['form_user_password'];
        $user_lname = $_POST['form_user_lname'];
        $user_fname = $_POST['form_user_fname'];
        $user_email = $_POST['form_user_email'];
      
        $sql = "UPDATE tbl_users SET user_username='$user_username',user_password='$user_password',user_lname='$user_lname',user_fname='$user_fname',user_email='$user_email' WHERE user_username =
    '$username'";

        $result = mysqli_query($con,$sql);

        if ($result) {
            header("location: index.php");
            
        }else{
            echo "Query Failed"; 
        }
    }

?>
<body>

    <div id="wrapper">

    <?php include('admin_includes/navbar.php')?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            <small>Profile Page</small>
                        </h1>
                    </div>
                </div>

                <form method="POST" enctype="multipart/form-data">
                
                    <div class="row profile-form">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Username</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="inputEmail3" name="form_user_username" value="<?php echo $user_username?>">
                        </div>
                    </div>

                    <div class="row profile-form">
                        <label for="password" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-3">
                            <input type="password" class="form-control" id="password" name="form_user_password" value="<?php echo $user_password?>">
                        </div>
                    </div>

                    <div class="row profile-form">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Last Name</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="inputEmail3" name="form_user_lname" value="<?php echo $user_lname?>">
                        </div>
                    </div>

                    <div class="row profile-form">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">First Name</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="inputEmail3" name="form_user_fname" value="<?php echo $user_fname?>">
                        </div>
                    </div>

                    <div class="row profile-form">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-3">
                            <input type="email" class="form-control" id="inputEmail3" name="form_user_email" value="<?php echo $user_email?>">
                        </div>
                    </div>     

                    <div class="form-group">
                        <button class="btn btn-success mt-5" type="submit" name="btn_update_profile">Edit Pofile</button>
                    </div>

                </form>

            </div>

        </div>

    </div>

   
    <?php include('admin_includes/script.php')?>

</body>

</html>
