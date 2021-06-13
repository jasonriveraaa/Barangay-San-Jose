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
                                case 'add_news':
                                    require_once('admin_includes/add_news.php');
                                    break;
                                case 'edit_news';
                                    require_once('admin_includes/edit_news.php');
                                    break;
                                default:
                                    require_once('admin_includes/viewAll_news.php');
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
