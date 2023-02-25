<?php
    include "connect.php";
    if(isset($_POST["p3"]))
    {   $a=$_FILES["p1"]["name"];
        move_uploaded_file($_FILES["p1"]["tmp_name"],"news_feed/".$a);
        $b=$_POST["p2"];
        date_default_timezone_set('Asia/Kolkata');
        $c=date("h:i:sa");
        $d=date("Y/m/d");
        $newDate = date("d-m-Y", strtotime($d));
        $e=$_SESSION['Name'];
        $f=$_SESSION['pic'];
        $out=mysqli_query($conn,"INSERT INTO `news_feed`(`news_feed`, `news_desc`, `post_time`,`post_date`,`post_id`,`news_pic`)VALUES ('$a','$b','$c','$newDate','$e','$f')" );
        if($out)
        {   echo "<script>window.open('home_newshead.php','_self')</script>";
         }
        else
        {   echo "Error: ".$sql."<br>".mysqli_error($conn);
         }
    }	 
?>

<section class="main-con" style="margin-top: 200px;">  
<center>
            <form method="post" action="#" enctype="multipart/form-data">
                <div class="form-field">
                    <input name="p1" type="file" placeholder="Feed to post" required/>                         
                </div>

                <div class="form-field">
                    <input name="p2" type="text" placeholder="Description" required/>                      
                </div>

                <div class="form-field">
                    <button name="p3" class="btn" type="submit">Post</button>
                </div>

                <script>
                    `use strict`
                    var datetime = new Date();
                    console.log(datetime);
                    document.getElementById("time").textContent = datetime; //it will print on html page
                </script>
            </form>
        </center>

</section>
</main>