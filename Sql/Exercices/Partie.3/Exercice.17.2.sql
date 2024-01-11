use Ventes;
Select Count(*) As Total
From Produit;

use BlindCode2;
Select COUNT(*) AS NB_Eleve
From Eleve
Where YEAR(CURDATE()) - YEAR(naissance)  >=25;