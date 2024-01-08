<?php
// Demande à l'utilisateur de saisir son nom
echo "Veuillez entrer votre nom : ";

// Utilise fgets(STDIN) pour lire l'entrée de l'utilisateur
$nom = trim(fgets(STDIN));

// Affiche un message de salutation avec le nom de l'utilisateur
echo "Bonjour, $nom !";
?>
