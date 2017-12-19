
<?php
	include "fonctions.php";
	
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

		<div class="attente">
			<h3><?= "En attente..." ?></h3>  <!-- Affichage du message en attente avsyntaxe echo raccourcie. -->
		</div>
	
		<div>
			<h3>--------------------------------------------------------------</h3>
		</div>
					
						
		<div class="date">
			<h3><?php echo $date;  ?></h3> <!-- Affichage de la variable date. -->
		</div>
	
		<div>
			<h3>--------------------------------------------------------------</h3>
		</div>
	
	
		<div class="counter" id="count">
			<h3><?php echo $initialCoins. " €uros"?></h3>   <!-- Affichage de la variable initialCoins.  -->	   
		</div>
	
		<div>
			<h3>--------------------------------------------------------------</h3>
		</div>
	
		<div>
			<h3><?= $liste; ?></h3>  <!-- Affichage de la var liste. -->
		</div>
	
		<div>
			<h3>--------------------------------------------------------------</h3>
		</div>
	
		<div>
			<h2><?= prepareExpresso(0); ?></h2>  <!-- Affichage de la var liste. -->
		</div>
		<div>
			<h2><?= prepareCafeLong(3); ?></h2>  <!-- Affichage de la var liste. -->
		</div>
		<div>
			<h2><?= prepareThe(1); ?></h2>  <!-- Affichage de la var liste. -->
		</div>
							
		<div>
			<h3>--------------------------------------------------------------</h3>
		</div>

		<div>
			<h2><?= preparerBoisson("Thé", 2); ?></h2>  <!-- Affichage de la var liste. -->
		</div>
		
		<div>
			<h3>--------------------------------------------------------------</h3>
		</div>

		<form action="preparerBoisson.php" method="POST">
		  Choix boisson:<br>
		  <input type="text" name="ChoixBoisson">
		  <br>
		  Nbre de sucres:<br>
		  <input type="text" name="ChoixSucres">
		  <br><br>
		  <input type="submit" value="Submit">
		</form>

		<div>
			<h3>--------------------------------------------------------------</h3>
		</div>


		
	</div>
</body>
</html>