<?php
include "fonctions.php";

$getBoisson = htmlspecialchars($_POST["ChoixBoisson"]);
$getSucres = htmlspecialchars($_POST["ChoixSucres"]);

echo preparerBoisson($getBoisson, $getSucres);



/*print $getBoisson;
print $getSucres;*/



?>