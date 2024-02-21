<h1>Exercice 9</h1>

<p>
Nous souhaitons savoir si une personne est imposable en fonction de son âge et de son sexe.
Si la personne est une femme dont l'âge est compris entre 18 et 35 ans ou si c'est un homme de 
plus de 20 ans, alors celle-ci est imposable (sinon ce n'est pas le cas, « non imposable »).
</p>

<!-- 
Affichage :
Age : 32
Sexe : F
La personne est imposable
 -->

 <h2>Résultat</h2>

 <?php

// Age personne : 
$age = 32;

// Sexe personne : 
$sexe = "F";

// Limite age Femme : 
$femmeLimiteBasse = 18;
$femmeLimiteHaute = 35;

// Limite age Homme : 
$hommeLimiteBasse = 20;

// Afficher si la personne est imposable : 
if ($sexe == "F" && ($age >= $femmeLimiteBasse && $age <= $femmeLimiteHaute) || $sexe == "H" && $age >= $hommeLimiteBasse) {
    echo "Age : $age<br>";
    echo "Sexe : $sexe<br>";
    echo "La personne est imposable.";
} else {
    echo "Age : $age<br>";
    echo "Sexe : $sexe<br>";
    echo "La personne n'est pas imposable.";
}

