<?php
// Demande à l'utilisateur de saisir son nom
echo "Veuillez entrer votre année de naissance: ";

//soustrait année actuel - année de naissance
$age = date("Y") - $annee_de_naissance;

// Affiche un message avec l'age de l'utilisateur
echo "Votre age est: .$age.  !";
?>
