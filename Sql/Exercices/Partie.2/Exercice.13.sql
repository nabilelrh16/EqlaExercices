use Localites;
Select Cp, Commune
From Localite
Where Cp= 4280;

USE Localites;
SELECT Cp, Commune
FROM Localite
WHERE Cp= 4280 AND (Commune = 'b' OR Commune = 'a');

Select Cp, Commune
From Localite
Where Cp= 4000 and 4999;
