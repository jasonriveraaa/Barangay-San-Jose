<?php
    if (isset($_POST['btn_add_img'])) {
        
        $announcement_img = $_FILES['form_announcement_img']['name'];
        $announcement_temp = $_FILES['form_announcement_img']['tmp_name'];

        $sql = "INSERT INTO tbl_announcement (announcement_img) VALUE ('$announcement_img')";

        $result = mysqli_query($con,$sql);

        if ($result) {
            move_uploaded_file($announcement_temp, "../img/announcement/$announcement_img");
            header("location: admin_announcement.php");
            
        }else{
            echo "Query Failed"; 
        }
        
    }
?>

<h1 class="page-header">Upload Announcement Image</h1>
<form action="" method="POST" enctype="multipart/form-data">
    
    <div class="form-group">
        <label for="">Image</label>
        <input class="form-control" type="file" name="form_announcement_img">
    </div>

    <div class="form-group">
        <button class="btn btn-success" type="submit" name="btn_add_img">Submit</button>
    </div>
</form>
                            

