<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Password Protection via PHP</title>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

  </head>

  <body>
    
  <!-- container for password-entry form -->
    <div class="form-container">

      <?php
        $passErr = "";
        $thePassword = "password";
        $pass = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          if (empty($_POST["pass"])) {
            $passErr = "Password is required";
          } else {
            $pass = $_POST["pass"];
            if($pass != $thePassword){
              $passErr = "Please enter the correct password";
            }
          }
        }
      ?>

      <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" autocomplete="off">  
        Password: <input type="password" name="pass" value="">
        <input type="submit" name="submit" value="Enter">

        <?php echo $passErr;?>
      </form>
    </div>

    <!-- where the hidden content will be injected -->
    <div class="hidden-content-container">
      <?php
        if($pass == $thePassword)
        {
          include("secure.html");
        }
      ?>
    </div>

  </body>
</html>