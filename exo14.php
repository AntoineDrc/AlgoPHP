<h1>Exercice 14</h1>

<p>
    Calculer l'âge exact d'une personne à partir de sa date de naissance (en années, mois, jours).
</p>

<!-- 
    Affichage (si la date courante est le 21/05/2018 et la date de naissance le 
17/01/1985 :
Age de la personne : 33 ans 4 mois 4 jours
 -->

<h2>Résultat</h2>

<?php

// Variable à la date du 21/05/2018 :
$date1 = new DateTime("2018-05-21");

// Variable date de naissance de la personne : 
$dateN = new DateTime("1985-01-17");

// Calcul de l'âge en fonction de la différence : 
$age = date_diff($date1, $dateN); // date_diff est une fonction qui permet de calculer la différence entre deux objets DateTime.

// Affichage de la date de naissance ainsi que l'âge : 
echo $dateN->format('d/m/Y') . " :" . "<br>";
echo "Age de la personne : " . $age->format('%y ans %m mois %d jours');
