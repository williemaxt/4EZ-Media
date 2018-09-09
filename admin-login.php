<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/forms.css">
    <meta charset="utf-8">
    <title>Login</title>
  </head>
  <body>
    <header>
      <img id="logo" src="images/logo.JPG" alt="logo">
      <div id="burger" class="burger-nav">
        <div></div>
        <div></div>
        <div></div>
      </div>
      <nav>
      <ul>
      <li><p><a class="active" href="#">Home</a></p></li>
      <li><p><a href="services.html">Services</a></p></li>
      <li><p><a href="gallery.html">Gallery</a></p></li>
      <li><p><a href="booking.html">Booking</a></p></li>
      <li><p><a href="aboutus.html">About Us</a></p></li>
        </ul>
        </nav>
    </header>
    <div class="logincard">
    <h1>Login</h1>
    <form class="" action="dashboard.php" method="post">
      <p>Email:</p>
      <input type="email" name="email">
      <p>Password:</p>
      <input type="password" name="passwords">
      <br>
      <br>
      <input type="submit" name="submit" value="Login">
    </form>
  </div>
  <h3>No Account? Register</h3>
  <h3>Forgot Password?</h3>
    </form>
  </body>
</html>
