
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://fonts.googleapis.com/css?family=Oswald"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Oswald:300"
      rel="stylesheet"
      type="text/css"
    />
    <link rel="stylesheet" href="login.css" />
    <title>Log in - RealBook</title>
  </head>
  <body>
    <div class="container">
    <?php
session_start();
?>
    <section class ="Login-form">
      <div class="top">
        <img src="https://i.imgur.com/Ih4Cbv2.png" alt="" />
        <p>Đăng nhập vào Real Book</p>
      </div>
      <div class="login">
        <form action="action.php" method = "post">
          <legend for="username">username</legend>
          <input
            type="text"
            id="username"
            name="username"
            placeholder="username"
          />

          <label for="password">password</label>

          <input type="password" id="password" name="password" placeholder="password" />

          <a href="#">Forgot password?</a>
          <input type="submit" name="submit" value="Log in" />
        </form>
 

      </div>
      <?php 
    if (isset($_GET["error"])){
      if($_GET["error"]=="emptyinput"){
        echo "<p> Fill in all Fields</p>";

      }
      else if($_GET["error"]=="wronglogin"){
        echo "<p> Sai thong tin dang nhap</p>";
      }
    }
    ?>
    </div>
</section>

  </body>

</html>
