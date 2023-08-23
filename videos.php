<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>photos</title>
    <link rel="stylesheet" href="style.css">
    <!-- Font Awesome Icons cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
    <style>
#gallery{
            background-color:#333;
            cursor:pointer;
        }
    #gallery:hover{
        background-color: rgba(202, 179, 179,.4);
    } 
    </style>
    <script src="hover.js" defer></script>
</head>
<body>
    <header class="header">
        <a href="#" class="logo">
            <h2><i class="fas fa-dumbbell"></i>FitNess Freak</h2>
        </a>
        <nav class="navbar">
            <a href="index.php" class="btn">Home</a>
            <a href="aboutUs.php" class="btn">About Us</a>
            <a href="viewpackage.php" class="btn">Packages</a>
            <a href="class.php" class="btn">Class</a>
            <button id="gallery" href=""class="btn"style="border:none;">Gallery</button>
            <a href="jointrainer.php" class="btn">Join Our Team</a>
            <a href="#contacts" class="btn">Contact</a>
            
            <a href="#" style="position:relative; top:.6rem;">|</a>
            <a href="entryform.php" class="btn">Register</a>
            <a href="userlogin.php" class="btn">Admin</a>
           
        </nav>
        
    </header>
    <div>
    <img src="images/16.jpg" alt=""style="height:20rem; width:100%; filter: brightness(50%);object-fit:cover;">
    <div class="infinite-page-title-content infinite-item-pdlr"style="position:absolute;margin:-15rem 0 0 40rem;text-align:center;color:white;scale:1.3;"><h1 class="infinite-page-title" data-orig-font="54px" style="font-size: 40px;">VIDEOS</h1><span>Video gallery</span></div>
    </div>
    <div id="flow" style="display:none;margin-left:50.5rem;position:absolute;margin-top:-21rem ">
    <a class="btn"style="cursor:pointer" href="photos.php">Photos</a><br>
    <a class="btn"style="cursor:pointer"href="videos.php">Videos</a>
    </div>
    <div>
    <video controls  unmuted loop width="40%" src="images/Videos - FIT CLUB GYMS.mp4" style=" margin-left:6rem;margin-top:1.5rem;float:left"></video>
    <video controls  muted loop width="40%" src="images/Videos - FIT CLUB GYMS (2).mp4" style=" margin-left:9rem;margin-top:1.5rem;float:left"></video>
    <video controls  muted loop width="40%" src="images/Videos - FIT CLUB GYMS (3).mp4" style=" margin-left:6rem;margin-top:1.5rem;float:left"></video>
    </div>
    <section class="footer"style="background-color: rgb(58, 65, 59);margin-top:50rem;">
<div class="credit">&copy; all rights are reserved by <span>sabbir</span></div>

</section>
    </html>
