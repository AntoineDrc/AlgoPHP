<h1>Exercice 4</h1>

<p>
    Ecrire un algorithme permettant de savoir si une phrase est palindrome.
</p>

<!-- La phrase « Engage le jeu que je le gagne » est palindrome -->

<h2>Résultat</h2>

<?php
// Déclaration variable phrase palindrome :
$phraseInitiale = "Engage le jeu que je le gagne";

// Conversion en minuscule : 
$phraseMin = strtolower($phraseInitiale);

// En minuscule et sans espaces : 
$phraseMinSansEspace = str_replace(' ', '', $phraseMin);

// Inversion de la phrase :
$phraseInversee = strrev($phraseMinSansEspace);

// Affichage SI c'est un palindrome :
if ($phraseInversee == $phraseMinSansEspace) {
    echo "La phrase $phraseInitiale est un palindrome";
} else {
    echo "Cette phrase n'est pas un palindrome";
}
?>