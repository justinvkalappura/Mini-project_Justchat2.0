<section class="main-con">
    <div class="post-con">
        <section>
            <div class="container py-5">                               
                <div class="row">     
                <?php
                    if(isset($_SESSION['allresults']))
                    {   $result= $_SESSION['allresults'];
                        foreach ($result as $row)
                        {   echo '<div class="col-lg-4">
                                    <div class="card mb-4">
                                        <div class="card-body text-center">';
                                                echo '<img src="pics/'.$row[7].'" alt="avatar" style="width: 100px;height: 100px;border-radius: 50%;">';
                                                echo '<h5 class="my-3">'. $row[1]."&nbsp;".$row[2].'</h5>';
                                                echo '<p class="text-muted mb-4">'.$row[5].'</p>';
                                                echo '<div class="d-flex justify-content-center mb-2">
                                                <button type="button" class="btn btn-primary">Follow</button>&nbsp;&nbsp;
                                                <button type="button" class="btn btn-outline-primary ms-1">Message</button>
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