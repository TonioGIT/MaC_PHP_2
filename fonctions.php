<?php

	

	$date = date('d/m/Y'); //Déclaration d la variable date qui récupère la date au format jour/moi/année.
	$initialCoins = 0; 	   //Déclaration de la variable initialCoins et qui vaut 0.
	$tableauBoissons = array("Expresso", "Café long", "Thé"); //Déclaration de la variable boissons sous forme de tableau.
	$liste =""; //Déclare variable liste.
	foreach($tableauBoissons as $uneBoisson) {
		$liste = $liste . "<li>$uneBoisson</li>"; //Crée la liste des boissons.
	}

	function prepareExpresso($sucre) {
		$expresso = "Eau x 1, Café x 1, avec ". $sucre  . " sucre(s).";
		return $expresso;
	}

	function prepareCafeLong($sucre) {
		$CafeLong = "Eau x 2, Café x 2, avec ". $sucre  . " sucre(s).";
		return $CafeLong;
	}

	function prepareThe($sucre) {
		$the = "Eau x 1, thé x 1, avec ". $sucre  . " sucre(s).";
		return $the;
	}


	function preparerBoisson($boisson, $sucre) {
		$recette = "";
		if ($boisson == "Expresso") {
			$recette = prepareExpresso($sucre);
		}
		else if ($boisson == "Café Long") {
			$recette = prepareCafeLong($sucre);
		}
		else if ($boisson == "Thé") {
			$recette = prepareThe($sucre);
		}
		else {
			echo "Boisson inconnue !";
		}
		return $recette;
	}

	?>