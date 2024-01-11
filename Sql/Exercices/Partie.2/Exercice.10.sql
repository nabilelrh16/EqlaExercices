use BlindCode2;
Select Nom, Prenom, Email
From Eleve
Where Email LIKE '%gmail.com';

Select Nom, Prenom, Email
From Eleve
Where Email NOT LIKE '%gmail.com';