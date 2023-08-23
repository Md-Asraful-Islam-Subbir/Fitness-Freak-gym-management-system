<?php
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>viewpackage</title>
    <link rel="stylesheet" href="style.css" />
    <!-- Font Awesome Icons cdn link -->
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
  height: 2rem;
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
ul li {
  font-size: 17px;
  padding: 10px;
  opacity: 0.8;
}
ul li::marker {
  color: red;
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
        <button id="gallery" href="" class="btn" style="border: none">
          Gallery
        </button>
        <a href="jointrainer" class="btn">Join Our Team</a>
        <a href="contact.php" class="btn">Contact</a>

        <a href="#" style="position: relative; top: 0.6rem">|</a>
        <a href="entryform.php" class="btn">Register</a>
        <a href="userlogin.php" class="btn">Admin</a>
      </nav>
    </header>
    <div
      id="flow"
      style="
        display: none;
        margin-left: 50.5rem;
        position: absolute;
        margin-top: -1rem;
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
        style="margin-left: 38rem; color: white"
      >
        <h1>FitClub Memberships</h1>
        <h4 style="margin-left: 1.5rem">
          Choose the plan that's right for you
        </h4>
      </div>
    </div>

    <div id="container" style="display: flex; justify-content: space-around">
      <div id="div1">
        <div class="gdlr-core-column-20 gdlr-core-item-pdlr">
          <div class="fit-member-container" style="height: 800px">
            <div class="fit-mem-header">
              <h5>Standard Membership</h5>
            </div>
            <div class="fit-mem-content">
              <div class="fit-mem-top">
                <ul>
                  <li style="text-align: left">All Standard Classess</li>
                  <li style="text-align: left">All Virtual Classes</li>
                  <li style="text-align: left">FREE Gym Induction</li>
                  <li style="text-align: left">One Free Body Analysis</li>
                  <li style="text-align: left">24 Hour Access</li>
                  <li style="text-align: left">FREE Parking</li>
                </ul>
              </div>
              <br /><br /><br />
              <div
                class="fit-mem-bot"
                style="height: 141px; margin-top: -31px;"
              >
                <h5 style="font-size: 27px; opacity: .7;">from £39.99 per month</h5>
                <h6 style="font-size: 22px; opacity: .7;">Select Now</h6>
                <p>
                  <a
                    class="gdlr-core-button gdlr-core-button-solid gdlr-core-button-no-border"
                    href="entryform.php"
                    ><span class="gdlr-core-content"
                      >Standard Membership</span
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
          <div class="fit-member-container" style="height: 800px">
            <div class="fit-mem-header">
              <h5>Premium Membership</h5>
            </div>
            <div class="fit-mem-content">
              <div class="fit-mem-top">
                <ul>
                  <li style="text-align: left">
                    All Standard Plan benefits, PLUS
                  </li>
                  <li style="text-align: left">All Premium Classes</li>
                  <li style="text-align: left">
                    One FREE Guest Pass per month**
                  </li>
                  <li style="text-align: left">MONTHLY Body Analysis</li>
                  <li style="text-align: left">
                    Membership plan offers a discounted<br />
                    MyZone MZ3 Belt at £69.99 &nbsp; &nbsp;(Amazon<br />
                    RRP £129.99)
                  </li>
                </ul>
              </div>
              <div class="fitMenBot" style="height: 141px;">
                <h5 style="margin: 0px; opacity: .7;" >from £49.99 per month</h5>
                <h6 style="margin: 0px; opacity: .7; font-size: 22px">Select Now</h6>
                <p>
                  <a style="opacity: 1;"
                    class="gdlr-core-button gdlr-core-button-solid gdlr-core-button-no-border"
                    href="entryform.php"
                    ><span class="gdlr-core-content"
                      >Premium Membership</span
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
          <div class="fit-member-container fsce-box" style="height: 800px">
            <ul id="div3ul" style="padding: 0;">
              <li>
                <a href="entryform.php"
                  >Over 55’s Membership</a
                ><br>(Use promo code: OVER55)
              </li>
              <li>
                <a href="entryform.php"
                  >Student Membership</a
                ><br>
                (Use promo code: STUDENT)
              </li>
              <li>
                <a href="entryform.php"
                  >Blue Light Membership</a
                ><br>(Use promo code: BLUELIGHT)
              </li>
              <li>
                <a href="entryform.php"
                  >Forces and Emergency Services Membership</a
                ><br>(Use promo code: FORCES)
              </li>
              <li>
                <a href="entryform.php"
                  >NHS Membership</a
                ><br>(Use promo code: BLUELIGHT)
              </li>
            </ul>
            <p style="color: #383838;
            font-weight: 600;
            line-height: 24px;
            font-family: 'Source Sans Pro', sans-serif;">
              Find out more about our ‘Special Membership’ plans by clicking
              below.
            </p>
            <p>
              <a  id="lastA"
                class="gdlr-core-button gdlr-core-button-solid gdlr-core-button-no-border"
                href="contact.php"
                ><span class="gdlr-core-content">Find Out More</span></a
              >
            </p>
          </div>
        </div>
      </div>
    </div>

    <div style="text-align: center">
      <p>
        <img
          style="box-shadow: 0px 0px 5px 3px rgba(0, 0, 0, 0.1); max-width: 80rem;"
          src="images/Screenshot 2023-08-01 204725.png"
          alt=""
        />
      </p>
    </div>
  </body>
  <section class="footer"style="background-color: rgb(58, 65, 59);">

<div class="credit">&copy; all rights are reserved by <span>sabbir</span></div>

</section>    
</html>
