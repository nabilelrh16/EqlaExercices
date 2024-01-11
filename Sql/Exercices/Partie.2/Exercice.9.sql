use BlindCode2;
Select Nom, Prenom, Naissance
From Eleve
Where Naissance Between '1980-01-01' and '1990-12-31';

Select Nom, Prenom, Naissance
From Eleve
Where Naissance Not Between '1980-01-01' and '1990-12-31';