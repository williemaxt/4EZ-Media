<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/dash.css">
    <meta charset="utf-8">
    <title>Manage Pictures</title>
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
      <li><p><a href="aboutus.html">View Pictures</a></p></li>
      <li><p><a href="aboutus.html">Add Pictures</a></p></li>
      <li><p><a href="aboutus.html">Logout</a></p></li>
        </ul>
        </nav>
        <div class="seperation"></div>
    </header>
    <div class="current-content">
      <h1>Something</h1>
      <!--Section to hold list of curret pictures with delete functions to be added-->
      <section class="myfriends">
            <ul>
              <!--Each item makes a friends profile card-->
              <li>
                <h4>Joseph Tran</h4>
                <br>
                <img src="images/tiger-300.png" alt="">
                <div class="friend-card">
                  <button type="button" name="button">delete</button>
                </div>
              </li>
              <!--Each item makes a friends profile card-->
              <li>
                <h4>Joseph Tran</h4>
                <br>
                <img src="images/tiger-300.png" alt="">
                <div class="friend-card">
                  <button type="button" name="button">delete</button>
                </div>
              </li>
              <!--Each item makes a friends profile card-->
              <li>
                <h4>Joseph Tran</h4>
                <br>
                <img src="images/tiger-300.png" alt="">
                <div class="friend-card">
                  <button type="button" name="button">delete</button>
                </div>
              </li>
              <!--Each item makes a friends profile card-->
              <li>
                <h4>Joseph Tran</h4>
                <br>
                <img src="images/tiger-300.png" alt="">
                <div class="friend-card">
                  <button type="button" name="button">delete</button>
                </div>
              </li>
              <!--Each item makes a friends profile card-->
              <li>
                <h4>Joseph Tran</h4>
                <br>
                <img src="images/tiger-300.png" alt="">
                <div class="friend-card">
                  <button type="button" name="button">delete</button>
                </div>
              </li>

            </ul>
          </section>

      <!--Main container to apply the picture upload-->

          <form class="upload-form" action="index.html" method="post">
            <img src="images/frame.svg" alt="">
            <br>
            <input type="file" name="" value="">
            <br>
            <input type="submit" name="" value="Submit">
          </form>

    </div>

    </form>
  </body>
</html>
