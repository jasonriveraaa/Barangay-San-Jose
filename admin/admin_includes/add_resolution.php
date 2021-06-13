<?php
    if (isset($_POST['btn_add_resolution'])) {
        
        $reso_title = $_POST['form_reso_title'];

        $reso_file = $_FILES['form_reso_file']['name'];
        $reso_temp = $_FILES['form_reso_file']['tmp_name'];

        $reso_date = $_POST['form_reso_date'];

        $sql = "INSERT INTO tbl_resolution (resolution_title,resolution_file,resolution_date) VALUE ('$reso_title','$reso_file','$reso_date')";

        $result = mysqli_query($con,$sql);

        if ($result) {
            move_uploaded_file($reso_temp, "../pdf/resolutions/$reso_file");
            header("location: admin_resolution.php");
            
        }else{
            echo "Query Failed"; 
        }
        
    }
?>

<h1 class="page-header">Resolution<small>Create</small></h1>
<form action="" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label for="">Title</label>
        <input class="form-control" type="text" name="form_reso_title" placeholder="">
    </div>

    <div class="form-group">
        <label for="">File</label>
        <input class="form-control" type="file" name="form_reso_file" placeholder="">
    </div>

    <div class="form-group">
        <label for="">Date</label>
        <input class="form-control" type="date" name="form_reso_date" placeholder="">
    </div>

    <div class="form-group">
        <button class="btn btn-success" type="submit" name="btn_add_resolution">Submit</button>
    </div>
</form>
                            

