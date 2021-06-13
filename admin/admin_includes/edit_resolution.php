<?php
    //DISPLAY DATA
    if(isset($_GET['r_id'])){

        $reso_id = $_GET['r_id'];
        $sql = "SELECT * FROM tbl_resolution WHERE resolution_id ='$reso_id'";
        $result = mysqli_query($con,$sql);

        while($row = mysqli_fetch_assoc($result)){

            $reso_id = $row['resolution_id'];
            $reso_title = $row['resolution_title'];
            $reso_file = $row['resolution_file'];
            $reso_date = $row['resolution_date'];
        }
    }
    // UPDATE DATA
    if (isset($_POST['btn_add_resolution'])) {
        
        $reso_title = $_POST['form_reso_title'];

        $reso_file = $_FILES['form_reso_file']['name'];
        $reso_temp = $_FILES['form_reso_file']['tmp_name'];

        $reso_date = $_POST['form_reso_date'];

        $sql = "UPDATE tbl_resolution SET resolution_title = '$reso_title',resolution_file = '$reso_file',resolution_date = '$reso_date' WHERE resolution_id = '$reso_id'";

        $result = mysqli_query($con,$sql);

        if ($result) {
            move_uploaded_file($reso_temp, "../pdf/resolutions/$reso_file");
            header("location: admin_resolution.php");
            
        }else{
            echo "Query Failed"; 
        }
        
    }
?>

<h1 class="page-header">Resolution<small> Edit</small></h1>
<form action="" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label for="">Title</label>
        <input class="form-control" type="text" name="form_reso_title" value="<?php echo $reso_title?>">
    </div>

    <div class="form-group">
        <label for="">File</label>
        <p><?php echo $reso_file?></p>
        <input class="form-control" type="file" name="form_reso_file">
    </div>

    <div class="form-group">
        <label for="">Date</label>
        <input class="form-control" type="date" name="form_reso_date" value="<?php echo $reso_date?>">
    </div>

    <div class="form-group">
        <button class="btn btn-success" type="submit" name="btn_add_resolution">Submit</button>
    </div>
</form>
                            

