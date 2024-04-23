<h1>Exercice 10</h1>

<p>
    A partir d'un montant à payer et d'une somme versée pour régler un achat, écrire l’algorithme qui
    affiche à un utilisateur un rendu de monnaie en nombre de billets de 10 € et 5 €, de pièces de 2 € et
    1 €.
</p>

<!-- 
    Affichage :
Montant à payer : 152 €
Montant versé : 200 €
Reste à payer : 48 €
***************************************************
Rendue de monnaie : 
4 billets de 10 € - 1 billet de 5 € - 1 pièce de 2 € - 1 pièce de 1 €
 -->

<h2>Résultat</h2>

<?php

// Montant à payer : 
$prix = 152;

// Somme versé : 
$versement = 200;

// Rendu de monnaie : 
$rendu = $versement - $prix;

// Monnaie disponible : 
$billet10 = 10;
$billet5 = 5;
$piece2 = 2;
$piece1 = 1;

$nbBillet10 = 0;
$nbBillet5 = 0;
$nbPiece2 = 0;
$nbPiece1 = 0;

// Calcul du nombre de billet de 10 : 
$nbBillet10 = intdiv($rendu, $billet10);

// Récupération du reste de la monnaie à rendre : 
$reste = $rendu % $billet10;

// Calcul du nombre de billet de 5 :
$nbBillet5 = intdiv($reste, $billet5);

// Récupération du reste de la monnaie à rendre :
$reste = $reste % $billet5;

// Calcul du nombre de pièces de 2 :
$nbPiece2 = intdiv($reste, $piece2);

// Récupération du reste de la monnaie à rendre :
$reste = $reste % $piece2;

// Calcul du nombre de pièces de 1 : 
$nbPiece1 = intdiv($reste, $piece1);

// Affichage finale :
echo "Montant à payer : $prix<br>";
echo "Montant versé : $versement<br>";
echo "Montant rendu : $rendu<br>";
echo "*********************************************<br>";
echo "Rendue de monnaie :<br>";
echo "$nbBillet10 billets de 10 € - $nbBillet5 billets de 5 € - $nbPiece2 pièce de 2 € - $nbPiece1 pièce de 1 €";
