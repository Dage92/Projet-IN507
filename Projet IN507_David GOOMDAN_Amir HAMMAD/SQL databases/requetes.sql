/* Afficher les acteurs par ordre alphabetique */
SELECT nom ,prenom
FROM Acteur
ORDER BY nom;


/* Afficher les films par ordre alphabetique */
SELECT nom AS 'Films par ordre alphabetique'
FROM Film
ORDER BY nom;


/* Afficher la filmographie d'un acteur */
SELECT Film.nom AS 'Nom des Film'
FROM Film ,Acteur
WHERE Acteur.nom = 'Johnson' AND Acteur.prenom = 'Dwayne'
AND Film.filmID = Acteur.filmID;


/* Afficher les infos d'un film */
SELECT Acteur.nom ,Acteur.prenom ,Film.*
FROM Acteur ,Film
WHERE Film.nom = 'Joker'
AND Film.filmID = Acteur.filmID;


/* Affiche les films d'un Realisateur */
SELECT Film.director, Film.nom ,Film.genre ,Film.annee
FROM Film
WHERE Film.director LIKE 'Steven Spielberg'
ORDER BY annee;


/* Afficher les Projections/Film/Cinema/Acteurs/Employe/Client/Salle */
SELECT * 
FROM Projection;


/* Afficher les billets */
SELECT * 
FROM Billet;


/* Affiche les films du moment */
CREATE VIEW Fmoment
	AS 	SELECT DISTINCT Film.nom AS 'Film du moment'
		FROM Film ,Projection
		WHERE Film.filmID = Projection.filmID AND Projection.day BETWEEN '2020-1-1' AND '2020-2-1';
/* Afficher vue Fmoment */
SELECT *
FROM Fmoment;


/* Affiche les projections d'un film */
SELECT Film.nom ,Projection.cinemaID ,Projection.heuredebut
FROM Projection
INNER JOIN Film 
	ON Projection.filmID = Film.filmID
WHERE Film.nom = 'Harry Potter 1';



/* Les films par genre*/
SELECT Film.nom
FROM Film
WHERE Film.genre = 'Action';


/* Afficher les Director par ordre alphabetique */
SELECT DISTINCT director
FROM Film
ORDER BY director;


/* Affiche le nbr de place max de chaque projection */
SELECT Projection.projectionID, Salle.capacite AS PlaceMax
FROM Projection, Salle
WHERE Projection.salleID = Salle.salleID
ORDER BY Projection.projectionID;


/* Affiche le nbr de place prise de chaque porjection */
SELECT DISTINCT Billet.projectionID, count(*) AS NdrBillet
FROM Billet
GROUP BY Billet.projectionID;

/* Nombre de Client femme/homme */
SELECT count(*) AS 'Nombre de Client Femme' FROM Client WHERE Client.sexe = 'femme';
SELECT count(*) AS 'Nombre de Client Homme' FROM Client WHERE Client.sexe = 'homme';


/* Pourcentage de client femmes/homme */
SELECT (SELECT count(*) FROM Client WHERE Client.sexe = 'femme') / (SELECT count(*) FROM Client) * 100 AS '% de client femme';
SELECT (SELECT count(*) FROM Client WHERE Client.sexe = 'homme') / (SELECT count(*) FROM Client) * 100 AS '% de client homme';

/* Moyenne de l'age des clients */
SELECT (SELECT Sum(Client.age) FROM Client) / (SELECT count(*) FROM Client) AS 'age moyen des clients';


/* Affiche le nbr de place prise de chaque porjection dans une vue par ordre croissant */
CREATE VIEW Brestant
	AS 	SELECT DISTINCT Billet.projectionID, count(*) AS NdrBillet
		FROM Billet
		GROUP BY Billet.projectionID
		ORDER BY NdrBillet;
/* Afficher vue Brestant */
SELECT *
FROM Brestant;


/*La Projection avec le plus billets achete */
SELECT DISTINCT Film.nom AS 'FILM' ,Film.genre AS 'Genre' ,Film.director AS 'Realisateur' ,Film.duree AS 'Duree'
FROM Film 
INNER JOIN Projection ON Projection.filmID = Film.filmID 
INNER JOIN Billet ON Billet.projectionID = Projection.projectionID 
WHERE Billet.projectionID = 
(SELECT Brestant.NdrBillet FROM Brestant WHERE Brestant.projectionID = (SELECT Max(Brestant.projectionID) FROM Brestant));


/* Les films non projete */
CREATE VIEW Nprojete
	AS 	SELECT DISTINCT Film.nom AS 'Nom du Film', Film.filmID AS 'FilmID', Projection.filmID AS 'NULL'
		FROM Film
		LEFT OUTER JOIN Projection ON Film.filmID = Projection.filmID
		WHERE Projection.filmID IS NULL;

SELECT * 
FROM Nprojete;


/* Utilisateur et leur acces */
CREATE USER 'Users'@'localhost' identified by 'User1234&';
CREATE USER 'Employes'@'localhost' identified by 'Employe1&';
CREATE USER 'Admin'@'localhost' identified by 'Admin123&';


GRANT SELECT ON cinema.Projection TO 'Users'@localhost;
GRANT SELECT ON cinema.Film TO 'Users'@localhost;
GRANT SELECT ON cinema.Acteur TO 'Users'@localhost;
GRANT SELECT ON cinema.Fmoment TO 'Users'@localhost;

GRANT ALL ON cinema.Projection TO 'Employes'@localhost;
GRANT ALL ON cinema.Film TO 'Employes'@localhost;
GRANT ALL ON cinema.Acteur TO 'Employes'@localhost;
GRANT ALL ON cinema.Cinema TO 'Employes'@localhost;
GRANT ALL ON cinema.Fmoment TO 'Employes'@localhost;
GRANT ALL ON cinema.Brestant TO 'Employes'@localhost;

GRANT ALL ON cinema.* TO 'Admin'@localhost;

FLUSH PRIVILEGES; 

SHOW GRANTS FOR Users@localhost;
SHOW GRANTS FOR Employes@localhost;
SHOW GRANTS FOR Admin@localhost;