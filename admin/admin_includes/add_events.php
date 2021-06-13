<?php
if (isset($_POST['btn_add_event'])) {

    $event_title = $_POST['event_title'];
    $event_desc = $_POST['event_description'];

    $event_img = $_FILES['event_image']['name'];
    $event_temp = $_FILES['event_image']['tmp_name'];

    $event_loc = $_POST['event_loc'];
    $event_date = $_POST['event_date'];
    $event_time = $_POST['event_time'];

    $sql = "INSERT INTO tbl_events (event_title,event_description,event_img,event_location,event_date,event_time) VALUE ('$event_title','$event_desc','$event_img','$event_loc','$event_date','$event_time')";

    $result = mysqli_query($con, $sql);

    if ($result) {
        move_uploaded_file($event_temp, "../img/events/$event_img");
        header("location: admin_events.php");
    } else {
        echo "Query Failed";
    }
}
?>

<h1 class="page-header">Event<small> Create</small></h1>
<form action="" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label for="">Title</label>
        <input class="form-control" type="text" name="event_title">
    </div>

    <div class="form-group">
        <label for="">Description</label>
        <input class="form-control" type="text" name="event_description">
    </div>

    <div class="form-group">
        <label for="">Image</label>
        <input class="form-control" type="file" name="event_image">
    </div>

    <div class="form-group">
        <label for="">Location</label>
        <input class="form-control" type="text" name="event_loc">
    </div>

    <div class="form-group">
        <label for="">Date</label>
        <input class="form-control" type="date" name="event_date">
    </div>

    <div class="form-group">
        <label for="">Time</label>
        <input class="form-control" type="Time" name="event_time">
    </div>

    <div class="form-group">
        <button class="btn btn-success" type="submit" name="btn_add_event">Create Event</button>
    </div>
</form>