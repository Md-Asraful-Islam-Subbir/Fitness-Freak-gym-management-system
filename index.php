<?php
echo '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>FitNess - Home | By Code Info</title>
    <link rel="stylesheet" href="style.css">
    <!-- Font Awesome Icons cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Alkatra&family=Hammersmith+One&family=Poppins:wght@500&display=swap" rel="stylesheet">
    <style>

        .home {
            background-image: url("images/2.jpg");
            background-size: cover;
            background-position: center;
        }
        #div1{
            background-color: rgba(77, 52, 52, 0.3);
            width:20rem;
height:25rem;
          }
          #box-container{
            margin-left: 8rem;
          }
          .btttn{
            transition:all .5s;
            text-decoration:none;
            color:white;
            padding:.5rem;
            border-radius: .5rem;
            background-color:rgba(77, 52, 52, 0.8);
          }
          .btttn:hover{
background-color:rgba(77, 52, 52, 0.6);
          }  
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
            <a href="index.php"class="btn">Home</a>
            <a href="aboutus.php"class="btn">About Us</a>
            <a href="viewpackage.php"class="btn">Packages</a>
            <a href="class.php"class="btn">Class</a>
            <button id="gallery" href=""class="btn"style="border:none;">Gallery</button>
            <a href="jointrainer.php"class="btn">Join Our Team</a>
            <a href="contact.php"class="btn">Contact</a>
            
            <a href="#"style="position:relative; top:.6rem;">|</a>
            <a href="entryform.php" class="btn">Register</a>
            <a href="userlogin.php"  class="btn">Admin</a>
        </nav>
    </header>
    <div id="flow" style="display:none;margin-left:50.5rem;position:absolute;margin-top:-1rem ">
    <a class="btn"style="cursor:pointer" href="photos.php">Photos</a><br>
    <a class="btn"style="cursor:pointer"href="videos.php">Videos</a>
    </div>
    <section class="home">
        <div class="max-width">
            <div class="home-content">
                <h3>NO Pain NO Gain</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta, numquam, sequi assumenda nam, vel nihil repudiandae omnis eveniet est excepturi atque molestias at dolores fugit!</p>
                <a href="discover.php" class="btn">Get started</a>
            </div>
        </div>
    </section>
    <section class="about" id="about"style="  background-color: white;height:21.2rem;">

        <div class="row"style="display: flex;justify-content:space-between;">

            <div class="content"style="margin-left:2rem;">
                <span><h2>About us</h2></span>
                <h3>daily workout and stay active at home</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum, 
                    soluta quia aspernatur ipsum,<br> amet mollitia molestiae recusandae 
                    ab distinctio blanditiis rem corrupti assumenda nesciunt<br> ratione, 
                    provident harum quidem non excepturi?</p>
                <ul>
                    <li> <i class="far fa-check-square"></i> how to support your immune system </li>
                    <li> <i class="far fa-check-square"></i> a guide to 30 day fitness & workout challenges</li>
                    <li> <i class="far fa-check-square"></i> guide to ease your back in the gym </li>
                    <li> <i class="far fa-check-square"></i> the mental health benefits of exercise in home </li>
                </ul>    
                <a href="aboutus.php" class="bttn">Read more</a>
            </div>

            <div class="image">
                <img src="images/3.jpg" alt=""style="height:20rem; width:35rem; object-fit:cover;margin-top:1rem;">
            </div>

        </div>

    </section>
    
    <!-- end -->

    <!-- pricing -->

    <section class="pricing" id="pricing">

        <h1 class="heading"style="margin-left:2rem">Package plan</h1>

        <div class="box-container"id="box-container">

            <div class="box"id="div1">
                <h3>Preliminary</h3>
                <div class="price"><span>$ </span>20 <span>/mo</span></div>
                <h3 class="month">3 months</h3>
                <div class="list">
                    <p><i class="fas fa-check"></i> yoga</p>
                    <p><i class="fas fa-times"></i> weight lifting</p>
                    <p><i class="fas fa-check"></i> simple training</p>
                    <p><i class="fas fa-times"></i> memebership</p>
                </div>
                <a href="entryform.php" class="btttn">choose the plan</a>
            </div>

            <div class="box"id="div1">
                <h3>Wt.Gain</h3>
                <div class="price"><span>$ </span>60 <span>/mo</span></div>
                <h3 class="month">6 months</h3>
                <div class="list">
                    <p><i class="fas fa-check"></i> yoga</p>
                    <p><i class="fas fa-check"></i> weight lifting</p>
                    <p><i class="fas fa-check"></i> normal training</p>
                    <p><i class="fas fa-times"></i> memebership</p>
                </div>
                <a href="entryform.php" class="btttn">choose the plan</a>
            </div>

            <div class="box"id="div1">
                <h3>Wt.Loss</h3>
                <div class="price"><span>$ </span>90 <span>/mo</span></div>
                <h3 class="month">12 months</h3>
                <div class="list">
                    <p><i class="fas fa-check"></i> yoga</p>
                    <p><i class="fas fa-check"></i> weight lifting</p>
                    <p><i class="fas fa-check"></i> full training</p>
                    <p><i class="fas fa-check"></i> memebership</p>
                </div>
                <a href="entryform.php" class="btttn">choose the plan</a>
            </div>

        </div>

    </section>
    <footer id="contacts" style="margin-top:5rem;">
    <section class="footer">

    <div class="box-container"style="margin-left:6rem;color:white;">

        <div class="box">
            <h3><i class="fas fa-dumbbell"></i> fitness freak</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis.</p>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#"> <i class="fas fa-phone"></i> +01878-507129</a>
            <a href="#"> <i class="fas fa-phone"></i> +01943-566017</a>
            <a href="#"> <i class="fas fa-envelope"></i> admin@gmail.com</a>
            <a href="#"> <i class="fas fa-map"></i> Barishal, Bangladesh</a>
        </div>

        <div class="box">
            <h3>quick links</h3>
            <a href="#"> <i class="fas fa-arrow-right"></i> home</a>
            <a href="#about"> <i class="fas fa-arrow-right"></i> about</a>
            <a href="entryform.php"> <i class="fas fa-arrow-right"></i> resgister</a>
            <a href="#"> <i class="fas fa-arrow-right"></i> packages</a>
        </div>

    </div>

    <div class="share"style="color:white;">
        <a href="#" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-twitter"></a>
        <a href="#" class="fab fa-pinterest"></a>
        <a href="#" class="fab fa-linkedin"></a>
        <a href="#" class="fab fa-instagram"></a>
    </div>

    <div class="credit">&copy; all rights are reserved by <span>sabbir</span></div>

</section>
    </footer>
</body>
</html>';
?>
