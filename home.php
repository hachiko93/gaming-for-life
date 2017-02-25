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
  <script type="text/javascript">
  function translateMe(){
    var url = document.getElementById("translate").value;
    var url1 = 'https://translate.yandex.net/api/v1.5/tr.json/translate?key=trnsl.1.1.20160109T130028Z.626472521da74d52.ffb063e1950ccba4fd19457a1922dbfa9be5535c&text='+url+'&lang=en-sr';
    $.getJSON(url1, function (data){
      document.getElementById("translated").value=data.text[0];
      
    });
  }

  </script>
</head>

<body>

  <?php require ("menu.php");?>

  <div id="myCarousel" class="carousel slide" data-ride="carousel">

    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img class="first-slide" src="images/cover/cover1.jpg" alt="First slide">
      </div>
      <div class="item">
        <img class="second-slide" src="images/cover/cover2.jpg" alt="Second slide">
      </div>
      <div class="item">
        <img class="third-slide" src="images/cover/cover3.png" alt="Third slide">
      </div>
      <div class="item">
        <img class="forth-slide" src="images/cover/cover4.jpg" alt="Forth slide">
      </div> 
    </div>
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>


  <div class="container marketing">


    <div class="row">
      <div class="col-lg-3">
        <img class="img-circle" src="images/dota2.jpg" alt="Generic placeholder image" width="140" height="140">
        <h2>Games</h2>
        <p>The best games all in one place: Fallout 4, Oblivion, Skyrim, World of Warcraft and more. Visit our store to buy them all.</p>
        <p><a class="btn btn-default" href="games.php" role="button">Visit store &raquo;</a></p>
      </div>
      <div class="col-lg-3">
        <img class="img-circle" src="images/xbox.gif" alt="Generic placeholder image" width="140" height="140">
        <h2>Consoles</h2>
        <p>Are you in need of a PlayStation console? Or are you an XBox fan? Don't worry, we got both!</p>
        <p><a class="btn btn-default" href="consoles.php" role="button">Visit store &raquo;</a></p>
      </div>
      <div class="col-lg-3">
        <img class="img-circle" src="images/other.jpg" alt="Generic placeholder image" width="140" height="140">
        <h2>Other gaming items</h2>
        <p>Joysticks, joypads, gaming mouse, gaming keyboard and so much more! Visit our store and take a pick!</p>
        <p><a class="btn btn-default" href="other.php" role="button">Visit store &raquo;</a></p>
      </div>
      <div class="col-lg-3">
        <img class="img-circle" src="images/yandex.png" alt="Generic placeholder image" width="140" height="140">
        <h2>Translate</h2>
        Word(s) to Translate: <input type = "text" class="form-control" id="translate" name = "translate"/><br/>
        Translated Text: <input type = "text" class="form-control" id="translated" name = "translated" readonly /><br/>
        <button class="btn btn-default" type = "submit" onclick="translateMe()">Translate</button> 
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">FALLOUT 4 <span class="text-muted">Review</span></h2>
        <p class="lead">Most of the way this huge roleplaying-shooter game works is carried over from its excellent predecessors, Fallout 3 and Fallout: New Vegas. It is the Skyrim to Fallout 3’s Oblivion, if you will – it iterates on the previous game’s already amazing systems, and it’s similarly dense with locations to explore, genuinely creepy monsters to fight, and superbly engrossing post-nuclear atmosphere that blends unsettling gore and death with dark comedy. After more than 55 hours played I may have seen an ending, yet I feel like I’ve only begun to explore its extraordinary world; from the look of it, I’ll easily be able to spend another 100 happy hours here and still see new and exciting things.</p>
        <p class="lead">A story that begins as a basic search for your lost family evolves into something much more complex and morally nuanced. Like in Fallout: New Vegas, we’re drawn into a struggle between several groups competing for control of the region, and deciding which of their imperfect post-apocalyptic philosophies to align with made me pause to consider how I wanted events to play out. Even the highly questionable Institute has a tempting reason to side with them, and turning away from them in my playthrough wasn’t as clear-cut a choice as I’d expected. I was impressed by the sympathy shown toward the villains, too - even the most irredeemable murderer is explored and given a trace of humanity.</p>
      </div>
      <div class="col-md-5">
        <img class="featurette-image img-responsive center-block" src="images/fallout4.jpg" alt="Generic placeholder image">
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 col-md-push-5">
        <h2 class="featurette-heading">The Elder Scrolls V: Skyrim <span class="text-muted">Review</span></h2>
        <p class="lead">Stepping into Skyrim’s world is like wrapping yourself in a furry, Nordic cloak that smells like your childhood blanket. Yes, the Oblivion you remember fondly is back – everything that made the last Elder Scrolls so lovable has returned. Yet now it’s a bit wilder, a bit rougher, and a bit more dangerous, and boy is the game better for it. Whereas Cyrodiil, the province from Oblivion, was a fairly typical temperate climate with deciduous forests and gentle rolling hills, Skyrim is a bitter, cold northern region (remember those impassable mountains in the north of Cyrodiil? Skyrim is just beyond them). This doesn’t mean the game world is a monotonous frozen waste: the land is diverse, but it has a wonderful “tone” to it that is very much Viking Axe Clanking and Visible Frosty Breaths Huddled Around Crackling Fires. It’s forbidding, slightly bleak, and yet also incredibly cozy when you come in from the cold.</p>
      </div>
      <div class="col-md-5 col-md-pull-7">
        <img class="featurette-image img-responsive center-block" src="images/skyrim.jpg" alt="Generic placeholder image">
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Dota 2 <span class="text-muted">Review</span></h2>
        <p class="lead">Of the half-dozen people I started learning Dota 2 with, three still play regularly. Though there are hundreds of thousands of players of our approximate skill level populating the matchmaking queues, the four of us are more like each other than we are like anyone else playing Valve's isometric wizard-'em-up.
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" src="images/dota2.jpg" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2015 Gaming for Life, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>

    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="/js/vendor/holder.min.js"></script>
  </body>
  </html>
