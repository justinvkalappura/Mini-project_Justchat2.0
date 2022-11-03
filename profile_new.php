
<section class="main-con">
    <div class="post-con">
        <section style="margin-left:0px;">
            <div class="container py-5 h-100" >
                <div class="row d-flex justify-content-center align-items-center h-100" >
                    <div class="col col-lg-9 col-xl-7" >
                        <div class="card" >
                            <div class="rounded-top text-white d-flex flex-row" style="background-color: #000; height:170px;">
                            &nbsp;&nbsp;&nbsp;
                                <div class="ms-4 mt-5 d-flex flex-column" style="width: 160px;">
                                <?php
                                    echo '<img src="pics/'.$_SESSION['pic'].'" alt="Generic placeholder image" class="img-fluid img-thumbnail mt-4 mb-2" style="border-radius:100%;width: 150px; z-index: 1">';
                                 ?>
                                 <br>
                                    <button type="button" class="btn btn-outline-dark" data-mdb-ripple-color="dark" style="z-index: 1;font-size:15px;">Edit profile</button>
                                </div>
                                &nbsp;&nbsp;&nbsp;
                                <?php
                                 echo '<div class="ms-3" style="margin-top: 115px;">
                                    <h3>'. $_SESSION['firstName']."&nbsp;".$_SESSION['lastName'].'</h3>';
                                    echo '<p style="font-size: 15px;">'.$_SESSION['email'].'</p>
                                </div>';
                                ?>
                            </div>
                            <div class="p-4 text-black" style="background-color: #f8f9fa;">
                                <div class="d-flex justify-content-end text-center py-1">
                                    <div>
                                        <p class="mb-1 h5" style="color: black;font-size:20px;">253</p>
                                        <p class="text-muted mb-4" style="color: black;font-size:15px"><b>Posts</b></p>
                                    </div>
                                    <div class="px-3">
                                        <p class="mb-1 h5" style="color: black;font-size:20px;">1026</p>
                                        <p class="text-muted mb-4" style="color: black;font-size:15px"><b>Followers</b></p>
                                    </div>
                                    <div>
                                        <p class="mb-1 h5" style="color: black;font-size:20px;">478</p>
                                        <p class="text-muted mb-4" style="color: black;font-size:15px"><b>Following</b></p>
                                    </div>
                                    </div>
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
                                                        <p class="text-muted mb-0" style="color: black;font-size:15px;">'.$_SESSION['firstName']."&nbsp;".$_SESSION['lastName'].'</p></div>';
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
                                <div class="row g-2">
                                    <div class="col mb-2">
                                        <img src="images/n4.webp"
                                        alt="image 1" class="w-100 rounded-3">
                                    </div>
                                    <div class="col mb-2">
                                        <img src="images/n2.jpg"
                                        alt="image 1" class="w-100 rounded-3">
                                    </div>
                                </div>
                                <div class="row g-2">
                                    <div class="col">
                                        <img src="images/n3.webp" alt="image 1" class="w-100 rounded-3">
                                    </div>
                                    <div class="col">
                                        <img src="images/n1.webp"
                                        alt="image 1" class="w-100 rounded-3">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
       </section>
    </div>
</section>
</main>