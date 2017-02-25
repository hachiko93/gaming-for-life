<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="The most popular online store for consoles, games and other gaming equipment">
  <meta name="author" content="Licina Ana">
  <link rel="icon" href="images/favicon.jpeg"> 

  <title>Add Product to Gaming for Life</title>

  <link href="css/bootstrap.min.css" rel="stylesheet">

  <link href="css/signin.css" rel="stylesheet">
</head>

<body>

  <?php require ("menu.php");?>
  <div class="container">

    <form method="post" class="form-signin">
      <h2 class="form-signin-heading">Add Product</h2>
      <label for="inputName" class="sr-only">Name</label>
      <input name="name" type="text" id="inputName" class="form-control" placeholder="Name" required autofocus>
      <br>
      <label for="inputImage" class="sr-only">Image</label>
      <input name="image" type="text" id="inputImage" class="form-control" placeholder="Ex. images/store/xbox.jpeg" required autofocus>
      <br>
      <label for="inputDesc" class="sr-only">Description</label>
      <textarea name="description" type="text" id="inputDesc" class="form-control" placeholder="Description" rows="12" cols="50" required></textarea>
      <br>
      <label for="inputPrice" class="sr-only">Price</label>
      <input name="price" type="number" id="inputPrice" class="form-control" placeholder="in dollars" required autofocus>
      <br>
      <label for="inputType" class="sr-only">Type</label>
      <input name="type" type="number" id="inputType" class="form-control" placeholder="Type" min="1" max="3" required autofocus>
      <br>
      <br>
      <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Add Product</button>
    </form>

    <?php

    include 'product.class.php';
    if (isset($_POST["submit"])){
      $product = new Product();
      $product->create($_POST);

      echo $product->writeToDb();
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