<!DOCTYPE html>
<!-- Author: William    -->
<!-- Date:  Wed-June-20-2018     -->
<!-- Description: 4EZ Media Index Page-->
<html>
  <head>
    <meta charset="utf-8">
    <meta name="description" content="Photography company located in
    Collingdale, PA. We are experts at making the best shots count with
    an affordable price and service that is hard to forget.">
  <meta name="keywords" content="Photos, Photography, videos, video shoots">
  <meta name="4EZ Media" content="Photography Company">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <title>4EZ Media</title>
    <link rel="stylesheet" href="css/main.css">
  </head>
  <body>
    <header>
      <a href="index.html"><img id="logo" src="images/logo.JPG" alt="logo"></a>
      <div id="burger" class="burger-nav">
        <div></div>
        <div></div>
        <div></div>
      </div>
      <nav>
      <ul>
      <li><p><a href="index.html">Home</a></p></li>
      <li><p><a href="services.html">Services</a></p></li>
      <li><p><a class="active" href="gallery.html">Gallery</a></p></li>
      <li><p><a href="booking.html">Booking</a></p></li>
      <li><p><a href="aboutus.html">About Us</a></p></li>
        </ul>
        </nav>
    </header>
      <div id="homeHeader" class="imgHeader">
        <h1>Gallery</h1>
        <p>These are just a few examples of the amazing shots we're capable of making</p>
      </div>
      <div id="wrapper">
        <!-- Image Gallery Html-->
      <div id="homeHeadGallery" class="">
        <h1>More Shots</h1>
        <ul>
          <!--Adding the images Via PHP foreach loop-->
          <?php
          $dir = glob('uploaded-images/{*.jpg,*.png,*.jpeg}',GLOB_BRACE);
          foreach ($dir as $key => $value) {
            ?>

                <li><img src = "<?php echo $value; ?>" alt="<?php echo $value; ?>"></li>

            <?php
          }
            ?>
        </ul>
      </div>
    </div>
  <footer>
    <h1>Contact Us</h1>
    <p>4EZMedia@gmail.com</p>
    <p>484-619-9113</p>
    <h1><a href="http://611.solutions">Site made by 611 Solutions, LLC</a></h1>
</footer>
  </body>
  <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
  <script src="js/menu.js"></script>
</html>
<<<<<<< HEAD
=======

>>>>>>> 7eaea37a01dc496c0ceafa279f5788ce020df961
