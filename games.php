<?php @session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="The most popular online store for consoles, games and other gaming equipment">
  <meta name="author" content="Licina Ana">
  <link rel="icon" href="images/favicon.jpeg"> 

  <title>Gaming for Life Store - Games</title>

  <link href="css/bootstrap.min.css" rel="stylesheet">

  <link href="css/carousel.css" rel="stylesheet">
</head>

<body>

  <?php require ("menu.php");?>
  <div><h1 style="text-align:center;" class="featurette-heading">Store: Games</h1></div>

  <hr class="featurette-divider">

  <?php
  
  include 'product.class.php';
  $product = new Product();
  $q=$product->findType(1);
    while ($row=$q->fetch_object()){
      ?>
      <div class="row featurette">
        <div class="col-md-4">
          <h3 style="padding-left:80px;"><b><?php echo $row->ime ?></b></h3>
          <p class="lead" style="padding-left:80px;"><?php echo $row->tekst?></p><p class="lead" style="padding-left:80px;"><br><b>Price: <?php echo $row->cena?> $</b></p>
          <form method="post" class="go-to-cart" action="addtocart.php">
            <p style="padding-left:80px;" class="go-to-cart"><input type="number" name="quantity" min="1" max="10" placeholder="Qty" class="qty" required>
              <input type="hidden" name="product_id" class="product_id" value="<?php echo $row->id_proizvoda; ?>"/>
              <a class="btn btn-primary" type="submit">Add to Cart</a></p>
            </form>
          </div>
          <div class="col-md-8">
            <img class="featurette-image img-responsive center-block" src="<?php echo $row->slika?>" alt="Generic placeholder image">
          </div>
        </div>
        <hr class="featurette-divider">
        <?php
      }
      ?>

    <footer>
      <p class="pull-right"><a href="#">Back to top</a></p>
      <p>&copy; 2015 Gaming for Life, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
    </footer>

  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/cart.js"></script>
</body>
</html>