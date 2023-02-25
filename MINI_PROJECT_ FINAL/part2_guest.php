<style>

.post-con--box--header--img-con--img
{   height:5rem;
    width:5rem;
    border: 2px solid #4075df;
}

</style>


  <?php
    $box = "SELECT * FROM `post_feed` ORDER BY `i_id` DESC";
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


<section class="main-con">
                    <div class="post-con">
                           <?php
                                if(isset($_SESSION['allresults']))
                                {   $result= $_SESSION['allresults'];
                                    foreach ($result as $row)
                                    { echo' <div class="post-con--box">
                                              <div id="guest_add_main_div">
                                                <div class="guest_add_div">
                                                    <img src="./pics/'.$row[6].'" alt="" class="guest_add_img">
                                                    <div class="guest_add_text_div">
                                                        <p class="guest_add_name">'.$row[5].'</p>
                                                        <a href="" class="guest_add_date">'. $row[4].",&nbsp;".$row[3].'</a>
                                                    </div>
                                                    
                                                </div>
                                              </div>
                                        
                                                <div class="post-con--main">
                                                    <img src="./post_pics/'.$row[1].'" alt="" class="post-con--main--img">
                                                </div>
                                                        
                                                    
                                                <div class="post-con--reaction">
                                                    <div id="guest_add_bottom_div">
                                                        <p style="font-size: 15px;">'.$row[2].'</p>
                                                    </div> 
                                                </div>
                                            </div>';
                                    }
                                }           
                            ?>                            
                    </div>
                </section>
            </main>