<?php
require_once('connect.php');
if(isset($_GET['id']))
{   $idd = $_GET['id']; 
    $update = "UPDATE `newshead_table` SET u_status ='0' WHERE u_email='$idd'";
    $resultt = mysqli_query($conn, $update);
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