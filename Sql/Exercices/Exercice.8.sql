use BlindCode;
Select Nom, Prenom, Naissance
From Eleve
WHERE Naissance > '1980-12-31';

Select Nom, Prenom, Naissance
From Eleve
Where Naissance < '1980-01-01';