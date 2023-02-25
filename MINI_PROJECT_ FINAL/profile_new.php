
<?php
    $e=$_SESSION['Name'];
    $box = "SELECT * FROM `post_feed` WHERE `post_id`='$e'";
    $result = mysqli_query($conn,$box);
    if ($result)
    {   if (mysqli_num_rows($result)>0)
        {   $search_data = mysqli_fetch_all($result);
            $_SESSION['allresults']= $search_data;
        } 
        else 
        {   echo "No matching records found.";
        }
    }   
?>  

<?php
    $sql = "UPDATE MyGuests SET lastname='Doe' WHERE id=2";
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
                            <div class="profile-icon-inner nav-grid--box--main--grid--box" style="margin-left: 5px; margin-top: 30px;;width: 130px;height: 130px;border: 2px solid #FFFFFF;">                                <?php
                                    echo '<img src="pics/'.$_SESSION['pic'].'" alt="Generic placeholder image" style="width: 130px;height: 130px;" class="profile-icon nav-grid--box--main--grid--box--img" >';
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
                                                        <p class="text-muted mb-0" style="color: black;font-size:15px;">'.$_SESSION['Name'].'</p></div>';
                                                ?>                                            
                                            </div>
                                            <hr>
                                            <div class="row">
                                            <div class="col-sm-3">
                                                <p class="mb-0" style="color: black;font-size:15px;"><b>Email</b></p>
                                            </div>
                                                <?php
                                                        echo '<div class="col-sm-9">
                                                        <p class="text-muted mb-0" style="color: black;font-size:15px;">'.$_SESSION['email'].'</p></div>';
                                                ?> 
                                            </div>
                                            <hr>
                                            <div class="row">
                                            <div class="col-sm-3">
                                                <p class="mb-0" style="color: black;font-size:15px;"><b>Phone</b></p>
                                            </div>
                                                <?php
                                                        echo '<div class="col-sm-9">
                                                        <p class="text-muted mb-0" style="color: black;font-size:15px;">'.$_SESSION['con'].'</p></div>';
                                                ?>                                            
                                            </div>
                                            <hr>
                                            <div class="row">
                                            <div class="col-sm-3">
                                                <p class="mb-0" style="color: black;font-size:15px;"><b>Mobile</b></p>
                                            </div>
                                                <?php
                                                        echo '<div class="col-sm-9">
                                                        <p class="text-muted mb-0" style="color: black;font-size:15px;">'.$_SESSION['con'].'</p></div>';
                                                ?>                                            
                                            </div>
                                            <hr>
                                            <div class="row">
                                            <div class="col-sm-3">
                                                <p class="mb-0" style="color: black;font-size:15px;"><b>City</b></p>
                                            </div>
                                                <?php
                                                        echo '<div class="col-sm-9">
                                                        <p class="text-muted mb-0" style="color: black;font-size:15px;">'.$_SESSION['city'].'</p></div>';
                                                ?>                                            
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                <div class="d-flex justify-content-between align-items-center mb-4">
                                    <p class="lead fw-normal mb-0" style="color: black;font-size:15px;"><b>Recent posts</b></p>
                                    <p class="mb-0" style="color: black;font-size:12px;"><a href="#!" class="text-muted"><b>Show all</b></a></p>
                                </div>
                                <?php
                                if(isset($_SESSION['allresults']))
                                {   $result= $_SESSION['allresults'];
                                    foreach ($result as $row)
                                    {    echo '<div class="row g-2">
                                                <div class="col mb-2">
                                                    <img src="./post_pics/'.$row[1].'" alt="image 1" class="w-100 rounded-3">
                                                </div>
                                            </div>';
                                    }
                                }
                                else {
                                  echo 'No matching found';
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
       </section>
    </div>
</section>
</main>