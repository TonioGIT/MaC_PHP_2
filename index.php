
<?php
	$date = date('d/m/Y'); //Déclaration d la variable date qui récupère la date au format jour/moi/année.
	$initialCoins = 0; 	   //Déclaration de la variable initialCoins et qui vaut 0.
	$boissons = array("coffee", "tea", "cocoa", "latte"); //Déclaration de la variable boissons sous forme de tableau.
	$liste =""; //Déclare variable liste.
	foreach ($boissons as $boisson) {
		$liste = $liste. "<li>$boisson</li>"; //Crée la liste des boissons.
	}
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

	<div class="attente">
		<h2><?= "En attente" ?></h2>  <!-- Affichage du message en attente avsyntaxe echo raccourcie. -->
	</div>
				
					
	<div class="date">
		<h2><?php echo $date;  ?></h2> <!-- Affichage de la variable date. -->
	</div>


	<div class="counter" id="count">
		<h2><?php echo $initialCoins. " €uros"?></h2>   <!-- Affichage de la variable initialCoins.  -->   
	</div>

	<div>
		<h3><?= $liste ?></h3>  <!-- Affichage de la var liste. -->
	</div>


							
</body>
</html>