<?php
//Demandez a l'utilisateur deux nombres
echo "Entrez un premier nombre: ";
$nombre1 = fgets(STDIN);

echo "Entrez un deuxième nombre: ";
$nombre2 = fgets(STDIN);

// Assurez-vous de convertir les entrées en nombres
$nombre1 = floatval($nombre1);
$nombre2 = floatval($nombre2);

// Additionner les deux nombres
$resultat = $nombre1 + $nombre2;

// Afficher le résultat
echo "Le Résultat est: $resultat ";
?>
