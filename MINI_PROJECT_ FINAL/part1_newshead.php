<main class="backbone">
                <section >
                    <aside class="sidebar">
                <div class="toggle">
                    <a href="#" class="burger js-menu-toggle" data-toggle="collapse" data-target="#main-navbar"><span></span></a>
                </div>
                <div class="side-inner">
                    <div class="profile">
                    <br><br><br><br>
                    <?php
                        echo '<img src="./pics/'.$_SESSION['pic'].'" alt="Image" style="width: 100px;height: 100px;" class="img-fluid">
                        <h3 class="name">'.$_SESSION['Name'].'</h3>
                        <span style="font-size: 15px;">Be live with us</span>';
                        ?>
                    </div>
                
                <div class="nav-menu">
                <ul>
                    <li style="margin-left: 70px;font-size: 14px;" ><a href="home_newshead.php" ><span class="icon-home mr-3 mr-3"></span>Home</a></li>
                    <li style="margin-left: 70px;font-size: 14px;" ><a href="profilenewshead_home.php" ><span class="fa fa-pencil-square-o mr-3"></span>Profile</a></li>
                    <li style="margin-left: 70px;font-size: 14px;" ><a href="postnews_home.php" ><span class="icon-notifications mr-3"></span>Post_news</a></li>
                    <li style="margin-left: 70px;font-size: 14px;"><a href="aboutusnewshead_home.php"><span class="icon-pie-chart mr-3"></span>Contact Us</a></li>
                    <li style="margin-left: 70px;font-size: 14px;"><a href="logout.php"><span class="icon-sign-out mr-3"></span>Log out</a></li>
                </ul>
                </div>
            </div>  
            </aside> 
                </section>