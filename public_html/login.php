<!DOCTYPE html>
<meta charset="utf-8">
<html lang="en">
<link rel="stylesheet" href="styles.css"/>
<head>
    <title>
        LOGIN
    </title>
</head>
<body>
    <ul>
        <li><a href="index.html">Home</a></li>
      </ul>
    <div id="imgHolder">
        <img id="rainbowImg"
          src="images/RainbowHeader.png"
          alt="A rainbow gradient with 
          black stripes."
        />
       
      </div>
    <div class="credentials" id="credentials">
        <h1>LOGIN</h1>
    <form method="POST">
        <label for="username"><b>Username: </b></label>
        <input type="text" name="username" id="username" required minlength="1" maxlength="250"><br><br>
        <label for="password"><b>Password: </b></label>
        <input style="position: relative; left: 2px;" type="password" name="password" id="password" required minlength="1" maxlength="16"><br><br>
        <button name="submit" type="submit">LOGIN</button>
    </form>

      <?php
      if(isset($_POST['submit'])){
        require("./dbConnection.php");
        $username =$_POST['username'];
        $password = $_POST['password'];
        $sql_Password = getUserHashedPasswordFromDB($username);
        $sql_Password = $sql_Password->fetch_row()[0];
        $verifiedHash = password_verify($password,$sql_Password);
        $doesUserExist = verifyUser($username, $sql_Password);
        
        if($doesUserExist && $verifiedHash){
           echo"User exists";  

          header("Location: homePageLoggedIn.php?user=$username");
          exit;
        }
      
        else
          echo "Username or password is incorrect.";
          
      }
      ?>
    </div>
</body>
</html>

