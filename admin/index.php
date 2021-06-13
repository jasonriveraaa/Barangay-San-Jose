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
                        <h1 class="page-header">
                            Welcome
                            <small>
                            <?php
                                if (isset($_SESSION['userName'])) {
                                    echo $_SESSION['userName'];
                                }
                            ?>
                            </small>
                        </h1>
                    </div>
                </div>

                <div class="row">
                
                    <!-- NEWS  -->
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="far fa-newspaper fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                    <?php
                                        $sql = "SELECT * FROM news_card";
                                        $count = mysqli_query($con,$sql);
                                        $num_news = mysqli_num_rows($count);
                                    ?>
                                    <div class='huge'><?php echo $num_news?></div>
                                        <div>News</div>
                                    </div>
                                </div>
                            </div>
                            <a href="admin_news.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <!-- EVENTS -->
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                    <i class="fas fa-calendar fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                    <?php
                                        $sql = "SELECT * FROM tbl_events";
                                        $count = mysqli_query($con,$sql);
                                        $num_events = mysqli_num_rows($count);
                                    ?>
                                    <div class='huge'><?php echo $num_events?></div>
                                    <div>Events</div>
                                    </div>
                                </div>
                            </div>
                            <a href="admin_events.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <!-- CAROUSEL IMAGE -->
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                    <i class="fas fa-image fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                    <?php
                                        $sql = "SELECT * FROM tbl_carousel";
                                        $count = mysqli_query($con,$sql);
                                        $num_carousel = mysqli_num_rows($count);
                                    ?>
                                    <div class='huge'><?php echo $num_carousel?></div>
                                    <div>Carousel Image</div>
                                    </div>
                                </div>
                            </div>
                            <a href="admin_carousel.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>   

                    <!-- ANNOUNCEMENT GALLERY -->
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                    <i class="fas fa-image fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                    <?php
                                        $sql = "SELECT * FROM tbl_announcement";
                                        $count = mysqli_query($con,$sql);
                                        $num_announcement = mysqli_num_rows($count);
                                    ?>
                                    <div class='huge'><?php echo $num_announcement?></div>
                                    <div>Announcement Gallery</div>
                                    </div>
                                </div>
                            </div>
                            <a href="admin_announcement.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <!-- BARANGAY CLEARANCE -->
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-gray">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fas fa-file-alt fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                    <?php
                                        $sql = "SELECT * FROM tbl_clearance";
                                        $count = mysqli_query($con,$sql);
                                        $num_clearance = mysqli_num_rows($count);
                                    ?>
                                    <div class='huge'><?php echo $num_clearance?></div>
                                        <div>Barangay Clearance</div>
                                    </div>
                                </div>
                            </div>
                            <a href="admin_documents.php?opt=clearance">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>           

                    <!-- INDIGENCY -->
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-gray">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fas fa-file-alt fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                    <?php
                                        $sql = "SELECT * FROM tbl_indigency";
                                        $count = mysqli_query($con,$sql);
                                        $num_indigency = mysqli_num_rows($count);
                                    ?>
                                    <div class='huge'><?php echo $num_indigency?></div>
                                        <div>Certificate of Indigency</div>
                                    </div>
                                </div>
                            </div>
                            <a href="admin_documents.php?opt=indigency">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <!-- BUSINESS PERMIT -->
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-gray">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fas fa-file-alt fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                    <?php
                                        $sql = "SELECT * FROM tbl_business";
                                        $count = mysqli_query($con,$sql);
                                        $num_business = mysqli_num_rows($count);
                                    ?>
                                    <div class='huge'><?php echo $num_business?></div>
                                        <div>Business Permit</div>
                                    </div>
                                </div>
                            </div>
                            <a href="admin_documents.php?opt=permit">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <!-- FISH FOLK CERTIFICATION -->
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-gray">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fas fa-file-alt fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                    <?php
                                        $sql = "SELECT * FROM tbl_fishfolk";
                                        $count = mysqli_query($con,$sql);
                                        $num_fishfolk = mysqli_num_rows($count);
                                    ?>
                                    <div class='huge'><?php echo $num_fishfolk?></div>
                                        <div>Fish Folk Certification</div>
                                    </div>
                                </div>
                            </div>
                            <a href="admin_documents.php?opt=fishfolk">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <!-- RESOLUTION -->
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-list fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                    <?php
                                        $sql = "SELECT * FROM tbl_resolution";
                                        $count = mysqli_query($con,$sql);
                                        $num_reso = mysqli_num_rows($count);
                                    ?>
                                    <div class='huge'><?php echo $num_reso?></div>
                                        <div>Resolution</div>
                                    </div>
                                </div>
                            </div>
                            <a href="admin_resolution.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    
                    <?php
                        if ($_SESSION['userRole'] === 'admin') {
                    ?>
                    
                    <!-- LIST OF RESIDENTS -->
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-users fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                    <?php
                                        $sql = "SELECT * FROM tbl_resident";
                                        $count = mysqli_query($con,$sql);
                                        $num_residents = mysqli_num_rows($count);
                                    ?>
                                    <div class='huge'><?php echo $num_residents?></div>
                                        <div>Residents</div>
                                    </div>
                                </div>
                            </div>
                            <a href="admin_residents.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <!-- LIST OF USERS -->
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-torq">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fas fa-user fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                    <?php
                                        $sql = "SELECT * FROM tbl_users";
                                        $count = mysqli_query($con,$sql);
                                        $num_users = mysqli_num_rows($count);
                                    ?>
                                    <div class='huge'><?php echo $num_users?></div>
                                        <div>Users</div>
                                    </div>
                                </div>
                            </div>
                            <a href="admin_users.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <?php
                        }
                    ?>
                </div>

            </div>

        </div>

    </div>

   
<?php include('admin_includes/script.php')?>

</body>

</html>
