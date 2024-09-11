<!-- CODE INDEX -->

<?php

// INTEGRER LES DONNEES DES CLASSES PRECEDEMMENT DEFINIES
include "Joueurs.php"; // Inclusion des CLASS
include "Equipe.php";
include "Pays.php";

                // CREER les OBJETS (ici joueurs et équipes)

// Ajouter des joueurs
$joueur1 = new Joueurs("Killian", "MBAPPE", "France");
$joueur2 = new Joueurs("Lionel", "MESSI", "Argentine");

//Ajouter des équipes
$equipe1 = new Equipe("France", "PSG");
$equipe2 = new Equipe("Espagne", "Real Madrid");

// Ajouter un joueur à une équipe 
$joueur1 = new Equipe("France", "PSG");
$joueur2 = new Equipe(paysEquipe: "Espagne", nomEquipe : "Real Madrid");


// Afficher les informations des équipes
$equipe1 -> afficherJoueurs();
$equipe2 -> afficherJoueurs();

