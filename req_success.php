<!DOCTYPE html>
<html lang="en">
<?php include_once('includes/head.php') ?>

<body onload="getDate()">
    <div class="req-div">
        <div class="req-content">
            <div class="req-header">
                <p>Document Request Successful</p>
            </div>
            <div class="req-text">
                <p>You can get your document in the Barangay Hall on <span id="get-date" class="req-date"></span> Please present <span class="req-date">two (2)</span> Valid ID's in the front desk for verification. Stay Safe Navoteño!</p>
            </div>
            <div class="return-button">
                <a href="index.php" class="return-home">Done</a>
            </div>
        </div>
    </div>


    <script>
        function getDate() {
            let today = new Date();
            let months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
            let day = ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"];
            document.getElementById('get-date').innerHTML = day[today.getDay() + 1] + ", " + [today.getDate() + 2] + " " + months[today.getMonth()] + " " + today.getFullYear();
        }
    </script>
    <?php include('includes/script.php') ?>
</body>

</html>