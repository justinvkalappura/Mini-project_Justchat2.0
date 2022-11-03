 <?php
      
    if(ISSET($_POST['a2']))
    {   $keyword = $_POST['a1'];    
        $sql = "SELECT * FROM `user_table` WHERE `u_firstname` LIKE '%$keyword%' ORDER BY `u_firstname`";
        $result = mysqli_query($conn,$sql);
        if ($result)
        {
            if (mysqli_num_rows($result)>0)
            {  
                $search_data = mysqli_fetch_all($result);
                $_SESSION['allresults']= $search_data;
                header('location: search_home.php');
                while($fetch = mysqli_fetch_array($result))
               {    $_SESSION['firstName'] = $row['u_firstname'];
                    $_SESSION['lastName']=$row['u_lastname']; 
                    for ($x = 0; $x <= 10; $x++) 
                    {   echo "The number is: $x <br>";
                    }
                    echo "<script>window.open('search_home.php','_self')</script>";
                }
            } 
            else 
            {   echo "No matching records found.";
            }
        }
    }

?>  


<nav class="nav">
          <div class="nav-grid">
                    <div class="nav-grid--box--search">
                        <div class="nav-grid--box--search--icon-box">
                            <img src="./icons/favicon/facebook123.jpg" style="border-radius:50%;" alt="" class="nav-grid--box--search--icon-box--icon">
                        </div>
                        <form method="POST" action="#">
                        <div class="nav-grid--box--search--search">
                            <i class="nav-grid--box--search--search--input--icon fa-1x fa-solid fa-magnifying-glass"></i>
                            <input class="nav-grid--box--search--search--input" placeholder="Search Justchat" type="search" name="a1" id="ab2" class="search" onkeydown="search()"/>
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            <button type="submit" name="a2" id="ab2" data-mdb-ripple-color="dark" style="z-index: 1;font-size:15px;">Search</button>
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
                                        <p style="font-size: 16px;margin-top: 10px;"><b>'.$_SESSION['email'].'</b></p>
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
                                    {                      
                                       echo '<img src="pics/'.$_SESSION['pic'].'" alt="" style="width: 40px;height: 40px;" class="profile-icon nav-grid--box--main--grid--box--img">';
                                        
                                    }
                                    else{
                                        echo '<img src="pics/gu.jpg" alt="" class="profile-icon nav-grid--box--main--grid--box--img">';
                                    }
                                 ?>
                            </div>
                        </div>
                    </div>
          </div>
</nav>
