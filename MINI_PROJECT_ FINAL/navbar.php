<?php
      
if(ISSET($_POST['a2']))
{   if(isset($_SESSION['email']))
    {   if($_POST['a1'])
        {$keyword = $_POST['a1'];    
        $sql = "SELECT * FROM `user_table` WHERE `u_role`='0' AND `u_firstname` LIKE '%$keyword%' ORDER BY `u_firstname`";
        $resultt = mysqli_query($conn,$sql);
        if ($resultt)
        {
            if (mysqli_num_rows($resultt)>0)
            {  
                $search_data = mysqli_fetch_all($resultt);
                $_SESSION['allres']= $search_data;
                header('location: search_home.php');
            } 
            else 
            {   echo "No matching records found.";
            }
        }
        }
    }
    
}

?>  

<style>
.btnnn {
background-color: #343434;
color: #C0C0C0;
border-color: #C0C0C0;
padding: 6px 10px;
border-radius: 12px;
text-align: center;
font-size: 16px;
margin: 4px 2px;
transition: 0.2s;
}

.btnnn:hover {
background-color: #C0C0C0;
color: black;
}
</style>


<nav class="nav">
      <div class="nav-grid">
                <div class="nav-grid--box--search">
                    <div class="nav-grid--box--search--icon-box">
                        <img src="./images/screen-0.jpg" style="border-radius:50%;" alt="" class="nav-grid--box--search--icon-box--icon">
                    </div>
                    <form method="POST" action="#">
                    <div class="nav-grid--box--search--search" style="margin-top: 5px;">
                        <i class="nav-grid--box--search--search--input--icon fa-1x fa-solid fa-magnifying-glass"></i>
                        <input class="nav-grid--box--search--search--input" placeholder="Search Justchat" type="search" name="a1" id="ab2" class="search" onkeydown="search()"/>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <button type="submit" name="a2" id="ab2" data-mdb-ripple-color="dark" class="btnnn">Search</button>
                    </div>
                    </form>
                </div>
                <div class="nav-grid--box--nav">
                    <center><p style="color: aqua;font-size: 30px;margin-top: 6px;font-family:cursive">Justchat</p></center>                      
                </div>
                <div class="nav-grid--box--main" >
                    <div class="nav-grid--box--main--grid">
                            <?php
                                if(isset($_SESSION['email']))
                                {
                                    echo '<div>
                                    <p style="font-size: 16px;margin-top: 10px;"><b>'.$_SESSION['Name'].'</b></p>
                                    </div>';
                                }
                                else{
                                    echo '<div>
                                    <p style="font-size: 16px;margin-top: 10px;"><b>Guest user</b></p>
                                    </div>';
                                }
                            ?>
                        <div class="profile-icon-inner nav-grid--box--main--grid--box" style="margin-left: 5px;">
                            <?php
                                if(isset($_SESSION['email']))
                                {  if($_SESSION['role']==0)
                                    {                    
                                      echo '<a href="home_user.php"><img src="pics/'.$_SESSION['pic'].'" alt="" style="width: 40px;height: 40px;" class="profile-icon nav-grid--box--main--grid--box--img"></a>';
                                    }
                                    elseif($_SESSION['role']==1)
                                    {
                                       echo '<a href="home_admin.php"><img src="pics/'.$_SESSION['pic'].'" alt="" style="width: 40px;height: 40px;" class="profile-icon nav-grid--box--main--grid--box--img"></a>';

                                    }
                                    elseif($_SESSION['role']==2)
                                    {
                                       echo '<a href="home_newshead.php"><img src="pics/'.$_SESSION['pic'].'" alt="" style="width: 40px;height: 40px;" class="profile-icon nav-grid--box--main--grid--box--img"></a>';

                                    }
                                }
                                else{
                                    echo '<a href="index.php"><img src="pics/gu.jpg" alt="" class="profile-icon nav-grid--box--main--grid--box--img"></a>';
                                }
                             ?>
                        </div>
                    </div>
                </div>
      </div>
</nav>
