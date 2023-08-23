
<!DOCTYPE html>
<?php include("func.php");?>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- custom css file link  -->
    <link rel="stylesheet" href="payment.css">
    <link rel="stylesheet" href="style.css">
    <title>paymentGateway</title>
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
    <body>
<div class="container">

    <form action="func.php" method="post">

        <div class="row">

            <div class="col">

                <h3 class="title">billing address</h3>

                <div class="inputBox">
                    <span>full name :</span>
                    <input type="text" name="Name"placeholder="john deo">
                </div>
                <div class="inputBox">
                    <span>email :</span>
                    <input type="email"name="Email" placeholder="example@example.com">
                </div>
                <div class="inputBox">
                    <span>address :</span>
                    <input type="text" name="Address" placeholder="room - street - locality">
                </div>
                <div class="inputBox">
                    <span>city :</span>
                    <input type="text" name="City" placeholder="Barishal">
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>state :</span>
                        <input type="text" name="State" placeholder="Bangladesh">
                    </div>
                    <div class="inputBox">
                        <span>zip code :</span>
                        <input type="text" name="Zip" placeholder="123 456">
                    </div>
                </div>

            </div>

            <div class="col">

                <h3 class="title">payment</h3>

                <div class="inputBox">
                    <span>cards accepted :</span>
                    <img src="images/card_img.png" alt="">
                </div>
                <div class="inputBox">
                    <span>name on card :</span>
                    <input type="text" name="NameOnCard" placeholder="mr. john deo">
                </div>
                <div class="inputBox">
                    <span>credit card number :</span>
                    <input type="number" name="CreditCardNumber" placeholder="1111-2222-3333-4444">
                </div>
                <div class="inputBox">
                    <span>exp month :</span>
                    <input type="text" name="Month" placeholder="january">
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>exp year :</span>
                        <input type="number" name="Year" placeholder="2023">
                    </div>
                    <div class="inputBox">
                        <span>Amount :</span>
                        <input type="text" name="Amount" placeholder="*****">
                    </div>
                </div>

            </div>
    
        </div>

        <input type="submit" value="proceed to checkout"  name="tk_submit"  class="submit-btn">

    </form>

</div>    
    
</body>
    <div id="flow" style="display:none;margin-left:57rem;position:absolute;margin-top:-44rem ">
    <a class="btn"style="cursor:pointer" href="photos.php">Photos</a><br>
    <a class="btn"style="cursor:pointer"href="videos.php">Videos</a>
    </div>

</section>
    </html>
