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

    <form method="post" class="form-signin" action="changepassword.php">
      <h2 class="form-signin-heading">Change Your Password</h2>
      <label for="inputOldPassword" class="sr-only">Password</label>
      <input name="old_password" type="password" id="inputOldPassword" class="form-control" placeholder="Old Password" required>
      <br>
      <label for="inputPassword" class="sr-only">Password</label>
      <input name="password" type="password" id="inputPassword" class="form-control" placeholder="New Password" required>
      <button class="btn btn-lg btn-primary btn-block" type="submit" name="changepass">Change Password</button>
    </form>

    <?php
    if(isset($_POST['changepass'])){
      $new=$_POST['password'];
      $old=$_POST['old_password'];
      $mail=$_SESSION['use'];

      include "user.class.php";
      $user=new User();
      ?> <p class="lead"> <?php echo $user->changePass($new, $old, $mail); ?> </p> <?php
    
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