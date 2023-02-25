<?php
require_once('connect.php');
if(isset($_GET['id']))
{   $idd = $_GET['id']; 
    $update = "UPDATE `user_table` SET u_status ='1' WHERE u_email='$idd'";
    $updatex = "UPDATE `post_feed` SET u_status ='1' WHERE u_email='$idd'";
    $resultt = mysqli_query($conn, $update);
    $resulttx = mysqli_query($conn, $updatex);
    if($resultt)
    {
        header('location:removeuser_home.php');
    }
    else
    {
        echo'NOt here';
    }
}
?>