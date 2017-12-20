<?php

	

	$date = date('d/m/Y'); //Déclaration d la variable date qui récupère la date au format jour/moi/année.
	$initialCoins = 0; 	   //Déclaration de la variable initialCoins et qui vaut 0.
	$tableauBoissons = array("Expresso", "Café long", "Thé"); //Déclaration de la variable boissons sous forme de tableau.
	$liste =""; //Déclare variable liste.
	foreach($tableauBoissons as $uneBoisson) {
		$liste = $liste . "<li>$uneBoisson</li>"; //Crée la liste des boissons.
	}


	$tabAssocBoissons = array (
		"Expresso" => array ("eau"=>1, "cafe"=>1, "the"=>0),
		"Cafelong" => array ("eau"=>2, "cafe"=>2, "the"=>0),
		"The" => array ("eau"=>1, "cafe"=>0, "the"=>1),
	);


	function prepareFinal($boisson, $nbreSucres) {
		global $tabAssocBoissons;
		$final = "";
		foreach ($tabAssocBoissons as $nomBoisson => $recette) {
			if ($nomBoisson == $boisson) {
				foreach ($recette as $nomIngredient => $quantité) {
					$final .= $nomIngredient." x ".$quantité." avec ".$nbreSucres." sucre(s)";
				}
			return $final;
			
			}
		}
	};



	/*function prepareExpresso($sucre) {
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
*/

	/*function preparerBoisson($boisson, $sucre) {
		$recette;
		$recette = "Eau: " . $tabAssocBoissons["$boisson"]["eau"] . " , café: " . $tabAssocBoissons["$boisson"]["cafe"] . " , thé: " . $tabAssocBoissons["$boisson"]["the"] . "avec " . $sucre . "sucre(s).";
		return $recette;
	}
*/
	?>