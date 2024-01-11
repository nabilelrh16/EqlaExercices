use Pays;
Select Continent, Count(*) As Total
From Pays
Group By Continent;