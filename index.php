<?php
require "autoload.php";
?>
<!DOCTYPE html>
<html>
	<head>
		<!--Import Google Icon Font-->
		<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<!--Import materialize.css-->
		<link type="text/css" rel="stylesheet" href="vendor/materialize/css/materialize.min.css"  media="screen,projection"/>

		<link type="text/css" rel="stylesheet" href="styles/styles.css"  media="screen,projection"/>

		<!--Let browser know website is optimized for mobile-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	</head>

	<body>
		<div class="card blue-grey darken-1">
			<div class="card-content white-text">
				<span class="card-title"><?php echo ("Search match by champions");?></span>
				<p><?php echo ("Select champions and click on SEARCH button");?></p>
			</div>
		</div>
			
		</span>

		<form method="POST" action="results.php">
			<div class="row">
				<div class="col s9 offset-s1">
					<input autofocus type="text" id="search_name" name="search_name" placeholder="<?php echo ("Search champions by its name");?>" />
				</div>
				<div class="col s1">
					<button type="submit" class="waves-effect waves-light btn"><?php echo ("Search");?></button>
				</div>
			</div>
			<div class="row">
				<?php Champions::render();?>
			</div>
		</form>

		<!--Import jQuery before materialize.js-->
		<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
		<script type="text/javascript" src="vendor/materialize/js/materialize.min.js"></script>

		<script type="text/javascript" src="js/index.js"></script>
	</body>
</html>