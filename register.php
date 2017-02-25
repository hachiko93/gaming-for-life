<?php  @session_start(); ?>

<?php

if(isset($_SESSION['use']))   
    {
      ?>
      <script type="text/javascript">
      window.location.href = 'home.php';
      </script>
      <?php
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="The most popular online store for consoles, games and other gaming equipment">
  <meta name="author" content="Licina Ana">
  <link rel="icon" href="images/favicon.jpeg"> 

  <title>Register to Gaming for Life</title>

  <link href="css/bootstrap.min.css" rel="stylesheet">

  <link href="css/signin.css" rel="stylesheet">
</head>

<body>

  <?php require ("menu.php");?>
  <div class="container">

    <form method="post" class="form-signin" action="" id="enableForm">
      <h2 class="form-signin-heading">Register Here</h2>
      <label for="inputName" class="sr-only">Name</label>
      <input name="name" type="text" id="inputName" class="form-control" placeholder="Name" required autofocus>
      <br>
      <label for="inputSurname" class="sr-only">Surname</label>
      <input name="surname" type="text" id="inputSurname" class="form-control" placeholder="Surname" required autofocus>
      <br>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input name="email" type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
      <br>
      <div class="form-group">
        <label for="inputPassword" class="sr-only">Password</label>
        <input name="password" type="password" data-minlength="6" id="password" class="form-control" placeholder="Password" required>

        <br>
        <input type="password" name="confirm_password" id="confirm_password" class="form-control" placeholder="Re-type Password" required>

      </div>
      <div class="checkbox">
        <label>
          <input type="checkbox" value="remember-me" required> I agree with Terms and Conditions
        </label>
      </div>
      <br>
      <br>
      <button class="btn btn-lg btn-primary btn-block" type="submit" name="register">Register</button>
    </form>
    
    <script type="text/javascript">
    var password = document.getElementById("password")
    , confirm_password = document.getElementById("confirm_password");

    function validatePassword(){
      if(password.value != confirm_password.value) {
        confirm_password.setCustomValidity("Passwords Don't Match");
      } else {
        confirm_password.setCustomValidity('');
      }
    }

    password.onchange = validatePassword;
    confirm_password.onkeyup = validatePassword;
    </script>



  </div>

  <?php
  if (isset($_POST["register"])){

    include 'user.class.php';

      $user = new User();
      $user->create($_POST);

      echo $user->writeToDb();
    
    }
?>


<footer>

</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="/js/vendor/holder.min.js"></script>


</body>
</html>