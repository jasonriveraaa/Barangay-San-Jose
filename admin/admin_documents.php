<!DOCTYPE html>
<html lang="en">

<?php include('admin_includes/head.php')?>

<body>

    <div id="wrapper">

    <?php include('admin_includes/navbar.php')?>

        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">

                        <?php

                            if (isset($_GET['opt'])) {
                                $opt = $_GET['opt'];
                            }else{
                                $opt = '';
                            }

                            switch ($opt) {
                                case 'clearance':
                                    require_once('admin_includes/viewAll_clearance.php');
                                    break;
                                case 'indigency';
                                    require_once('admin_includes/viewAll_indigency.php');
                                    break;
                                case 'permit';
                                    require_once('admin_includes/viewAll_permit.php');
                                    break;
                                case 'fishfolk';
                                    require_once('admin_includes/viewAll_fishfolk.php');
                                    break;
                            }
                        ?>                   
         
                    </div>
                </div>
            </div>
        </div>
    </div>

   
<?php include('admin_includes/script.php')?>

</body>

</html>
