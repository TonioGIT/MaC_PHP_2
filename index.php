
<?php

include "fonctions.php";


/*var_dump($_POST["boiss"]);
var_dump($_POST["suc"]);

function varTest() {
	if (isset($_POST["boiss"], $_POST["suc"])) {
		$getBoisson = ($_POST["boiss"]);
		$getSucres = ($_POST["suc"]);
		$PREPARATION = preparerBoisson($getBoisson, $getSucres);
	}
	else {
		$PREPARATION = "En attente...";
	}
	return $PREPARATION;
}


varTest();

print $PREPARATION;*/

function varTest() {
	if (isset($_POST["boiss"]) && isset($_POST["suc"])) {
		$getBoisson = ($_POST["boiss"]);
		$getSucres = ($_POST["suc"]);
		$retourPrepa = prepareFinal($getBoisson, $getSucres);
	}
	else {
		$retourPrepa = "En attente...";
	}
	return $retourPrepa;
}

$PREPARATION = varTest();

?>


<!doctype html>
<head lang="fr">
	<title>Cooffee Machine PHP</title>
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
	<div class="container">					
						
		<div class="date">
			<p>Date:</p>
			<h3><?php echo $date;  ?></h3> <!-- Affichage de la variable date. -->
		</div>
	
		<div>
			<h3>--------------------------------------------------------------</h3>
		</div>
	
	
		<div class="counter" id="count">
			<p>Crédit disponible:</p>
			<h3><?php echo $initialCoins. " €uros"?></h3>   <!-- Affichage de la variable initialCoins.  -->	   
		</div>
	
		<div>
			<h3>--------------------------------------------------------------</h3>
		</div>
	
		<div>
			<p>Boissons disponibles:</p>
			<h3><?= $liste; ?></h3>  <!-- Affichage de la var liste. -->
		</div>
	
		<div>
			<h3>--------------------------------------------------------------</h3>
		</div>
	


		<div>
			<h3>Préparation en cours:</h3>
			<p><?= $PREPARATION ?></p>
		</div>
		
		<div>
			<h3>--------------------------------------------------------------</h3>
		</div>

		<form action="index.php" method="POST">
		  Choix boisson:<br>
		  <input type="radio" name="boiss" value="Expresso"> Expresso.<br>
		  <input type="radio" name="boiss" value="Cafelong"> Café long.<br>
		  <input type="radio" name="boiss" value="The"> Thé.<br>
		  <br>
		  Nbre de sucres:<br>
		  <input type="radio" name="suc" value="0"> Sans sucre.<br>
		  <input type="radio" name="suc" value="1"> 1 sucre.<br>
		  <input type="radio" name="suc" value="2"> 2 sucres.<br>
		  <input type="radio" name="suc" value="3"> 3 sucres.<br>
		  <input type="radio" name="suc" value="4"> 4 sucres.<br>
		  <input type="radio" name="suc" value="5"> 5 sucres.<br>
		  <input type="submit" value="Submit">

		</form>

		<div>
			<h3>--------------------------------------------------------------</h3>
		</div>


		
	</div>
</body>
</html>