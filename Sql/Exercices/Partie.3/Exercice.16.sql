use BlindCode2;

SELECT AVG(YEAR(CURDATE())-YEAR(Naissance)) AS AgeMoyen 
FROM Eleve
ORDER BY AgeMoyen;
