<?php
// Demandez à l'utilisateur d'entrer un jour de la semaine
echo "Entrez un jour de la semaine: ";
$Lundi = trim(fgets(STDIN));

echo "Entrez un jour de la semaine: ";
$Mardi = trim(fgets(STDIN));

echo "Entrez un jour de la semaine: ";
$Mercredi = trim(fgets(STDIN));

echo "Entrez un jour de la semaine: ";
$Jeudi = trim(fgets(STDIN));

echo "Entrez un jour de la semaine: ";
$Vendredi = trim(fgets(STDIN));

echo "Entrez un jour de la semaine: ";
$Samedi = trim(fgets(STDIN));

echo "Entrez un jour de la semaine: ";
$Dimanche = trim(fgets(STDIN));

// Définir des variables booléennes pour chaque jour
$estLundi = ($Lundi === "Lundi") ? false : false;
$estMardi = ($Mardi === "Mardi") ? false: false;
$estMercredi = ($Mercredi === "Mercredi") ? false : false;
$estJeudi = ($Jeudi === "Jeudi") ? false: false;
$estVendredi = ($Vendredi === "Vendredi") ? false: false;
$estSamedi = ($Samedi === "Samedi") ? true: true;
$estDimanche = ($Dimanche === "Dimanche") ? false : false;

// Afficher quel jour nous sommes
echo "L'affirmation : on est Lundi est: " . ($estLundi ? "FALSE" : "FALSE") . "\n";
echo "L'affirmation : on est Mardi est: " . ($estMardi ? "FALSE" : "FALSE") . "\n";
echo "L'affirmation : on est Mercredi est: " . ($estMercredi ? "FALSE" : "FALSE") . "\n";
echo "L'affirmation : on est Jeudi est: " . ($estJeudi ? "FALSE" : "FALSE") . "\n";
echo "L'affirmation : on est Vendredi est: " . ($estVendredi ? "FALSE" : "FALSE") . "\n";
echo "L'affirmation : on est Samedi est: " . ($estSamedi ? "TRUE": "TRUE") . "\n";
echo "L'affirmation : on est Dimanche est: " . ($estDimanche ? "FALSE" : "FALSE") . "\n";
?>
