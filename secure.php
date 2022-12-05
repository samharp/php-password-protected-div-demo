<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Password Protection via PHP</title>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!-- styling to make the demo look a wee bit better -->
    <style>
      /* reset */
      *{
        margin:0;
        padding:0;
      }
      body{
        height:100vh;
        display:flex;
        align-items:center;
        justify-content:center;
      }
      .form-container{
        padding:20px;
        border:1px solid;
      }
      .form-row{
        margin-bottom:20px;
      }
      .form-row:last-child{
        margin-bottom:0px;
      }
      .hidden-content-container{
        margin-top:50px;
        background-color:lightgreen;
        border:1px solid;
        padding:20px;
      }
    </style>
  </head>

  <body>

    <!-- centered content -->
    <section>
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
                $passErr = "Incorrect password";
              }
            }
          }
        ?>

        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" autocomplete="off">
          <div class="form-row">
            <label>Password: </label>
            <input type="password" name="pass" value="">
            <input type="submit" name="submit" value="Enter">
          </div>
          
          <div class="form-row">
            <?php echo $passErr;?>
          </div>

        </form>
      </div>

      <!-- where the hidden content will be injected -->
      <?php
        if($pass == $thePassword)
        {
          include("secure.html");
        }
      ?>
    </section>
  </body>
</html>