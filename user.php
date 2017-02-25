<?php @session_start(); ?>
<!<html>
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="The most popular online store for consoles, games and other gaming equipment">
	<meta name="author" content="Licina Ana">
	<link rel="icon" href="images/favicon.jpeg">
	<title>Profile Page</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<link href="css/signin.css" rel="stylesheet">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<script src="http://d3js.org/d3.v3.min.js"></script>
	<script src="http://dimplejs.org/dist/dimple.v1.1.2.min.js"></script>

	<?php if(isset($_POST['combo']) && $_POST['combo']=="genre") { ?>

	<script type="text/javascript">

	var zanrovi = new Array();


	function countInArray(array, what) {
		var count = 0;
		for (var i = 0; i < array.length; i++) {
			if (array[i] === what) {
				count++;
			}
		}
		return count;
	}

	$(document).ready(function () {

		$.getJSON('server.php?combo=genre', function(data) { 
			$.each (data.games, function(i, game) {
				zanrovi.push(game.zanr);
			});


			var svg = dimple.newSvg(".drawing", 600, 400);
			var data = new Array();
			var kojiSuProsli = new Array();

			for (var i = 0; i < zanrovi.length; i++) {
				if($.inArray(zanrovi[i], kojiSuProsli) == -1) {
					kojiSuProsli.push(zanrovi[i]); 
					data.push( { "Games": zanrovi[i], "Number": countInArray(zanrovi, zanrovi[i]) } );
				};
			};

			var chart = new dimple.chart(svg, data);
			chart.addCategoryAxis("x", "Games");
			chart.addMeasureAxis("y", "Number");
			chart.addSeries(null, dimple.plot.bar);
			chart.draw();
		});


	});


	</script>

	<?php } ?>

	<?php if(isset($_POST['combo']) && $_POST['combo']=="price") { ?>

	<script type="text/javascript">
	var imena = new Array();
	var cene = new Array();
	$(document).ready(function () {
		$.getJSON('server.php?combo=price', function(data) { 
			$.each (data.games, function(i, game) {
				imena.push(game.ime);
				cene.push(game.cena);
			});


			var svg = dimple.newSvg(".drawing", 600, 400);
			var data = new Array();
			var kojiSuProsli = new Array();

			for (var i = 0; i < imena.length; i++) {
				if($.inArray(imena[i], kojiSuProsli) == -1) {
					kojiSuProsli.push(imena[i]); 
					data.push( { "Games": imena[i], "Price": cene[i] } );
				};
			};

			var chart = new dimple.chart(svg, data);
			chart.addCategoryAxis("x", "Games");
			chart.addMeasureAxis("y", "Price");
			chart.addSeries(null, dimple.plot.bar);
			chart.draw();
		});
	});
	</script>
	<?php } ?>

</head>
<body>

	<?php require ("menu.php");?>
	<?php if(isset($_SESSION['use'])){
		include "user.class.php";
		$user=new User();
		$q=$user->findUser($_SESSION['use']);
		$row=$q->fetch_object();
		?>

		<br>
		<br>
		<div class="container">
			<div class="row">
				<div class="col-md-9">
					<div class="panel panel-default">
						<div class="panel-body">
							<div class="row">
								<div class="col-md-12 lead">User profile<hr></div>
							</div>
							<div class="row">
								<div class="col-md-4 text-center">
									
									<form id="fileupload" class="form-horizontal" method="POST" action="imagesave.php" enctype="multipart/form-data">
									
							            <div class="fileupload fileupload-new" data-provides="fileupload">

							              <div class="fileupload-preview thumbnail" style="width: 200px; height: 150px;"><img style="width: 200px; height: 150px;" src="images/user/<?php echo $row->slika; ?>"/></div>
							            <div>
							        <input type="hidden" name="MAX_FILE_SIZE" value="204800" />
							        <input type="file" name="image" /></span>
							          	</div>
							            </div>
							          
							          <div style="padding-right: 500px;" class="control-group"> 
									    <label class="control-label"></label>
									        <div class="controls">
									         <button type="submit" class="btn btn-info">Upload</button>

									        </div>

									  </div> 
									</form>
								</div>
								<div class="col-md-8">
									<div class="row">
										<div class="col-md-12">

											<h1 class="only-bottom-margin"><?php echo $row->ime." ".$row->prezime;?></h1>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<span class="text-muted">Email:</span> <?php echo $_SESSION['use']; ?><br>
											<span class="text-muted">About Me: </span><p><?php echo $row->omeni; ?></p>
											<span class="text-muted">Game stats:</span><br><br>
											<?php } ?>

											<form method="POST" action="">
												
												
												
												<select class="form-control" name="combo">
													<option value="price">Price of games bought</option>
													<option value="genre">Genre of games played</option>
												</select>
												
												<br>
												<button type = "submit" class= "btn btn-info">Submit</button>
											</form>
											
										</div>
									</div>
									
								</div>
								<div class="drawing text-center">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/vendor/holder.min.js"></script>
	</body>
	</html>