<?php @session_start();?>
<?php

    if(isset($_SESSION['use']))   
    {
      header("Location:home.php"); 
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Licina Ana">
  <link rel="icon" href="images/favicon.jpeg">

  <title>Signin Gaming for Life</title>

  <link href="css/bootstrap.min.css" rel="stylesheet">

  <link href="css/signin.css" rel="stylesheet">

</head>

<body>

  <?php require ("menu.php");?>

  <div class="container">

    <form method="post" class="form-signin">
      <h2 class="form-signin-heading">Please sign in</h2>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input name="email" type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
      <br>
      <label for="inputPassword" class="sr-only">Password</label>
      <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
      <button class="btn btn-lg btn-primary btn-block" type="submit" name="signin">Sign in</button>
    </form>
    <?php

    if(isset($_POST['signin']))   
    {
     $mail = $_POST['email'];
     $pass = $_POST['password'];

     include "user.class.php";
     $user=new User();
     echo $user->logIn($mail, $pass);
  }
  ?>
  
  <footer>

  </footer>

</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="/js/vendor/holder.min.js"></script>
</body>
</html>