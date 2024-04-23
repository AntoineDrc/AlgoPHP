<h1>Exercice 7</h1>

<p>
    Ecrire un algorithme permettant de renvoyer la catégorie d'un enfant en fonction de son âge :
    Poussin : entre 6 et 7 ans
    Pupille : entre 8 et 9 ans
    Minime : entre 10 et 11 ans
    Cadet : à partir de 12 ans
    Si la catégorie n'est pas gérée, merci de le préciser.
</p>

<!-- 
Affichage : 
L’enfant qui a 10 ans appartient à la catégorie « Minime »
-->

<h2>Résultat</h2>

<?php

// Age enfant : 
$ageEnfant = 10;

// Catégorie :
$categorie = "";

// Phrase d'affichage :
$debutPhrase = "L'enfant qui a";
$finPhrase = "appartient à la catégorie";

// Les catégories d'age :
if ($ageEnfant >= 6 && $ageEnfant <= 7) {
    $categorie = "« Poussin »";
} elseif ($ageEnfant >= 8 && $ageEnfant <= 9) {
    $categorie = "« Pupille »";
} elseif ($ageEnfant >= 10 && $ageEnfant <= 11) {
    $categorie = "« Minime »";
} elseif ($ageEnfant >= 12 && $ageEnfant < 18) {
    $categorie = "« Cadet »";
} else {
    $categorie = "« Indéfinie »";
}
$indefinie = ($ageEnfant < 5 || $ageEnfant > 12);

// Affichage finale en fonction de la catégorie : 
echo "$debutPhrase $ageEnfant $finPhrase $categorie";
