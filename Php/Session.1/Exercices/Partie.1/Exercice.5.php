<?php
//Demandez a l'utilisateur d'entrez une température en celsius
echo "Entrez une température en celsisus: ";
$celsius = fgets(STDIN);

// Assurez-vous de convertir les entrées en nombres
$celsius = floatval($celsius);

// Effectuez la conversion de Celsius en Fahrenheit
$fahrenheit = ($celsius * 9/5) + 32;

//Affiche la température en Fahrenheit
echo "La Température est de: $fahrenheit ";
?>