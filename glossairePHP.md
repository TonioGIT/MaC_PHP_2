# GLOSSAIRE PHP - Antoine DOUSSAN.



## Tableau de fonctions:
Fonction/variable PHP | Rôle de la fonction
------------ | -------------------
date() | Récupère la date du serveur sous différents formats: date('d,m,Y') par exemple.
getdate() | Récupère un tableau avec plein de paramètres de l'heure (+ difficile à utiliser mais peut servir).
time() | Récupère l'heure du serveur sous différents formats ? ('H:i:s' ?).
trim() |
ltrim() |
rtrim() |
strlen() |
strtoupper() |
ucfirst() |
substr() |
strpos() |
explode() |
     |
htmlspecialchars() |
urlencode() |
isset() |
empty() |
$ GET |
$ POST |
$ REQUEST |
$ SERVER |
$ SESSION |
$ COOKIE |

     |
include() |
require() |
include once() |
require once() |

key exists() |
in array() |
array search() |
array keys() |
array values() |
is array() |
count() |
sort() |
ksort() |
asort() |
each() |
print r() |

## ECHO / PRINT
```
print est quivalent à un console.log.
echo affiche une variable, un résultat dans le html.
```

## Syntaxe "echo" raccourcie:
```
A la place de <?php echo "En attente" ?>
on peut écrire <?= "En attente" ?>
```

## STRING LENGHT 
```
$longeur = strlen("Antoine");  ->7.
```

##  Lancer un script PHP en CLI:
```
-Se placer dans C\wamp64\bin\php\php...\ (là où il y a php.exe).
-Cliquer dans la barre d'adresse et taper cmd (ouvre cmd en étant placé dans ce dossier).
-Dans cmd taper: php C:\wamp64\www\MaC_PHP_2\index.php (php pour executer php.exe + espace + adresse complète de son fichier .php à executer).
```
## SUBSTR
```
substr("Antoine", 3, 2); -->oi.
```
##  STRTOUPPER / STRTOLOWER
```
strtoupper  -> majuscules.
strtolower --> minuscules.
```
##  STRPOS
```
$pos = strpos("Antoine", "t");  -->2.
```
##  Pi.
```
En PHP Pi s'écrit M_PI.
```
##  Arrondis.
```
$arrondi = round(8.654615);  -->9.
$arrondiA3Dec = round(7.625148632, 3);  -->7.625.
```
##  Random.
```
rand();  -->nbre aléatoire entre 0 et 32767.
rand(1, 10); -->nbre aléatoire entre 1 et 10.
```
##  Tableaux.
```
$monTableau = array();
array_push($monTableau, "Rouge");
array_push($monTableau, "Bleu");
print count($monTableau);  -->2.

$tableau = array(8, 6, 1, 7, 3, 9);
sort($Tableau);  -->tri le tableau.
rsort($Tableau); -->tri le tableau à l'envers.
print join(", ", $Tableau); --> 9, 8, 7, 6, 3, 1
```
##  INCLUDE.
```
Pour lier une page .php à l'inde.php
include "fonctions.php";
```



## Syntaxe MD:

`let color = 'blue'`

```
let num = 2;
console.log(num);
```