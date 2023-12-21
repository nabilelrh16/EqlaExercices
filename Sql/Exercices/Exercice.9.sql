use BlindCode;
Select Nom, Prenom, Naissance
From Eleve
WHERE Naissance Between '1980-01-01' AND '1990-12-31';

Select Nom, Prenom, Naissance
From Eleve
Where Naissance < '1980-01-01' or Naissance > '1990-12-31';

Select Nom, Prenom, Naisssance
From Eleve
Where Naissance Not ('1980-01-01' AND '1990-12-31');


