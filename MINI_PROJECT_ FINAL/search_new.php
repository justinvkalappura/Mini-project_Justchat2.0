<section class="main-con">
    <div class="post-con">
        <section>
            <div class="container py-5">                               
                <div class="row">     
                <?php
                    if(isset($_SESSION['allres']))
                    {   $result= $_SESSION['allres'];
                        foreach ($result as $roww)
                        {   echo '<div class="col-lg-4">
                                    <div class="card mb-4">
                                        <div class="card-body text-center">';
                                                echo '<img src="pics/'.$roww[7].'" alt="avatar" style="width: 100px;height: 100px;border-radius: 50%;">';
                                                echo '<h5 class="my-3">'. $roww[1]."&nbsp;".$roww[2].'</h5>';
                                                echo '<p class="text-muted mb-4">'.$roww[5].'</p>';
                                                echo '<div class="d-flex justify-content-center mb-2">
                                                <button type="button" class="btn btn-outline-primary ms-1"><a href="message_home.php">Message</a></button>
                                            </div>                            
                                        </div>
                                    </div>
                                  </div>';
                        }
                    }           
                ?>
                </div>
            </div>
        </section>
    </div>                    
</section>
</main>