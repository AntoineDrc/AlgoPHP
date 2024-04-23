<h1>Exercice 5</h1>

<p>
    Ecrire un algorithme qui déclare une valeur en francs et qui la convertit en euros.
    Attention, la valeur générée devra être arrondie à 2 décimales.
</p>

<!-- Affichage : -->
<!-- Montant en francs : 100 -->
<!-- 100 francs = 15.24 € -->

<h2>Résultat</h2>

<?php

// Déclaration montant en francs :
$montantFrancs = 100;

// Conversion en euros : 
$tauxConversion = 6.56;
$montantEuros = $montantFrancs / $tauxConversion;

// Montant arrondi à deux décimales : 
$montantEurosArrondi = number_format($montantEuros, 2);

// Affichage : 
echo "Montant en francs : $montantFrancs<br>";
echo "$montantFrancs francs = $montantEurosArrondi €";
