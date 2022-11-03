<?php
 include "connect.php";
 if(isset($_POST["nh7"]))
 {   $a=$_POST["nh1"];
     $b=$_POST["nh2"];
	 $c=$_POST["nh3"];
     $d=$_POST["nh5"];
	 $e=$_FILES["nh6"]["name"];
     move_uploaded_file($_FILES["nh6"]["tmp_name"],"pics/".$e);
	 $result=mysqli_query($conn,"INSERT INTO `newshead_table`(`n_company`, `n_email`, `n_pwd`, `n_ln`, `n_pic`, `n_role`) VALUES ('$a','$b','$c','$d','$e','2')" );     
     $out=mysqli_query($conn,"INSERT INTO `login_table`(`u_email`, `u_pwd`, `role`) VALUES ('$b','$c','2')" );   
     if($result)
     {   echo "<script>window.open('home_admin.php','_self')</script>";
      }
     else
     {   echo "Error occured";
      }	
  }	 
?>


         <section class="main-con" style="margin-top: 100px;">
            <center>
                <div id="bg"></div>
                <form name='nafo' action='#' method='post' enctype="multipart/form-data">
                    <div class="form-field">
                        <input name="nh1" id="sn1" type="text" placeholder="Company name" required  onblur="return fnameValidate()" />
                    </div>
                            
                    <div class="form-field">
                        <input name="nh2" id="sn2" type="email" placeholder="Email" required onblur="return emailValidate()" />                         
                    </div>

                    <div class="form-field">
                        <input name="nh3" id="sn3" type="password" placeholder="Password" required onblur="return validatepwd()" />
                    </div>

                    <div class="form-field">
                        <input name="nh4" id="sn4" type="password" placeholder="Confirm Password" required onblur="return validateconfirmPassword()" />
                    </div>

                    <div class="form-field">
                        <input name="nh5" id="sn5" type="text" placeholder="Lincense number" required onblur="return cnoValidate()" />                         
                    </div>

                    <div class="form-field">
                        <input name="nh6" id="sn6" type="file" placeholder="Profile photo" required onblur="return fileValidation()" />                         
                    </div>

                    <div class="form-field">
                        <button name="nh7" id="sn7" class="btn" type="submit" onclick="return registerValid()">Sign in</button>
                    </div>
                </form>
            </center>
 </section>
</main>
