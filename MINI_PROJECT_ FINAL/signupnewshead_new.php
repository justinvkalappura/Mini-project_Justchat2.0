<?php
 if(isset($_POST["zy7"]))
 {   $a=$_POST["zy1"];
     $b=$_POST["zy2"];
	 $c=$_POST["zy3"];
     $d=$_POST["zy5"];
	 $e=$_FILES["zy6"]["name"];
     move_uploaded_file($_FILES["zy6"]["tmp_name"],"pics/".$e);
	 $result=mysqli_query($conn,"INSERT INTO `newshead_table`(`n_company`, `u_email`, `u_pwd`, `n_ln`, `n_pic`, `n_role`) VALUES ('$a','$b','$c','$d','$e','2')" );     
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
                <form name='nafoo' action='#' method='post' enctype="multipart/form-data">
                    <div class="form-field">
                        <input name="zy1" id="sj1" type="text" placeholder="Company name" required  onblur="return fnameValidate()" />
                    </div>
                    <div><span id="fnameValidate" style=" color: red;font-size: 15px;"></span></div>

                    <div class="form-field">
                        <input name="zy2" id="sj3" type="email" placeholder="Email" required onblur="return emailValidate()" />                         
                    </div>
                    <div><span id="emailValidate" style=" color: red;font-size: 15px;"></span></div>

                    <div class="form-field">
                        <input name="zy3" id="sj4" type="email" placeholder="Password" required onblur="return validatepwd()" />
                    </div>
                    <div><span id="validatepwd" style=" color: red;font-size: 15px;"></span></div>

                    <div class="form-field">
                        <input name="zy4" id="sj5" type="password" placeholder="Confirm Password" required onblur="return validateconfirmPassword()" />
                    </div>
                    <div><span id="validateconfirmPassword" style=" color: red;font-size: 15px;"></span></div>

                    <div class="form-field">
                        <input name="zy5" id="sj7" type="text" placeholder="Lincense number" required onblur="return cnoValidate()" />                         
                    </div>
                    <div><span id="cnoValidate" style=" color: red;font-size: 15px;"></span></div>

                    <div class="form-field">
                        <input name="zy6" id="sj8" type="file" placeholder="Profile photo" required onblur="return fileValidation()" />                         
                    </div>
                    <div><span id="fileValidation" style=" color: red;font-size: 15px;"></span></div>

                    <div class="form-field">
                        <button name="zy7" id="sj9" class="btn" type="submit" onclick="return registerValid()">Sign in</button>
                    </div>
                </form>
            </center>
        </section>
</main>
