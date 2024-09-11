<!-- CODE JOUEURS -->
 <?php

 class Joueurs{ // Déclarer la CLASS "Joueurs" - pour lister les joueurs
    // Déclarer les ATTRIBUTS de la "class"
    private string $_prenom;
    private string $_nom;
    private string $_paysOrigine;
    private array $_equipes; // Créer le TABLEAU pour les "équipes"

// __construct pour INIATILIASER "chaque" attributs pour "chaque" joueur
    public function __construct($prenom, $nom, $paysOrigine){
        $this -> _prenom = $prenom;
        $this -> _nom = $nom;
        $this -> _paysOrigine = $paysOrigine;
        $this -> __equipes = array(); // INITIALISER le TABLEAU des équipes
    }

    // Placer une METHODE pour "STOCKER" chaque équipe"
    public function ajouterEquipes($equipes){ // AJOUTER "chaque" équipe au tableau
        $this -> __equipes[] = $equipes ;
    }

    // Placer ue méthode pour modifier la date de naissance en âge

    
    //GETTERS
    public function getPrenom(){
        return $this -> _prenom; // Le "_" permet d'accéder aux attributs
    }
    public function getNom(){
        return $this -> _nom;
    }
    public function getPaysOrigine(){
        return $this -> _paysOrigine;
    }
    public function getEquipe(){
        return $this -> _equipes;
    }

    //SETTERS
    public function setPrenom($prenom){
        $this -> _prenom = $prenom;
    }
    public function setNom($nom){
        $this -> _nom = $nom;
    }
    public function setPaysOrigine($paysOrigine){
        $this -> _paysOrigine = $paysOrigine;
    }
    public function setEquipe($equipes){
        $this -> _equipes = $equipes;
    }


 }