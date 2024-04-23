<h1>Exercice 13</h1>

<p>
    Calculer la moyenne générale d'un élève dont les notes sont renseignées dans un tableau (pas de
    coefficient). Elle devra être affichée avec 2 décimales.
</p>

<!-- 
    Affichage :
Les notes obtenues par l’élève sont : 10 12 8 19 3 16 11 13 9
Sa moyenne générale est donc de : 11.22
 -->

<h2>Résultat</h2>

<?php

// Tableau numérique contenant les notes de l'élève : 
$note = [
    "10",
    "12",
    "8",
    "19",
    "3",
    "16",
    "11",
    "13",
    "9",
];

// Variable qui servira à afficher toutes les notes : 
$afficherNote = implode(" ", $note);

// Création d'une variable somme :
$somme = "";

// Création d'une boucle pour le calcul de la somme des notes : 
foreach ($note as $valeur) {
    $somme = $somme + $valeur;
}

// Variable nombre de notes pour le calcul de la moyenne : 
$nombreDeNote = count($note);

// Diviser la somme par le nombre de notes pour calculer la moyenne : 
$moyenne = $somme / $nombreDeNote;

// Limiter la moyenne à 2 décimales : 
$moyenneDecimale = number_format($moyenne, 2);

// Affichage finale : 
foreach ($note as $n);
echo "Les notes obtenues par l'élève sont : " . $afficherNote . "<br>";
echo "Sa moyenne générale est donc de : " . $moyenneDecimale;
