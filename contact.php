<?php
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>contact</title>
    <link rel="stylesheet" href="style.css" />
    <!-- Font Awesome Icons cdn link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    />
    
    <style>
      #gallery {
        background-color: #333;
        cursor: pointer;
      }
      #gallery:hover {
        background-color: rgba(202, 179, 179, 0.4);
      }
      .fit-member-container {
  border: 1px solid #d3d3d3;
  -webkit-border-radius: 10px;
  -moz-border-radius: 10px;
  border-radius: 10px;
  overflow: hidden;
}
.gdlr-core-column-20 {
  float: left;
  width: 22rem;
}
.fit-mem-header h5 {
  margin-bottom: 0;
  font-weight: 400;
  color: #fff;
  font-size: 22px;
}

.fit-mem-header {
  background-color: #262626;
  height: 4rem;
}
.fit-mem-header {
  overflow: hidden;
  padding: 17px 0;
}
.fit-mem-content {
  font-family: "Source Sans Pro", sans-serif;
}
#div1,
#div2,
#div3 {
  overflow: hidden;
  padding: 55px 0;
  text-align: center;
  box-shadow: none;
}
.fit-mem-top {
  margin-bottom: 25px;
  height: fit-content;
}
#container {
  width: 75%;
  margin: auto;
}

.fitMenBot h5,
h6 {
  font-family: "Bitter", serif;
  font-size: 29px;
}
h5,
h6 {
  margin: 0;
  font-weight: normal;
}
#div1 a,
#div2 a {
  text-decoration: none;
  font-size: 15px;
  font-weight: bolder;
  padding: 10px 32px;
  background-color: #312e2e;
  color: #ffffff;
  border-radius: 25px;
  transition: all 0.2s;
}

#div1 a:hover,
#div2 a:hover {
  background-color: #666666;
}

#div3 ul{
  list-style: none;
}

#div3ul a{
  border-radius: 5px;
  text-decoration: none;
  padding: 22px 10px;
    font-size: 15px;
    color: #383838;
    font-weight: 700;
    text-transform: uppercase;
    font-family: 'Source Sans Pro', sans-serif;
    display: block;
    border: 1px solid #d3d3d3;
    box-shadow: 0px 0px 5px 3px rgba(0, 0, 0, 0.1);
    transition: all .3s;
}
#div3ul a:hover{

  color: rgb(192, 21, 21);
}

