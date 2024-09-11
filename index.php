<!-- CODE INDEX -->

<?php

// INTEGRER LES DONNEES DES CLASSES PRECEDEMMENT DEFINIES
include "Joueurs.php"; // Inclusion des CLASS
include "Equipes.php";
include "Pays.php";

                // CREER les OBJETS (ici joueurs et équipes)

// Ajouter des joueurs
$joueur1 = new Joueurs("Killian", "MBAPPE", "France");
$joueur2 = new Joueurs("Lionel", "MESSI", "Argentine");

//Ajouter des équipes
$equipe1 = new Equipe("France", "PSG");
$equipe2 = new Equipe("Espagne", "Real Madrid");

// Ajouter un joueur à une équipe 
$equipe1 -> ajouterJoueur($joueur1);
$equipe2 -> ajouterJoueur($joueur2);

// Afficher les informations des équipes
// $equipe1 -> afficherJoueurs();
// $equipe2 -> afficherJoueurs();


// var_dump($joueur1);
// var_dump($equipe2);


// Améliorer l'affichage
echo "<style>
        table {
            border-collapse: collapse;
            width: 100%;
            font-family: Arial, sans-serif;
        }
        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
      </style>";

echo "<table>";
echo "<thead>
        <tr>
            <th>Nom de l'équipe</th>
            <th>Pays</th>
            <th>Joueurs</th>
        </tr>
      </thead>";
echo "<tbody>";
echo "<tr>
        <td>" . $equipe1 -> getNomEquipe() . "</td>
        <td>" . $equipe1 -> getPayEquipe() . "</td>
        <td>";
        foreach ($equipe1 -> getJoueurs() as $joueur) {
            # code...
            echo $joueur -> getPrenom() . " " . $joueur -> getNom() . " (" . $joueur -> getPaysOrigine() . ")<br>";
        }
echo "</td>
        </tr>";

echo "<tr>
        <td>" . $equipe2 -> getNomEquipe() . "</td>
        <td>" . $equipe2 -> getPayEquipe() . "</td>
        <td>";
        foreach ($equipe2 -> getJoueurs() as $joueur) {
            # code...
            echo $joueur -> getPrenom() . " " . $joueur -> getNom() . " (" . $joueur -> getPaysOrigine() . ")<br>";
        }
        echo "</td>
                </tr>";
        

echo "<tbody>";                
echo "</table>";

?>