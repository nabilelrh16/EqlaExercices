use BlindCode2;

SELECT prenom, nom, YEAR(CURDATE()) - YEAR(naissance) AS Age
FROM Eleve
ORDER BY Age;

SELECT prenom, nom, YEAR(CURDATE()) - YEAR(naissance) AS Age
FROM Eleve
ORDER BY Age DESC;
