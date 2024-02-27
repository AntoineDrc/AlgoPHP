<h1>Exercice 15</h1>

<p>
Créer une classe Personne (nom, prénom et date de naissance).
Instancier 2 personnes et afficher leurs informations : nom, prénom et âge.
$p1 = new Personne("DUPONT", "Michel", "1980-02-19") ;
$p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17") ;
</p>

<!-- 
    Affichage :
Michel DUPONT a … ans
Alice DUCHEMIN a … ans
 -->

 <h2>Résultat</h2>

 <?php

// Création d'une classe :
class Personne {
    private $nom;
    private $prenom;
    private $dateNaissance;

// Constructeur de la classe Personne, appelé lors de la création d'un nouvel objet :
public function __construct($nom, $prenom, $dateNaissance) {
    $this->nom = $nom;
    $this->prenom = $prenom;
    $this->dateNaissance = $dateNaissance;
}
// Création d'une méthode pour obtenir le nom :
public function getNom() {
    return $this->nom;
}
// Création d'une méthode pour obtenir le prénom : 
public function getPrenom() {
    return $this->prenom;
}
// Création d'une méthode pour obtenir le date de naissance : 
public function getDateNaissance() {
    return $this->dateNaissance;
}
// Création d'une méthode pour obtenir l'âge : 
public function getAge() {
    $dateActuelle = new DateTime();
    $dateNaissance = new DateTime($this->dateNaissance);
    $difference = $dateActuelle->diff($dateNaissance);
    return $difference->y;
}
}

// Instanciation objet.s :
$p1 = new Personne("DUPONT", "Michel", "1980-02-19");
$p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17");

// Test des fonctions : 
echo $p1->getAge();
