<h1>Exercice 1</h1>

<p>
Soit la phrase « Notre formation DL commence aujourd'hui ».
Ecrire un algorithme permettant de compter le nombre de caractères contenus dans cette phrase 
(espaces inclus).
</p>


<?php

// Déclaration variable pour ma phrase :
$maPhrase = "Notre formation DL commence aujourd'hui";

// Calcul du nombre de caratères : 
$nbCaractères = strlen($maPhrase)
?>

<h2>Résultat</h2>
<?php

// Affichage du nombre de caractères pour ma phrase :
echo "La phrase « $maPhrase » contient $nbCaractères caractères<br>";

?>

