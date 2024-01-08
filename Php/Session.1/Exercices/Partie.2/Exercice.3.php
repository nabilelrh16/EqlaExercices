<?php
// Demandez à l'utilisateur le jour de la semaine
echo "Entrez le jour de la semaine: ";
$jour = trim(fgets(STDIN));

// Demandez à l'utilisateur son âge
echo "Entrez votre âge: ";
$age = trim(fgets(STDIN));

// Définir des variables booléennes pour le jour de la semaine et l'âge
$estWeekend = ($jour === "Samedi" || $jour === "Dimanche");
$aLAgeNecessaire = ($age >= 18);

// Afficher les affirmations
echo "L'affirmation : \"Vous avez l'âge de rentrer dans mon magasin\" est : " . ($aLAgeNecessaire ? "TRUE" : "FALSE") . "\n";
echo "L'affirmation : \"On est le week-end\" est : " . ($estWeekend ? "TRUE" : "FALSE") . "\n";

// Vérifier si les deux conditions sont remplies
$estUtileDeVenir = $aLAgeNecessaire && $estWeekend;
echo "L'affirmation : \"Il est utile de venir à mon magasin aujourd'hui\" est : " . ($estUtileDeVenir ? "TRUE" : "FALSE") . "\n";
?>