#lastA{
  font-size: 15px;
    padding: 10px 32px;
    background-color: #312e2e;
    text-decoration: none;
    color: #ffffff;
    border-radius: 25px;
    font-weight: 600;
}
#lastA:hover{
  background-color: #4e4c4c;
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
        <button id="gallery" href="" class="btn" style="border: none;color:white;">
          Gallery
        </button>
        <a href="jointrainer.php" class="btn">Join Our Team</a>
        <a href="" class="btn">Contact</a>

        <a href="#" style="position: relative; top: 0.6rem">|</a>
        <a href="entryform.php" class="btn">Register</a>
        <a href="userlogin.php" class="btn">Admin</a>
      </nav>
    </header>
    <div
      id="flow"
      style="
        display: none;
        margin-left: 52.5rem;
        position: absolute;
        margin-top: -1rem;
        background-color:#333;
      "
    >
      <a class="btn" style="cursor: pointer" href="photos.php">Photos</a><br />
      <a class="btn" style="cursor: pointer" href="videos.php">Videos</a>
    </div>
    <div
      class="ftgm-banner"
      style="
        background-color: #666;
        color: black;
        padding: 20px;
        display: flex;
        justify-content: space-between;
        align-items: center;
      "
    >
      <div
        class="gdlr-core-pbf-wrapper-container gdlr-core-container"
        style="margin-left: 38rem; color: white; font-size:20px;"
      >
        <h1><strong>Contact Us</strong> </h1>
        <h4 style="margin-left: 1.5rem">
          Get In Touch
        </h4>
      </div>
    </div>

    <div id="container" style="display: flex; justify-content: space-around">
      <div id="div1">
        <div class="gdlr-core-column-20 gdlr-core-item-pdlr">
          <div class="fit-member-container" style="height: 700px">
            <div class="fit-mem-header">
                
              <h5><i class="fas fa-envelope"></i> Email</h5>
            </div>
            <div class="fit-mem-content">
              <div class="fit-mem-top" style="font-size: 20px; padding:2rem;line-height: 2.5rem;">
              <p>Send us a message with your contact details and one of our team will get back to you as quickly as possible.;</p>
              </div>
              <br /><br />
              <div
                class="fit-mem-bot"
                style="height: 141px; margin-top: -31px;"
              >
                <h5 style="font-size: 27px; opacity: .7;line-height: 2.5rem;">Sales Team :</h5>
                <h6 style="font-size: 22px; opacity: .7;line-height: 2.5rem;">maisonlineltd@gmail.com</h6><br><br>
                <h5 style="font-size: 27px; opacity: .7;line-height: 2.5rem;">Billing Team :</h5>
                <h6 style="font-size: 22px; opacity: .7;line-height: 2.5rem;">admin@gmail.com</h6><br /><br />
                <p>
                  <a
                    class="gdlr-core-button gdlr-core-button-solid gdlr-core-button-no-border"
                    href="#"
                    ><span class="gdlr-core-content"
                      >Mail Now</span
                    ></a
                  >
                </p>
                <p>&nbsp;</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div id="div2">
        <div class="gdlr-core-column-20 gdlr-core-item-pdlr">
          <div class="fit-member-container" style="height: 700px">
            <div class="fit-mem-header">
              <h5><i class="fas fa-map-marker-alt"></i> Location</h5>
            </div>
            <div class="fit-mem-content">
            <div class="fit-mem-top" style="font-size: 20px; padding:2rem;line-height: 2.5rem;">
              <p>Plot No. 182, Beside Vishal Mega Mart Aadarsh Abhyasika, Bhande Plot Square Nandanwan Road, Nagpur, Maharashtra 440024, India</p>
              </div>
              <div class="fitMenBot" style="height: 141px;">
                <h5 style="margin: 0px; opacity: .7;" >View On Map</h5><br/>
                <p>
                  <a style="opacity: 1;"
                    class="gdlr-core-button gdlr-core-button-solid gdlr-core-button-no-border"
                    href="https://goo.gl/maps/TLhLHCUzGpCy6xvz7"
                    ><span class="gdlr-core-content"
                      >Map</span
                    ></a
                  >
                </p>
                <p>&nbsp;</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div id="div3">
        <div class="gdlr-core-column-20 gdlr-core-item-pdlr">
          <div class="fit-member-container" style="height: 700px">
          <div class="fit-mem-header">
              <h5><i class="fas fa-phone"></i> Call Us</h5>
            </div>
            <div class="fit-mem-content">
            <div class="fit-mem-top" style="font-size: 20px; padding:2rem;line-height: 2.5rem;">
              <p>01878507129</p>
              <p>01943566017</p>
              <p>Feel free to give us a call and one of our friendly fitness professionals will assist with your query.</p>
              </div>
              <div class="fitMenBot" style="height: 141px;">
                <h5 style="margin: 0px; opacity: .7;" >Call Now</h5><br/>
                <p>&nbsp;</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row mt-4">
                <div class="col-lg-6">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3580.7725626335236!2d91.73020687429612!3d26.171535591551166!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x375a5a4b249e0c37%3A0x577091dda017863f!2sFitness%20Freaks!5e0!3m2!1sen!2sbd!4v1692421329939!5m2!1sen!2sbd" width="800" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </iframe>
                        </div>
                  
                

                <div class="col-lg-6" >
                    <!-- form fields -->
                    <form method="post" action="send-email.php" style="width: 400px;margin-left:10rem;">
                        
                        <input type="email" name="email"class="form-control mt-3" placeholder="Email">
                        <input type="text"name="text" class="form-control mt-3" placeholder="Subject">
                        <input type="text" name="message" class="form-control mt-3" placeholder="Message">
                        <button type="submit" name="send"class="btn btn-success mt-3"style="margin-left:10rem;">Contact Me</button>
                    </form>
                    
                </div>
                </div>
  <section class="footer"style="background-color: rgb(58, 65, 59);margin-top:1rem;">
  <div class="share"style="color:white;">
        <a href="#" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-twitter"></a>
        <a href="#" class="fab fa-pinterest"></a>
        <a href="#" class="fab fa-linkedin"></a>
        <a href="#" class="fab fa-instagram"></a>
    </div>
<div class="credit">&copy; all rights are reserved by <span>sabbir</span></div>

</section>    
</html>
