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
                                case 'add_resolution':
                                    require_once('admin_includes/add_resolution.php');
                                    break;
                                case 'edit_resolution';
                                    require_once('admin_includes/edit_resolution.php');
                                    break;
                                default:
                                    require_once('admin_includes/viewAll_resolution.php');
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
