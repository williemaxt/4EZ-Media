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
    <?php
    // use this instagram access token generator http://instagram.pixelunion.net/
    $access_token="";
    $photo_count=11;
    $json_link="https://api.instagram.com/v1/users/self/media/recent/?";
    $json_link.="access_token={$access_token}&count={$photo_count}";
    s?>
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
          $json = file_get_contents($json_link);
          $obj = json_decode($json, true, 512, JSON_BIGINT_AS_STRING);
          $json = file_get_contents($json_link);
          $obj = json_decode(preg_replace('/("\w+"):(\d+)/', '\\1:"\\2"', $json), true);

          foreach ($obj['data'] as $post) {

            $pic_text=$post['caption']['text'];
            $pic_link=$post['link'];
            $pic_like_count=$post['likes']['count'];
            $pic_comment_count=$post['comments']['count'];
            $pic_src=str_replace("http://", "https://", $post['images']['standard_resolution']['url']);
            $pic_created_time=date("F j, Y", $post['caption']['created_time']);
            $pic_created_time=date("F j, Y", strtotime($pic_created_time . " +1 days"));

            echo "<div class='ig-pic'>";
                echo "<a href='{$pic_link}' target='_blank'>";
                    echo "<img src='{$pic_src}' alt='{$pic_text}'>";
                echo "</a>";
                echo "<p>";
                    echo "<p>";
                        echo "<div style='color:#888;'>";
                            echo "<a href='{$pic_link}' target='_blank'>{$pic_created_time}</a>";
                            echo "<hr>";
                        echo "</div>";
                    echo "</p>";
                    echo "<p>{$pic_text}</p>";
                echo "</p>";
            echo "</div>";
          }
          ?>
        </ul>
      </div>
    </div>

  </body>
  <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
  <script src="js/menu.js"></script>
</html>
