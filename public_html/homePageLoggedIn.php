<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Palette Picker Home Page (Logged In)</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="styles.css" />
  </head>
  <body>
    <?php
    //$user = $_GET['username'];
    $user = $_GET['user'];
    //echo "username = " . $user;
    ?>
    
    <ul>
      <li><p id="list">Welcome, <?php echo $user ?></p></li>
      <li><a href="search.php">Search</a></li>
      <!--<li><a href="homePageLoggedIn.html">(LogginHP)</a></li>-->
    </ul>

    <div id="imgHolder">
    <img id="rainbowImg"
      src="images/RainbowHeader.png"
      alt="A rainbow gradient with 
        black stripes."
    />
    </div>

    <div id="L_PCButton">
    <a href="Pallet_screen.html"><button type="button">Create From Image</button></a>
    </div>
  </body>
</html>
