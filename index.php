<?php

// INTEGRER LES DONNEES DES CLASSES PRECEDEMMENT DEFINIES
include "Joueurs.php"; // Inclusion des CLASS
include "Equipe.php";
include "Pays.php";

                // CREER les OBJETS (ici joueurs et équipes)

// Ajoute / Enregistrer des joueurs
$joueur1 = new Joueurs("Killian", "MBAPPE", "France");

$equipe1 = new Equipe("France", "PSG");
$equipe2 = new Equipe("Espagne", "Real Madrid");

// Ajoute / Enregistrer des équipes
$joueur1 = new Equipe("France", "PSG");

// Ajouter des joueurs aux équipes
$equipe1 -> ajouterJoueur($joueur1);
$equipe2 -> ajouterJoueur($joueur2);

// Afficher les informations du joueur et ses équipes
$equipe1 -> afficherJoueurs();
$equipe2 -> afficherJoueurs();

