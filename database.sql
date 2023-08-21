CREATE DATABASE nutritionEtSante;
USE nutritionEtSante;

CREATE TABLE Recette(
	id INT NOT NULL AUTO_INCREMENT,
	nom VARCHAR(50),
	categorie VARCHAR(10),
	nbPersonne SMALLINT,
	tpsPrepa SMALLINT,
	tpsCuisson SMALLINT,
	etape TEXT(65535),
	lienImage VARCHAR(30),
	PRIMARY KEY (id)
);

CREATE TABLE Aliment(
	id INT NOT NULL AUTO_INCREMENT,
	nom VARCHAR(50),
	type VARCHAR(10),
	calorie INT,
	PRIMARY KEY (id)
);

CREATE TABLE QuantiteAliment(
	idRecette INT,
	idAliment INT,
	nbKg INT,
	CONSTRAINT pk_QuantiteAliment PRIMARY KEY (idRecette, idAliment),
	FOREIGN KEY fk_Recette(idRecette) REFERENCES Recette(id) ON DELETE CASCADE,
	FOREIGN KEY fk_Aliment(idAliment) REFERENCES Aliment(id) ON DELETE CASCADE
);


CREATE TABLE Utilisateur (
  id int NOT NULL AUTO_INCREMENT,
  nom varchar(100) NOT NULL,
  prenom varchar(100) NOT NULL,
  email varchar(100) NOT NULL,
  motDePasse varchar(100) NOT NULL,
  sexe enum('homme','femme') NOT NULL,
  dateNaissance date NOT NULL,
  /*token text NOT NULL,*/
  PRIMARY KEY (id)
);






INSERT INTO Recette
VALUES (0, 'Gateau Choco', 'dessert', 4, 30, 15, '<div class="etape">Etape 1</div>
            <div class="contenu-etape">Dans un saladier, mélanger la farine, le sel et le sucre.</div>
            <div class="etape">Etape 2</div>
            <div class="contenu-etape">Faire une fontaine.</div>
            <div class="etape">Etape 3</div>
            <div class="contenu-etape">Ajouter les oeufs et commencer à les incorporer à la farine avec une cuillère en bois, ajouter le beure fondu (tiédi) peu à peu et bien malaxer.</div>
            <div class="etape">Etape 4</div>
            <div class="contenu-etape">Incorporer le lait (par petites quantités au début pour éviter les grumeaux), ajouter le parfum.</div>
            <div class="etape">Etape 5</div>
            <div class="contenu-etape">Faire cuire les crêpes dans une poêle chaude huilée.</div>', 'fondant-chocolat.jpg');

INSERT INTO Aliment
VALUES (0, 'chocolat', 'grammes',50);
INSERT INTO Aliment
VALUES (0, 'chocolat', 'grammes',50);
INSERT INTO Aliment
VALUES (0, 'chocolat', 'grammes',50);
INSERT INTO Aliment
VALUES (0, 'chocolat', 'grammes',50);

INSERT INTO QuantiteAliment
VALUES (15, 1, 100);
INSERT INTO QuantiteAliment
VALUES (15, 2, 100);
INSERT INTO QuantiteAliment
VALUES (15, 3, 100);
INSERT INTO QuantiteAliment
VALUES (15, 4, 100);
INSERT INTO QuantiteAliment
VALUES (15, 5, 100);

INSERT INTO QuantiteAliment
VALUES (14, 2, 95);
INSERT INTO QuantiteAliment
VALUES (14, 3, 200);
INSERT INTO QuantiteAliment
VALUES (14, 4, 5);
INSERT INTO QuantiteAliment
VALUES (14, 5, 78);
INSERT INTO QuantiteAliment
VALUES (14, 6, 3);
