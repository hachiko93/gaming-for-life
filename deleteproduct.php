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
      <br>
      <h2 class="form-signin-heading">Delete Product</h2>
      <br>
      <label for="inputName" class="sr-only">Product Name</label>
      <input name="name" type="text" id="inputName" class="form-control" placeholder="Product Name" required autofocus>
      <br>
      <button class="btn btn-lg btn-primary btn-block" type="submit" name="delete">Delete</button>
    </form>

    <?php
    
    if(isset($_POST['delete'])){
      
      ?>
      
      <h3 class="lead" style="text-align: center;">Are you sure you want to delete this product?</h3>
    <div style="text-align:center;">
      <a class="btn btn-danger" href="deleteproduct.php?name=<?php echo $_POST['name'] ?>">Yes, I'm sure</a>
      <a class="btn btn-default" href="deleteproduct.php?delete=false">No, wait a minute</a>
    </div>
    
    <?php 
    }


if (isset($_GET['name'])) {
    
    include "product.class.php";

      $product=new Product();
      echo $product->deleteProduct($_GET['name']);
      unset($_GET['name']);
    }

    if(isset($_GET['delete'])){
      echo "Deleting cancelled!";
      unset($_GET['delete']);
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