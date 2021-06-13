<div class="date-time">

    <body onload="startTime()">
        <span id="txt"></span>

        <?php
        if (isset($_SESSION['userRole'])) {
            echo '<a class="btn btn-secondary adminbtn" href="./admin/index.php"> CMS</a>';
        }
        ?>
</div>