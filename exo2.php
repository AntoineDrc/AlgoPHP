<h1>Exercice 2</h1>

<p>
    A partir de la phrase de l'exercice 1, écrire l'instruction permettant de compter le nombre de mots
    contenus dans celle-ci.
</p>

<h2>Résultat</h2>

<?php
// Déclaration variable ma phrase : 
$maPhrase = "«Notre formation DL commence aujourd'hui»";

// Calcul du nombre de mots : 
$nbMots = str_word_count($maPhrase);

// Affichage du nombre de mots pour ma phrase :
echo "La phrase $maPhrase contient $nbMots mots."
?>