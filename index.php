
<?php
	$date = date('d/m/Y'); //Déclaration d la variable date qui récupère la date au format jour/moi/année.
	$initialCoins = 0; 	   //Déclaration de la variable initialCoins et qui vaut 0.
	$boissons = array("coffee", "tea", "cocoa", "latte"); //Déclaration de la variable boissons sous forme de tableau.

?>



<!doctype html>
<head lang="fr">
	<title>Cooffee Machine Ilot 1</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- <link rel="stylesheet" type="text/css" href="styleFinal.css"> -->
	<!-- link rel="stylesheet" type="text/css" href="style2.css" -->
<!-- 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
	crossorigin="anonymous"> -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!-- <script type="text/javascript" src="script.js"></script> -->
	<link href="https://fonts.googleapis.com/css?family=Press+Start+2P" rel="stylesheet">
</head>

<body>
				
	<div class="counter" id="count">
		<h2><?php echo $initialCoins. " €uros"?></h2>   <!-- Affichage de la variable initialCoins.  -->   
	</div>

	<div class="drinkEmpty">
		<h2 id="label-*"><?= "En attente" ?></h2>  <!-- Affichage du message en attente avsyntaxe echo raccourcie. -->
	</div>
					
	<div class="drinkEmpty">
		<h2 id="label-*"><?php echo $date;  ?></h2> <!-- Affichage de la variable date. -->
	</div>

	<div class="led-drink"></div>
		<h2 id="label-coffee"><?php echo $boissons[0]; ?></h2> <!-- Affichage de la strtableau boissons à l'index 0. -->
	</div>
	<div class="drink">
		<h2 id="label-tea"><?php echo $boissons[1]; ?></h2>  <!-- Affichage de la strtableau boissons à l'index 1. -->
	</div>
	<div class="choix-boisson-right">
		<h2 id="label-cocoa"><?php echo $boissons[2]; ?></h2>  <!-- Affichage de la string du taboissons à l'index 2. -->
	</div>
	<div class="drink">
		<h2 id="label-latte"><?php echo $boissons[3]; ?></h2>  <!-- Affichage de la string du taboissons à l'index 3. -->
	</div>
	
							
</body>
</html>