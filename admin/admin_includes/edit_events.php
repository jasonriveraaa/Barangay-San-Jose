<?php
if (isset($_GET['e_id'])) {

    $event_id = $_GET['e_id'];
    $sql = "SELECT * FROM tbl_events WHERE event_id ='$event_id'";
    $result = mysqli_query($con, $sql);

    while ($row = mysqli_fetch_assoc($result)) {

        $event_id = $row['event_id'];
        $event_title = $row['event_title'];
        $event_desc = $row['event_description'];
        $event_img = $row['event_img'];
        $event_loc = $row['event_location'];
        $event_date = $row['event_date'];
        $event_time = $row['event_time'];
    }
}

//edit event

if (isset($_POST['btn_edit_event'])) {

    $event_title = $_POST['event_title'];
    $event_desc = $_POST['event_description'];

    $event_img = $_FILES['event_image']['name'];
    $event_temp = $_FILES['event_image']['tmp_name'];

    $event_loc = $_POST['event_loc'];
    $event_date = $_POST['event_date'];
    $event_time = $_POST['event_time'];

    if (empty($event_img)) {
        $query = "SELECT * FROM tbl_events WHERE event_id='$event_id'";
        $result = mysqli_query($con, $query);

        while ($row = mysqli_fetch_assoc($result)) {
            $event_img = $row['event_img'];
        }
    }

    $sql = "UPDATE tbl_events SET event_title='$event_title',
                                      event_description='$event_desc',
                                      event_img='$event_img',
                                      event_location='$event_loc',
                                      event_date='$event_date',
                                      event_time='$event_time'
                                      WHERE event_id='$event_id'";

    $result = mysqli_query($con, $sql);

    if ($result) {

        header("location: ./admin_events.php");
        move_uploaded_file($event_temp, "../img/events/$event_img");
    } else {
        echo "Query Failed";
    }
}

?>




<h1 class="page-header">Event<small> Edit</small></h1>
<form action="" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label for="">Title</label>
        <input class="form-control" type="text" name="event_title" value="<?php echo $event_title ?>">
    </div>

    <div class="form-group">
        <label for="">Description</label>
        <input class="form-control" type="text" name="event_description" value="<?php echo $event_desc ?>">
    </div>

    <div class="form-group">
        <label for="">Image</label>
        <img width="100" height="80" src="../img/events/<?php echo $event_img ?>" alt="<?php echo $event_img ?>">
        <input class="form-control" type="file" name="event_image">
    </div>

    <div class="form-group">
        <label for="">Location</label>
        <input class="form-control" type="text" name="event_loc" value="<?php echo $event_loc ?>">
    </div>

    <div class="form-group">
        <label for="">Date</label>
        <input class="form-control" type="date" name="event_date" value="<?php echo $event_date ?>">
    </div>

    <div class="form-group">
        <label for="">Time</label>
        <input class="form-control" type="Time" name="event_time" value="<?php echo $event_time ?>">
    </div>

    <div class="form-group">
        <button class="btn btn-success" type="submit" name="btn_edit_event">Edit Event</button>
    </div>
</form>