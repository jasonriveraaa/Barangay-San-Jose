<?php
    //DISPLAY DATA
    if(isset($_GET['res_id'])){

        $resi_id = $_GET['res_id'];
        $sql = "SELECT * FROM tbl_resident WHERE resident_id ='$resi_id'";
        $result = mysqli_query($con,$sql);

        while($row = mysqli_fetch_assoc($result)){

            $resi_id = $row['resident_id'];
            $resi_lname = $row['resident_lname'];
            $resi_fname = $row['resident_fname'];
            $resi_age = $row['resident_age'];
            $resi_gender = $row['resident_gender'];
            $resi_status = $row['resident_status'];
            $resi_address = $row['resident_address'];
            $resi_contact = $row['resident_contact'];
        }
    }


    //UPDATE DATA
    if (isset($_POST['btn_edit_resident'])) {
        
        $resi_lname = $_POST['form_resi_lname'];
        $resi_fname = $_POST['form_resi_fname'];
        $resi_age = $_POST['form_resi_age'];
        $resi_gender = $_POST['form_resi_gender'];
        $resi_status = $_POST['form_resi_status'];
        $resi_address = $_POST['form_resi_address'];
        $resi_contact = $_POST['form_resi_contact'];
      
        $sql = "UPDATE tbl_resident SET resident_lname = '$resi_lname',resident_fname = '$resi_fname',resident_age = '$resi_age',resident_gender = '$resi_gender',resident_status = '$resi_status',resident_address = '$resi_address',resident_contact = '$resi_contact' WHERE resident_id = '$resi_id'";

        $result = mysqli_query($con,$sql);

        if ($result) {
            header("location: admin_residents.php");
            
        }else{
            echo "Query Failed"; 
        }
        
    }
?>

<h1 class="page-header">Edit Resident Information</h1>

<form action="" class="row" method="POST" enctype="multipart/form-data">

    <div class="col-md-6">
        <label for="lastname" class="form-label">Last Name</label>
        <input type="text" class="form-control" id="lastname" name="form_resi_lname" value="<?php echo $resi_lname?>">
    </div>

    <div class="col-md-6">
        <label for="firstname" class="form-label">First Name</label>
        <input type="text" class="form-control" id="firstname" name="form_resi_fname" value="<?php echo $resi_fname?>">
    </div>

    <div class="col-md-1">
        <label for="age" class="form-label">Age</label>
        <input type="number" class="form-control" id="age" name="form_resi_age" value="<?php echo $resi_age?>">
    </div>
    
    <div class="col-md-3">
        <label for="inputGender" class="form-label">Gender</label>
        <select id="inputGender" class="form-control" name="form_resi_gender">
            <option value="<?php echo $resi_gender?>">Previous Selected: <?php echo $resi_gender?></option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Other">Other</option>
        </select>
    </div>

    <div class="col-md-3">
        <label for="inputStatus" class="form-label">Civil Status</label>
        <select id="inputStatus" class="form-control" name="form_resi_status">
            <option value="<?php echo $resi_status?>">Previous Selected: <?php echo $resi_status?></option>
            <option value="Single">Single</option>
            <option value="Married">Married</option>
            <option value="Divorced">Divorced</option>
            <option value="Widowed">Widowed</option>
        </select>
    </div>

    <div class="col-md-5">
        <label for="inputContactNo" class="form-label">Contact No.</label>
        <input type="number" class="form-control" id="inputContactNo" name="form_resi_contact" value="<?php echo $resi_contact?>">
    </div>

    <div class="col-md-12">
        <label for="inputAddress" class="form-label">Address</label>
        <input type="text" class="form-control" id="inputAddress" name="form_resi_address" value="<?php echo $resi_address?>">
    </div>
    


    <div class="col-md-12">
        <button class="btn btn-success" type="submit" name="btn_edit_resident">Submit</button>
    </div>

    
</form>


                            

