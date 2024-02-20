<h1>Exercice 3</h1>

<p>
A partir de la phrase de l’exercice 1, écrire l’instruction permettant de remplacer le mot 
« aujourd’hui » par le mot « demain ». Afficher l’ancienne et la nouvelle phrase.
</p>

<h2>Résultat</h2>

<?php

// Déclaration mot à remplacer :
$oldtxt = "«Notre formation DL commence aujourd'hui.»";
$newtxt = str_replace("aujourd'hui", "demain", $oldtxt);

// Affichage nouvelle phrase :
echo "Ancienne phrase : $oldtxt<br>";
echo "Nouvelle phrase : $newtxt";
?>

