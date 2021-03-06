<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="The most popular online store for consoles, games and other gaming equipment">
  <meta name="author" content="Licina Ana">
  <link rel="icon" href="images/favicon.jpeg"> 

  <title>About Gaming for Life</title>

  <link href="css/bootstrap.min.css" rel="stylesheet">

  <link href="css/carousel.css" rel="stylesheet">
</head>

<body>

  <?php require ("menu.php");?>
  <div class="containter" style="padding-top:80px;">
    <h1 style="text-align:center;">About Us</h1>

    <div style="padding-top: 10px;padding-left: 200px;">
      <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script><div style="overflow:hidden;height:500px;width:1000px;"><div id="gmap_canvas" style="height:500px;width:1000px;"></div>
      <a class="google-map-code" href="http://fleurop-gutschein-map.com" id="get-map-data">fleurop-gutschein-map.com</a></div>
      <script type="text/javascript"> function init_map() { var myOptions = { zoom: 14, center: new google.maps.LatLng(44.8178624,20.4569811), mapTypeId: google.maps.MapTypeId.ROADMAP }; map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions); marker = new google.maps.Marker({ map: map, position: new google.maps.LatLng(44.8178624,20.4569811) }); infowindow = new google.maps.InfoWindow({ content: "<b>Gaming for Life</b><br/>Knez Mihailova 33<br/> " }); google.maps.event.addListener(marker, "click", function () { infowindow.open(map, marker); }); infowindow.open(map, marker); } google.maps.event.addDomListener(window, 'load', init_map);</script>
    </div>

    <div style="padding-top: 10px;padding-left: 300px; padding-right:300px;">
      <span class="lead"><p>Gaming for Life Inc. is a leading online retailer committed to becoming the most loved and trusted marketplace on the web. We tirelessly pursue these goals by offering a superior shopping experience, rapid delivery and stellar customer service.</p><br><p>With more than 10.5 million products and an award-winning website, Gaming for Life proudly earns the loyalty of tech-enthusiasts and mainstream e-shoppers alike. We equip our customers with state-of-the-art decision-making resources such as detailed product information, "how-to’s," over 3 million customer reviews and high-resolution photo galleries. We offer our customers peace of mind with lightning-fast delivery and cutting-edge logistics.</p></br><p>At Gaming for Life, we believe service truly begins after the product you ordered arrives at your doorstep. We follow through on this commitment with exceptional customer service. Our team of service associates are available via phone, e-mail and online chat to help ensure your utmost satisfaction.</p></br><p>We've dedicated ourselves to making sure that everyone enjoys shopping at Gaming for Life. We take great pride in working passionately to exceed your expectations each and every time you shop with us.</p></span>
    </div>
  </div>

<footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2015 Gaming for Life, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="/js/vendor/holder.min.js"></script>
</body>
</html>