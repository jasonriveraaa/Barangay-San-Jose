<?php
    if (isset($_POST['btn_add_img'])) {
        
        $carousel_img = $_FILES['form_carousel_img']['name'];
        $carousel_temp = $_FILES['form_carousel_img']['tmp_name'];

        $sql = "INSERT INTO tbl_carousel (carousel_img) VALUE ('$carousel_img')";

        $result = mysqli_query($con,$sql);

        if ($result) {
            move_uploaded_file($carousel_temp, "../img/carousel/$carousel_img");
            header("location: admin_carousel.php");
            
        }else{
            echo "Query Failed"; 
        }
        
    }
?>

<h1 class="page-header">Upload Carousel Image</h1>
<form action="" method="POST" enctype="multipart/form-data">
    
    <div class="form-group">
        <label for="">Image</label>
        <input class="form-control" type="file" name="form_carousel_img">
    </div>

    <div class="form-group">
        <button class="btn btn-success" type="submit" name="btn_add_img">Submit</button>
    </div>
</form>
                            

