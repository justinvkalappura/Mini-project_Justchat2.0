<?php
 
 if(isset($_POST['save']))
 {
    $name=$_SESSION['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $update = "update `user_table` set u_firstname='$name',u_email='$email',u_contact='$phone' where u_email='$email'";
    $sql2=mysqli_query($conn,$update);
    if($sql2)
    { 
        /*Successful*/
        header('location:login_home.php');
    }
    else
    {
        /*sorry your profile is not update*/
        header('location:Signup_home.php');
    }
 }
?>


<section class="main-con">
<div class="post-con">
    <section style="margin-left:0px;">
        <div class="container py-5 h-100" >
            <div class="row d-flex justify-content-center align-items-center h-100" >
                <div class="col col-lg-9 col-xl-7" >
                    <div class="card" >
                    <div class="rounded-top text-white d-flex flex-row" style="background-color: #000; height:170px;">
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <div class="profile-icon-inner nav-grid--box--main--grid--box" style="margin-left: 5px; margin-top: 30px;;width: 130px;height: 130px;border: 2px solid #FFFFFF;
                            ">                                
                            <?php
                                    echo '<img src="pics/'.$_SESSION['pic'].'" alt="Generic placeholder image" style="width: 130px;height: 130px;" class="profile-icon 
                                    nav-grid--box--main--grid--box--img" >';
                                 ?>
                                 <br>
                                </div>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <?php
                                 echo '<div class="ms-3" style="margin-top: 115px;">
                                    <h3>'. $_SESSION['Name'].'</h3>';
                                    echo '<p style="font-size: 15px;">'.$_SESSION['email'].'</p>
                                </div>';
                                ?>
                            </div>
                            <div class="p-4 text-black" style="background-color: #f8f9fa;">
                                <div>
                                    
                                    <div>
                                        <p class="mb-1 h5" style="color: black;font-size:20px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                                    </div>
                                
                                </div>
                            </div>
                        <form action="#" method="post">
                            <div class="card-body p-4 text-black">
                            <div class="col-lg-14" >
                                    <div class="card mb-4" style="border-color: silver;border-style: solid;">
                                    <div class="card-body">
                                        <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0" style="color: black;font-size:15px;"><b>Full Name</b></p>
                                        </div>
                                            <?php
                                                    echo '<div class="col-sm-9">
                                                    <input class="text-muted mb-0" value="'.$_SESSION['Name'].'" id="name" style="color: black;font-size:15px;"></div>';
                                            ?>                                            
                                        </div>
                                        <hr>
                                        <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0" style="color: black;font-size:15px;"><b>Email</b></p>
                                        </div>
                                            <?php
                                                    echo '<div class="col-sm-9">
                                                    <input class="text-muted mb-0" id="email" value="'.$_SESSION['email'].'" style="color: black;font-size:15px;"></div>';
                                            ?> 
                                        </div>
                                        <hr>
                                        <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0" style="color: black;font-size:15px;"><b>Phone</b></p>
                                        </div>
                                            <?php
                                                    echo '<div class="col-sm-9">
                                                    <input class="text-muted mb-0" id="phone" value="'.$_SESSION['con'].'" style="color: black;font-size:15px;"></div>';
                                            ?>                                            
                                        </div>
                                        <hr>
                                       
                                    </div>
                                </div>
                            </div>
                        </form>    
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </section>
</div>
</section>
</main>