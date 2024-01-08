<?php
// Demandez à l'utilisateur deux noms
echo "Entrez un premier nom: ";
$nom1 = trim(fgets(STDIN)); // Utilisez trim pour supprimer les espaces ou les sauts de ligne éventuels

echo "Entrez un deuxième nom: ";
$nom2 = trim(fgets(STDIN));

// Afficher les deux noms
echo "Bonjour: $nom1 et $nom2\n";

//Afficher les résultat du control
echo "Vous avez eu respectivement 14 et 16 à votre dernier contrôle.";

// La Somme est de 30
$somme = 14 + 16;
echo "La somme de vos résultats est de $somme!\n";

// La division est de 0.875
$division = 14 / 16;
echo "La division de vos résultats est de $division!\n";

// La multiplication est de 224
$multiplication = 14 * 16;
echo "La multiplication de vos résultats est de $multiplication!\n";

// La soustraction de vos résultats est de -2
$soustraction = 14 - 16;
echo "La soustraction de vos résultats est de $soustraction!\n";

//Afficher la moyenne
echo "Enfin, la moyenne de vos résultat est de 15 !\n";

//Afficher les salutation d'au revoir
echo "J'espère que j'ai pu être utile, bonne journée.\n";
?>
