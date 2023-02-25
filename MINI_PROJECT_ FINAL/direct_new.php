<style>

.post-con--box--header--img-con--img1
{

height:6rem;
width:6rem;
border-radius: 50%;
border: 2px solid #4075df;

}

</style>

<?php
    $box = "SELECT * FROM `user_table` where u_role='0'";
    $result = mysqli_query($conn,$box);
    $_SESSION['Name']=$row['u_firstname']. ' ' .$row['u_lastname'];
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
                
                    <div class="post-con--box--header">
                       <div class="post-con">
                        <br><br>
                        <!-- <div class="post-con--box"> -->
                        <?php
                    if(isset($_SESSION['allresults']))
                    {   $result= $_SESSION['allresults'];
                        foreach ($result as $row)
                        { echo'
                            <div class="post-con">
                        <br><br> 
                        <div class="post-con--box--header--img-con" style="border-style: solid;border-color: #423F3F;width: 850px;">                       
                        <div class="active-con--flex-con--flex">
                                        
                            <div class="guest_add_div">
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <div><a href="message_home.php">
                                    <button type="button" class="btn btn-primary">Message</button></a>
                                </div>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                                <img src="./pics/'.$row[7].'" alt="" class="guest_add_img">
                                <div class="guest_add_text_div" style="height: 40px;">
                                    <p class="guest_add_name">'. $row[1].",&nbsp;".$row[2].'</p>
                                    <a href="" class="guest_add_date">'.$row[5].'</a>
                                </div>
                                 
                                
                            </div>
                        </div>
                        </div>';
                        }
                    }
                        ?> 
                       </div>
                       <br>
                        <!-- </div> -->
                    </div>
                 
                </section>
            </main>