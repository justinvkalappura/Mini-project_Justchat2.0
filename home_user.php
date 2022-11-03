<?php

   require_once('connect.php');

function sessionexists()
{   if(!empty($_SESSION['email']))
    {  return true;
      }
    else
    {  return false;
     }
}

if (sessionexists())
{

echo '<!DOCTYPE html>
<html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0,shrink-to-fit=no">

            <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500&display=swap" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro:400,600&display=swap" rel="stylesheet">
            <link rel="stylesheet" href="./fonts/icomoon/style.css">
            <link rel="stylesheet" href="./css/owl.carousel.min.css">
            <link rel="stylesheet" href="./css/bootstrap.min.css">
            <!-- <link rel="stylesheet" href="./css/home1.css"> -->
            <link rel="stylesheet" href="./css/home.css">
            <link rel="stylesheet" href="./css/style.css">
            <link rel="shortcut icon" href="./icons/favicon/facebook123.jpg" style="border-radius:50%;" type="image/x-icon">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
                integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
                crossorigin="anonymous" referrerpolicy="no-referrer"/>
            
            <title>User_home_page</title>

            <script src="https://kit.fontawesome.com/10c6a50922.js" crossorigin="anonymous"></script>
            <script src="https://kit.fontawesome.com/10c6a50922.js" crossorigin="anonymous"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
            <script src="./js/index.js"></script>
            <script src="js/jquery-3.3.1.min.js"></script>
            <script src="js/popper.min.js"></script>
            <script src="js/bootstrap.min.js"></script>
            <script src="js/main.js"></script>

        </head>

        <body>';?>
             <?php include ('responsive.php') ?>
             <?php include ('navbar.php') ?>
             <?php include ('part1_user.php') ?>
             <?php include ('part3_guest.php') ?>
             <?php include ('part2_user.php') ?>
             <?php
        echo '</body>
</html>';

exit();
}
else
{     echo "<script>window.open('home_guest.php','_self')</script>";
}
?>