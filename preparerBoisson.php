<?php

include "fonctions.php";

$getBoisson = ($_POST["boiss"]);
$getSucres = ($_POST["suc"]);

$PREPARATION = preparerBoisson($getBoisson, $getSucres);




/*print $getBoisson;
print $getSucres;*/



?>