<?php 
    if(isset($_POST['l3']))
    { $a=$_POST['l1'];
      $b=$_POST['l2'];
      $sql="SELECT * FROM `login_table` WHERE u_email='$a' AND u_pwd='$b'";      
      $result = mysqli_query($conn,$sql);      
      if ($result)
      {
        if (mysqli_num_rows($result)>0)
        {
          $row = mysqli_fetch_array($result);
    
          if($row['role']==1)
          {
            $sql="SELECT * FROM `user_table` WHERE u_email='$a' AND u_pwd='$b'";
            $result = mysqli_query($conn,$sql);          
            if(mysqli_num_rows($result) > 0)
            {    
                while($row = mysqli_fetch_array($result))
                {    $_SESSION['Name']=$row['u_firstname']. ' ' .$row['u_lastname'];
                     $_SESSION['email']=$row['u_email'];
                     $_SESSION['con']=$row['u_contact'];
                     $_SESSION['city']=$row['u_city'];
                     $_SESSION['pic']=$row['u_pic'];
                     $_SESSION['role']=$row['u_role'];
                }
            }
            echo "<script>window.open('home_admin.php','_self')</script>";
          }
          elseif ($row['role']==0) 
          {
            $sql="SELECT * FROM `user_table` WHERE u_email='$a' AND u_pwd='$b'";
            $result = mysqli_query($conn,$sql);
            if(mysqli_num_rows($result) > 0)
            {    
                while($row = mysqli_fetch_array($result))
                {    $_SESSION['Name']=$row['u_firstname']. ' ' .$row['u_lastname'];
                     $_SESSION['email']=$row['u_email'];
                     $_SESSION['con']=$row['u_contact'];
                     $_SESSION['city']=$row['u_city'];
                     $_SESSION['pic']=$row['u_pic'];
                     $_SESSION['role']=$row['u_role'];
                }
            }
            echo "<script>window.open('home_user.php','_self')</script>";
          }
          elseif ($row['role']==2)
          {
            $sql="SELECT * FROM `newshead_table` WHERE u_email='$a' AND u_pwd='$b'";
            $result = mysqli_query($conn,$sql);
            if(mysqli_num_rows($result) > 0)
            {    
                while($row = mysqli_fetch_array($result))
                {    $_SESSION['Name']=$row['n_company'];
                     $_SESSION['email']=$row['u_email'];
                     $_SESSION['con']=$row['n_ln'];
                     $_SESSION['pic']=$row['n_pic'];
                     $_SESSION['role']=$row['n_role'];
                }
            }
            echo "<script>window.open('home_newshead.php','_self')</script>";
          }
        }
        else
        {
        echo "Error: ".$sql."<br>".mysqli_error($conn);
        }	
      }
    }
?> 



<html>
  <body>
<section class="main-con" style="margin-top: 200px;">
             <center>
            <form name='nafo' action="#" method='post'>
                <div class="form-field">
                    <input name="l1" id="lj1" type="email" placeholder="Email/Username" required onblur="return loginEmailValidate()"/>
                </div>
                <div><span id="loginEmailValidate" style=" color: red;font-size: 15px;"></span></div>

                <div class="form-field">
                    <input name="l2" id="lj2" type="password" placeholder="Password" required onblur="return loginPasswordValidate()"/>                         
                </div>
                <div><span id="loginPasswordValidate" style=" color: red;font-size: 15px;"></span></div>


                <center><p style="font-size:15px">Create an account?<a href="signup_home.php">if not</a></p></center>
          
                <div class="form-field">
                    <button name="l3" id="lj3" class="btn" type="submit" onclick="return loginValid()">Log in</button>
                </div>
            </form>
            </center>
</section>
</main>
  </body>
</html>