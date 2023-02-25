<main class="backbone">
                <section >
                    <aside class="sidebar">
                        <div class="toggle">
                            <a href="#" class="burger js-menu-toggle" data-toggle="collapse" data-target="#main-navbar"><span></span></a>
                        </div>
                        <div class="side-inner">
                            <div class="profile">
                                 <?php
                                    echo '<img src="pics/'.$_SESSION['pic'].'" style="width: 100px;height: 100px;" alt="Image" class="img-fluid">';
                                    echo '<h3 style="font-size:20px;" class="name">'.$_SESSION['Name'].'</h3>';
                                    echo '<span style="font-size:15px;">'.$_SESSION['city'].'</span>';
                                 ?>
                            </div>
                        
                        <div class="nav-menu">
                          <ul>
                          <li style="margin-left: 70px;font-size: 14px;"><a href="home_user.php"><span class="icon-home mr-3 mr-3"></span>Home</a></li>
                            <li style="margin-left: 70px;font-size: 14px;"><a href="profile_home.php"><span class="fa fa-pencil-square-o mr-3"></span>Profile</a></li>
                            <li style="margin-left: 70px;font-size: 14px;"><a href="postfeed_home.php"><span class="icon-notifications mr-3"></span>Post Feed</a></li>
                            <li style="margin-left: 70px;font-size: 14px;"><a href="direct_home.php"><span class="icon-location-arrow mr-3"></span>Direct</a></li>
                            <li style="margin-left: 70px;font-size: 14px;"><a href="aboutus_home.php"><span class="icon-pie-chart mr-3"></span>Contact Us</a></li>
                            <li style="margin-left: 70px;font-size: 14px;"><a href="logout.php"><span class="icon-sign-out mr-3"></span>Log out</a></li>
                          </ul>
                        </div>
                      </div>  
                    </aside> 
                </section>