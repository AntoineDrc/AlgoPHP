<h1>Exercice 6</h1>

<p>
    Ecrire un algorithme permettant de calculer un montant de facture à régler à partir de la quantité
    d'articles, son prix hors taxe et un taux de TVA (exprimé en décimal. Ex : 20 % -> 0.2)
</p>

<!-- 
Affichage :
Prix unitaire de l’article : 9.99 €
Quantité : 5
Taux de TVA : 0.2
Le montant de la facture à régler est de : 59.94 €
 -->

<h2>Résultat</h2>

<?php

// Prix unitaire de l'article : 
$prixArticle = 9.99;

// Quantité d'articles : 
$quantité = 5;

// TVA :
$tva = 0.2;

// Calcul de la facture H.T :
$sommeHt = $prixArticle * $quantité;

// Ajout de le TVA :
$sommeTtc = $sommeHt + ($sommeHt * $tva);

// Affichage finale : 
echo "Prix unitaire de l'article : $prixArticle €<br>";
echo "Quantité : $quantité<br>";
echo "Taux de TVA : $tva<br>";
echo "Le montant de la facture à régler est de : $sommeTtc €";
