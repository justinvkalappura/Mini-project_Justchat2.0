<?php
    include "connect.php";
    if(isset($_POST["p3"]))
    {   $a=$_FILES["p1"]["name"];
        move_uploaded_file($_FILES["p1"]["tmp_name"],"post_pics/".$a);
        $b=$_POST["p2"];
        $c=$_POST["time"];
        $out=mysqli_query($conn,"INSERT INTO `post_feed`(`post_pic`,`post_desc`,`post_time`) VALUES ('$a','$b','$c')" );
        if($out)
        {   echo "<script>window.open('home_user.php','_self')</script>";
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
                    <button name="p3" class="btn" type="submit">Sign in</button>
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
