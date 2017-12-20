

<?php



	$tabAssocBoissons = array (

		"Expresso" => array ("eau"=>1, "cafe"=>1, "the"=>0),
		"CafeLong" => array ("eau"=>2, "cafe"=>2, "the"=>0),
		"The"      => array ("eau"=>1, "cafe"=>0, "the"=>1),
	);


	echo $tabAssocBoissons["The"]["cafe"];
	/*echo $tabAssocBoissons["The"];*/




	function preparer($tabIngredients) {
		$recette;
		if ($tabIngredient == $tabAssocBoissons["Expresso"]) {
			$recette = "Eau: " . $tabIngredients["eau"] . " , café: " . $tabIngredients["cafe"] . ".";
		}
		else if ($tabIngredient == $tabAssocBoissons["CafeLong"]) {
			$recette = "Eau: " . $tabIngredients["eau"] . " , café: " . $tabIngredients["cafe"] . ".";
		}
		else ($tabIngredient == $tabAssocBoissons["The"]) {
			$recette = "Eau: " . $tabIngredients["eau"] . " ,thé: " . $tabIngredients["The"] . ".";
		}
		return $recette;
	};


	echo preparer($tabAssocBoissons["Expresso"]);





?>