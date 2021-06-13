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
                                case 'add_user':
                                    require_once('admin_includes/add_users.php');
                                    break;
                                case 'edit_user';
                                    require_once('admin_includes/edit_users.php');
                                    break;
                                default:
                                    require_once('admin_includes/viewAll_users.php');
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
