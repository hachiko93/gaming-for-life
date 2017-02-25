<?php @session_start();?>
<?php
if(!isset($_SESSION['use'])) {
 header("Location:login.php");  
}?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="The most popular online store for consoles, games and other gaming equipment">
  <meta name="author" content="Licina Ana">
  <link rel="icon" href="images/favicon.jpeg"> 

  <title>Gaming for Life</title>

  <link href="css/bootstrap.min.css" rel="stylesheet">

  <link href="css/carousel.css" rel="stylesheet">
</head>

<body>
  <?php require ("menu.php");?>
  <?php
  $i=0;
  if(isset($_SESSION['cart'])){
    include "connection.php";
    for ($j=0; $j < count($_SESSION['cart']); $j++) { 
      if(isset($_POST[$j])){
      unset($_SESSION['cart'][$j]);
      $_SESSION['cart']=array_values($_SESSION['cart']);
}
}foreach ($_SESSION['cart'] as $var) {
  $id=$var['product_id'];
  $qty=$var['quantity'];

  $query="SELECT * FROM proizvodi WHERE (id_proizvoda='".$id."')";

  if (!$q=$mysqli->query($query)){
    echo "<p>An error has occured. Please try later.</p>";
    exit();
  }
  while($row=$q->fetch_object()){
    ?>
    <div class="row" style="padding-top: 100px; padding-left: 100px;">
      <div class="col-lg-4">
        <form method="post" action="cart.php">
          <img class="img-circle" src="<?php echo $row->slika; ?>" alt="Generic placeholder image" width="140" height="140">
          <h2><?php echo $row->ime; ?></h2>
          <input type="hidden" name="product_id" class="product_id" value="<?php echo $i; ?>"/>
          <br>
          <p class="lead"> <i>Quantity ordered: </i> <?php echo $qty; ?></p>
          <input type="submit" class="btn btn-default" role="button" value="Remove from Cart" name="<?php echo $i; ?>">
        </form>
      </div>
    </div>

    <?php
  }
  $i++;
}
?>
<div class="row" style="padding-top: 100px; padding-left: 100px;">
    <button class="btn btn-default" type="submit" name="btn">Proceed to CheckOut</button>
  </div>

<?php
}
else{
  ?> 
  <div class="row" style="padding-top: 100px; padding-left: 100px;">
    <p class="lead" style="text-align:center; padding-top: 200px;">Cart is empty!</p>
  </div>
  <?php
}
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>
