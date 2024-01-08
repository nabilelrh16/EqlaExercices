<?php
//Demandez a l'utilisateur d'entrez son age
echo "Entrez votre age: ";
$age = trim (fgets(STDIN));

// Vérifiez si l'âge est supérieur ou égal à 18
$estMajeur = ($age >= 18);

// Affiche si l'utilisateur est majeur ou non
if ($estMajeur) {
    echo "L'affirmation : Vous êtes majeur est : TRUE";
} else {
    echo "L'affirmation : Vous êtes majeur est : FALSE";
}
?>