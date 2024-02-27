<?php

// Définition de la classe
class Voiture {
    // Propriétés
    public $marque;
    public $modele;
    public $annee;

    // Méthode pour afficher les détails de la voiture
    public function afficherDetails() {
        echo "Marque: $this->marque, Modèle: $this->modele, Année: $this->annee";
    }
}

// Création d'une instance de la classe Voiture
$maVoiture = new Voiture();

// Attribution de valeurs aux propriétés
$maVoiture->marque = "Toyota";
$maVoiture->modele = "Camry";
$maVoiture->annee = 2022;

// Appel de la méthode pour afficher les détails
$maVoiture->afficherDetails();
?>
