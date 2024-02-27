<h1>Exercice 8</h1>

<p>
Ecrire un algorithme qui renvoie la table de multiplication d'un nombre passé en paramètre sous la 
forme :
</p>

<!-- 
Affichage (pour la table de 8) :
Table de 8 :
1 x 8 = 8
2 x 8 = 16
3 x 8 = 24 …
 -->

 <h2>Résultat</h2>

 <p>
    Boucle <strong>while</strong> :
 </p>

 <?php

// Chiffre à multiplié : 
$chiffre = 8;

// Multiplicateur : 
$m = 0;

// Multiplication :
$multiplication = $chiffre * $m;

// Création d'une boucle while :
while ($m < 10) {
    $multiplication = $chiffre * $m;
    echo " $m x $chiffre = $multiplication<br>";
    $m++;
}
?>

<p>
    Boucle <strong>do while</strong> : 
</p>

<?php

// Création boucle do while : 

// Réénitialisation du multplicateur : 
$m = 0;
do {
    $multiplication = $chiffre * $m;
    echo " $m x $chiffre = $multiplication<br>";
    $m++;
} while ($m < 10);