CREATE TABLE Utilisateur (
  numUtilisateur INT PRIMARY KEY NOT NULL,
  login VARCHAR(25),
  password VARCHAR(50),
  mail VARCHAR(50),
  role VARCHAR(50)
);

CREATE TABLE infoPerso (
  numUtilisateur INT PRIMARY KEY NOT NULL,
  nom VARCHAR(50),
  prenom VARCHAR(50),
  sexe CHAR(1),
  dateNaissance DATE,
  poids INT NOT NULL,
  taille INT NOT NULL,
  paiement BOOLEAN,
  certifMedical BOOLEAN,
  autorisationP BOOLEAN DEFAULT true,
  telephone VARCHAR(10),
  FOREIGN KEY(numUtilisateur) REFERENCES Utilisateur(numUtilisateur)
);

CREATE TABLE Commentaire (
  numCom INT PRIMARY KEY NOT NULL,
  numUtilisateur INT NOT NULL,
  numArticle INT NOT NULL,
  numComSuivant INT,
  nomUtilisateur VARCHAR(50) DEFAULT 'Utilisateur anonyme',
  dateCom DATE,
  contenuCom TEXT,
  FOREIGN KEY(numUtilisateur, nomUtilisateur) REFERENCES Utilisateur(numUtilisateur, login),
  FOREIGN KEY(numArticle) REFERENCES Article(id),
  FOREIGN KEY(numComSuivant) REFERENCES Commentaire(numCom)
);

CREATE TABLE Article (
  id INT PRIMARY KEY NOT NULL,
  titre VARCHAR(255),
  date_time_publication DATETIME,
  date_time_edition DATETIME DEFAULT NULL,
  contenu TEXT
);

CREATE TABLE Objet (
  id INT NOT NULL,
  nomObjet VARCHAR(255),
  type VARCHAR(6),
  FOREIGN KEY(id) REFERENCES Article(id)
);
