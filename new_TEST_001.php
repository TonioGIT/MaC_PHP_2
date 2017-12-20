

<?php



	$tabAssocBoissons = array (
		"Expresso" => array ("eau"=>1, "cafe"=>1, "the"=>0),
		"CafeLong" => array ("eau"=>2, "cafe"=>2, "the"=>0),
		"The"      => array ("eau"=>1, "cafe"=>0, "the"=>1),
	);



	/*$key = array_search("The", $tabAssocBoissons);
	echo $key;*/

	//echo $tabAssocBoissons["The"]["cafe"]; 
	/*echo $tabAssocBoissons["The"];*/


function prepareBoisson($boisson, $nbreSucres) {
	if (in_array($boisson, $tabAssocBoissons)) {
		preparerBoisson($boisson, $sucre);

	}





}




	function preparer($tabIngredients) {
		$recette;
		$recette = "Eau: " . $tabIngredients["eau"] . " , café: " . $tabIngredients["cafe"] . " , thé: " . $tabIngredients["the"] . ".";
		return $recette;
	};


	echo preparer($tabAssocBoissons["The"]);



?>