<h1>Exercice 12</h1>

<p>
A partir d'une fonction personnalisée et à partir d'un tableau de prénoms et de langue associée 
(tableau contenant clé et valeur), dire bonjour aux différentes personnes dans leur langue 
respective (français ➔ « Salut », anglais ➔ « Hello », espagnol ➔ « Hola »)
Exemple : tableau ➔ Mickaël -> FRA, Virgile -> ESP, Marie-Claire -> ENG <br><br>

<!-- 
    Affichage :
Salut Mickaël
Hola Virgile
Hello Marie-Claire
 -->

Variante : trier d'abord le tableau par ordre alphabétique du prénom

<!-- 
Affichage :
Hello Marie-Claire
Salut Mickaël
Hola Virgile
 -->
 </p>


 <h2>Résultat</h2>

 <?php

// Création d'un tableau associatif : 
$prenomLangue = ["Mickaël" => "FRA", "Virgile" => "ESP", "Marie-Claire" => "ENG",];

// Création d'une boucle : 
foreach ($prenomLangue as $prenom => $lang) { 
    // $prenomLangue = tableau
    // $prenom = valeur de la clé
    // $lang = la valeur associée à la clé
    
// Création de la condition :
    switch($lang){
        case "FRA";
            echo"Bonjour " . $prenom . "<br>";
            break;
        case "ESP";
            echo"Hola " . $prenom . "<br>";
            break;
        case "ENG";
            echo"Hello " . $prenom . "<br>";
// switch est une altérnative à if-else. On pourrait le traduire par : "Dans le cas où".

    }
}

// Saut de ligne : 
echo "<br>" . "<br>";

?>
<h2>Variante</h2>

<p>
    Trier d'abord le tableau par ordre alphabétique du prénom
</p>

<?php
// Variante de tableau en triant par ordre alpahbétique : 
$prenomLangue = ["Mickaël" => "FRA", "Virgile" => "ESP", "Marie-Claire" => "ENG",];
ksort($prenomLangue);

foreach ($prenomLangue as $prenom => $lang) {

switch($lang){
    case "FRA";
        echo"Bonjour " . $prenom . "<br>";
        break;
    case "ESP";
        echo"Hola " . $prenom . "<br>";
        break;
    case "ENG";
        echo"Hello " . $prenom . "<br>";
}
}