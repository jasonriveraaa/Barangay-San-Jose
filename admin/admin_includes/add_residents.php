<?php
    if (isset($_POST['btn_add_resident'])) {
        
        $resi_lname = $_POST['form_resi_lname'];
        $resi_fname = $_POST['form_resi_fname'];
        $resi_age = $_POST['form_resi_age'];
        $resi_gender = $_POST['form_resi_gender'];
        $resi_status = $_POST['form_resi_status'];
        $resi_address = $_POST['form_resi_address'];
        $resi_contact = $_POST['form_resi_contact'];
      
        $sql = "INSERT INTO tbl_resident (resident_lname,resident_fname,resident_age,resident_gender,resident_status,resident_address,resident_contact) VALUE ('$resi_lname','$resi_fname','$resi_age','$resi_gender','$resi_status','$resi_address','$resi_contact')";

        $result = mysqli_query($con,$sql);

        if ($result) {
            header("location: admin_residents.php");
            
        }else{
            echo "Query Failed"; 
        }
        
    }
?>

<h1 class="page-header">Add New Resident</h1>

<form action="" class="row" method="POST" enctype="multipart/form-data">

    <div class="col-md-6">
        <label for="lastname" class="form-label">Last Name</label>
        <input type="text" class="form-control" id="lastname" name="form_resi_lname">
    </div>

    <div class="col-md-6">
        <label for="firstname" class="form-label">First Name</label>
        <input type="text" class="form-control" id="firstname" name="form_resi_fname">
    </div>

    <div class="col-md-1">
        <label for="age" class="form-label">Age</label>
        <input type="number" class="form-control" id="age" name="form_resi_age">
    </div>
    
    <div class="col-md-3">
        <label for="inputGender" class="form-label">Gender</label>
        <select id="inputGender" class="form-control" name="form_resi_gender">
            <option selected>Select your Gender</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Other">Other</option>
        </select>
    </div>

    <div class="col-md-3">
        <label for="inputStatus" class="form-label">Civil Status</label>
        <select id="inputStatus" class="form-control" name="form_resi_status">
            <option selected>Select your Civil Status</option>
            <option value="Single">Single</option>
            <option value="Married">Married</option>
            <option value="Divorced">Divorced</option>
            <option value="Widowed">Widowed</option>
        </select>
    </div>

    <div class="col-md-5">
        <label for="inputContactNo" class="form-label">Contact No.</label>
        <input type="number" class="form-control" id="inputContactNo" name="form_resi_contact">
    </div>

    <div class="col-md-12">
        <label for="inputAddress" class="form-label">Address</label>
        <input type="text" class="form-control" id="inputAddress" name="form_resi_address">
    </div>
    


    <div class="col-md-12">
        <button class="btn btn-success" type="submit" name="btn_add_resident">Submit</button>
    </div>

    
</form>


                            

