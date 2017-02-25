<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="The most popular online store for consoles, games and other gaming equipment">
  <meta name="author" content="Licina Ana">
  <link rel="icon" href="images/favicon.jpeg"> 

  <title>Contact Gaming for Life</title>

  <link href="css/bootstrap.min.css" rel="stylesheet">

  <link href="css/signin.css" rel="stylesheet">
</head>

<body>

  <?php require ("menu.php");?>
  <div class="container">

    <form method="post" class="form-signin">
      <h2 class="form-signin-heading">Contact Us</h2>
      <label for="inputName" class="sr-only">Name</label>
      <input name="name" type="text" id="inputName" class="form-control" placeholder="Name" required autofocus>
      <br>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input name="email" type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
      <br>
      <label for="inputMessage" class="sr-only">Message</label>
      <textarea name="message" type="text" id="inputMessage" class="form-control" placeholder="Message" rows="7" cols="30" required></textarea>
      <br>
      <br>
      <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Submit</button>
    </form>

    <?php
    if (isset($_POST["submit"])){
      $name=$_POST['name'];
      $email=$_POST['email'];
      $message=$_POST['message'];

      $msg="New message has been sent from email: '".$email."', and it states: ".$message;

      //ne radi na lokalu
      // mail("ana_93_bg@hotmail.com", "NEW MESSAGE FROM".$name, $msg);
    }
    ?>

  </div>


  <footer>
    
  </footer>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="/js/vendor/holder.min.js"></script>
</body>
</html>