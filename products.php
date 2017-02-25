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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

  <script type="text/javascript">
    $(document).ready(function(){
    $.getJSON("proizvodi.json", function (data) {
    var tr;
    for (var i = 0; i < data.length; i++) {
        tr = $('<tr/>');
        tr.append("<td> <small> " + data[i].ime + " </small> </td>");
        tr.append("<td> <small> " + data[i].tekst + " <small> </td>");
        tr.append("<td> <img src= '" + data[i].slika + " ' height='100' width='100'></td>");
        tr.append("<td>" + data[i].cena + " $ </td>");
        tr.append("<td>" + data[i].tip + "</td>");
        tr.append("<td>" + data[i].zanr + "</td>");
        $('table').append(tr);
    }
});
    });
  </script>

  
</head>

<body>

  <?php require ("menu.php");?>
  <div><h1 style="text-align:center;" class="featurette-heading">Store: All Products</h1></div>
  <div class="my-new-list"></div>
  
<br>
<br>
<div class=" container text-center text-justify lead">
  
  <table class="table table-striped table-hover">
    <thead>
    <tr>
    <th>Game Name</th>
    <th>Description</th>   
    <th>Image</th>
    <th>Price</th>
    <th>Type</th>
    <th>Genre</th>
  </tr>
</thead>
  </table>
  <br>
  <br>
  
</div>
    
  

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/cart.js"></script>
</body>
</html>