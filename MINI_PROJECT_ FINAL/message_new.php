<style>

.post-con--box--header--img-con--img1{

height:6rem;
width:6rem;
border-radius: 50%;
border: 2px solid #4075df;

}

</style>
<section class="main-con">
    <nav class="nav" style="background-color: #343434;border-radius: 10px;width: 850px;">
        <div class="nav-grid" >
            <div class="nav-grid--box--main" >
                <div class="nav-grid--box--main--grid" >
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
                    <div class="profile-icon-inner nav-grid--box--main--grid--box">
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
                    <div>
                    
                        <i class="nav-grid--box--search--search--input--icon fa-1x fa-solid fa-phone"></i>
                           
                    </div>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <div>

                        <i class="nav-grid--box--search--search--input--icon fa-1x fa-solid fa-video"></i>

                    </div>
                </div>
            </div>
        </div>
    </nav>

<br><br>
&nbsp;&nbsp;&nbsp;&nbsp;
    <div class="nav-grid--box--search--search" style="margin-top: 485px;">
                            <i class="nav-grid--box--search--search--input--icon fa-1x fa-solid fa-magnifying-glass"></i>
                            <input class="nav-grid--box--search--search--input" placeholder="Message" type="search" name="a1" id="ab2" class="search" onkeydown="search()" style="width:    
                            810px;margin-bottom: 5px;"/>
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            <img src="./images/senduuu.jpg" style="height: 46px;width: 46px;border-radius: 100%;">
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        </div>
</section>
</main>