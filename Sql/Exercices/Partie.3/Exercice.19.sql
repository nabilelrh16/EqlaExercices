use BlindCode2;
Select Sexe, Count(*) As Total
From Eleve
Group By Sexe;

Select Nationalite, Count(*) As Total
From Eleve
Group By Nationalite;