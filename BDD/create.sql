CREATE TABLE User (
  numUtilisateur INT PRIMARY KEY NOT NULL,
  login VARCHAR(25),
  password VARCHAR(50),
  mail VARCHAR(50),
  role TEXT CHECK( role IN ('admin','moderateur','adherent', 'inscrit', 'responsableLegal') )
);

CREATE TABLE informationsResponsableLegal (
  numUtilisateur INT PRIMARY KEY NOT NULL,
  nom VARCHAR(50),
  prenom VARCHAR(50),
  telephone VARCHAR(10),
  numEnfant INT NOT NULL,
  FOREIGN KEY(numUtilisateur) REFERENCES User(numUtilisateur),
  FOREIGN KEY(numEnfant) REFERENCES informationsPersonnellesMineur(numAdh)
);

CREATE TABLE informationsPersonnelles (
  numAdh INT PRIMARY KEY NOT NULL,
  nom VARCHAR(50),
  prenom VARCHAR(50),
  sexe TEXT CHECK( sexe IN ('f','h') ),
  dateNaissance DATE,
  poids INT NOT NULL,
  taille INT NOT NULL,
  paiement BOOLEAN,
  certifMedical BOOLEAN,
  telephone VARCHAR(10),
  FOREIGN KEY(numAdh) REFERENCES User(numUtilisateur)
);

CREATE TABLE informationsPersonnellesMineur (
  numAdh INT PRIMARY KEY NOT NULL,
  autorisationP BOOLEAN,
  numParent INT NOT NULL,
  FOREIGN KEY(numAdh) REFERENCES informationsPersonnelles(numAdh),
  FOREIGN KEY(numParent) REFERENCES informationsResponsableLegal(numUtilisateur)
);

CREATE TABLE Commentaire (
  numCom INT PRIMARY KEY NOT NULL,
  numUtilisateur INT NOT NULL,
  numArticle INT NOT NULL,
  numComSuivant INT,
  nomUtilisateur VARCHAR(50) DEFAULT 'Utilisateur anonyme',
  dateCom DATE,
  contenuCom TEXT,
  FOREIGN KEY(numUtilisateur, nomUtilisateur) REFERENCES User(numUtilisateur, login),
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

CREATE TABLE Media (
  id INT NOT NULL,
  nomMedia VARCHAR(255),
  type TEXT CHECK( type IN ('video', 'image') ),
  FOREIGN KEY(id) REFERENCES Article(id)
);
