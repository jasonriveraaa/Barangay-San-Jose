        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Barangay San Jose CMS</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li>
                    <a href="../index.php">View Site</a>
                </li>   
            
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> 
                    <?php 
                        if (isset($_SESSION['userName'])) {
                            echo $_SESSION['userName'];
                        }
                    ?> 
                    <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="profile.php"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="../includes/logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>

            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="index.php"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
                    </li>

                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#documents"><i class="far fa-file"></i> Documents <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="documents" class="collapse">
                            <li>
                                <a href="admin_documents.php?opt=clearance">Barangay Clearance</a>
                            </li>
                            <li>
                                <a href="admin_documents.php?opt=indigency">Indigency Certificate</a>
                            </li>
                            <li>
                                <a href="admin_documents.php?opt=permit">Business Permit</a>
                            </li>
                            <li>
                                <a href="admin_documents.php?opt=fishfolk">Fisher Folks Certification</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#carousel"><i class="far fa-image"></i> Carousel <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="carousel" class="collapse">
                            <li>
                                <a href="admin_carousel.php">View Carousel Image</a>
                            </li>
                            <li>
                                <a href="admin_carousel.php?opt=add_img">Upload New Image</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#announcement"><i class="far fa-image"></i> Announcement Gallery <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="announcement" class="collapse">
                            <li>
                                <a href="admin_announcement.php">View Announcement Gallery</a>
                            </li>
                            <li>
                                <a href="admin_announcement.php?opt=add_img">Upload New Image</a>
                            </li>
                        </ul>
                    </li>
                    
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#news"><i class="far fa-newspaper"></i> News <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="news" class="collapse">
                            <li>
                                <a href="admin_news.php">View all News</a>
                            </li>
                            <li>
                                <a href="admin_news.php?opt=add_news">Create News</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#events"><i class="fa fa-table"></i> Events <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="events" class="collapse">
                            <li>
                                <a href="admin_events.php">View Events</a>
                            </li>
                            <li>
                                <a href="admin_events.php?opt=add_event">Create Event</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#resolution"><i class="far fa-file-alt"></i> Resolution <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="resolution" class="collapse">
                            <li>
                                <a href="admin_resolution.php">View Resolutions</a>
                            </li>
                            <li>
                                <a href="admin_resolution.php?opt=add_resolution">Upload Resolution</a>
                            </li>
                        </ul>
                    </li>

                    <?php
                            if (isset($_SESSION['userRole'])) {
                                if ($_SESSION['userRole'] === 'admin') {             
                                    ?>
                            <li>
                                <a href="javascript:;" data-toggle="collapse" data-target="#residents"><i class="far fa-list-alt"></i> List of Residents <i class="fa fa-fw fa-caret-down"></i></a>
                                <ul id="residents" class="collapse">
                                    <li>
                                        <a href="admin_residents.php">View All Residents</a>
                                    </li>
                                    <li>
                                        <a href="admin_residents.php?opt=add_residents">Add New Resident</a>
                                    </li>
                                </ul>
                            </li>
        
                            <li>
                                <a href="javascript:;" data-toggle="collapse" data-target="#user"><i class="fas fa-users"></i> Users <i class="fa fa-fw fa-caret-down"></i></a>
                                <ul id="user" class="collapse">
                                    <li>
                                        <a href="admin_users.php">View All Users</a>
                                    </li>
                                    <li>
                                        <a href="admin_users.php?opt=add_user">Add New User</a>
                                    </li>
                                </ul>
                            </li>
                        <?php
                                }
                            }
                        ?>                  

                </ul>
            </div>
        </nav>