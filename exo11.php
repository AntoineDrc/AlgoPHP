<h1>Exercice 11</h1>

<p>
Initialiser un tableau de x marques de voitures. Ecrire un algorithme permettant de parcourir ce 
tableau et d'en afficher le contenu (une marque de voiture par ligne). Il est également demandé 
d'afficher le nombre de marques de voitures présentes dans le tableau.
Exemple : tableau ➔ « Peugeot », « Renault », « BMW », « Mercedes »
</p>

<!-- 
    Affichage (attention à utiliser une liste à puces)
Il y a 4 marques de voitures dans le tableau :
• Peugeot
• Renault
• BMW
• Mercedes
 -->

 <h2>Résultat</h2>

 <?php

//  Création d'un tableau marque de voitures :
$marqueVoiture = ["Peugeot", "Renault", "BMW", "Mercedes"];

// Affichage du tableau : 
echo "Il y a " . count($marqueVoiture) . " marques de voitures dans le tableau :<br><br>";

// Création d'une boucle :
foreach ($marqueVoiture as $marque) {
    ?>

    <li> <?= $marque ?> </li><br> 
    <?php
    // <?= Est une abbréviation pour <?php echo ... 

    // A noter qu'on peut aussi : echo "<li>" . $marque . "</li>" . "<br>";
}
