<?php

// INTEGRER LES DONNEES DES CLASSES PRECEDEMMENT DEFINIES
include "Joueur.php"; // Inclusion des CLASS
include "Equipe.php";
include "Pays.php";

// CREER les OBJETS

$joueur1 = new Joueur("Killian", "MBAPPE", "France");

$equipe1 = new Equipe("France", "PSG");
$equipe2 = new Equipe("Espagne", "Real Madrid");

// Ajouter une équipe à un joueur
$joueur1 -> ajouterEquipes($equipe1);
$joueur1 -> ajouterEquipes($equipe2);

// Afficher les informations du joueur et ses équipes
echo "Joueur: " . $joueur1 -> getPrenom() . " " . $joueur1 -> getNom() . " - Pays d'origine: " . $joueur1 -> getPaysOrigine() . "<br>";
echo "Équipes: ";
foreach ($joueur1 -> getEquipe() as $equipe) {
    echo $equipe -> getNomEquipe() . ", ";
}

