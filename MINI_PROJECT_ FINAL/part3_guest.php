<style> 
.rot {
  width: 100px;
  height: 100px;
  position: relative;
  animation-name: example;
  animation-duration: 3s;  
  animation-iteration-count: infinite;
}

@keyframes example {
  from {top: 0px;}
  to {top: 300px;}
}
</style>

<?php
      $box = "SELECT * FROM `news_feed` ORDER BY `i_id` DESC";
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
 if(isset($_POST["s1"]))
 {   $a=$row[1];   
     if($a)
     {   echo "<script>window.open('post_feed.php','_self')</script>";
      }
     else
     {   echo "Error occured";
      }	
  }	 
?>



<section class="active-con">
            <br>
            <!-- <div class="active-con--flex-con--flex--box">
                <img src="./news_feed/'.$row[1].'" alt="" class="active-con--flex-con--flex--box--img">
                <p class="active-con--flex-con--flex--box--img--name">'.$row[5].'</p>
                <a href="" class="post-con--box--header--img-con--img--name-con--time11">'. $row[4].",&nbsp;".$row[3].'</a>
            </div> -->
            <div class="active-con--flex-con">
                    <?php
                        if(isset($_SESSION['allresults']))
                        {   $result= $_SESSION['allresults'];
                            foreach ($result as $row)
                            { echo'
                                    <div id="guest_add_main_div ">
                                    <div class="active-con--flex-con--flex" style="display: flex;flex-direction: column;">
                                        
                                        <div class="guest_add_div">
                                            <img src="./pics/'.$row[6].'" alt="" class="guest_add_img">
                                            <div class="guest_add_text_div">
                                                <p class="guest_add_name">'.$row[5].'</p>
                                                <a href="" class="guest_add_date">'. $row[4].",&nbsp;".$row[3].'</a>
                                            </div>
                                            <div style="margin-left: 100px;margin-top: 7px;background-color:black;margin-bottom: 10px;border-radius:50%;width: 30px;">
                                                <button style="Border-radius: 100%;background-color:black;"><i class="nav-grid--box--search--search--input--icon fa-2x fa-solid fa 
                                                fa-share"     
                                                aria-hidden="true" style="margin-top: 5px;margin-left:5px;"></i></button>    
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <img style="margin-left:-1px; width: 100.25%" src="./news_feed/'.$row[1].'" class="active-con--flex-con--flex--box--img11">
                                    </div>
                                    <div id="guest_add_bottom_div">
                                        <p style="font-size: 15px;">'.$row[2].'</p>
                                    </div></div>';
                            }
                        }           
                    ?>                                                 
            </div>
</section>