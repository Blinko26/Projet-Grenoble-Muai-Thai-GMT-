CREATE TABLE Utilisateur (
  numUtilisateur INT PRIMARY KEY NOT NULL,
  login VARCHAR(25),
  password VARCHAR(50),
  mail VARCHAR(50)
);

CREATE TABLE MessagePrive (
  numEnvoyeur INT PRIMARY KEY NOT NULL,
  numReceveur INT NOT NULL,
  titreMessage VARCHAR(50),
  contenuMessage TEXT,
  FOREIGN KEY(numEnvoyeur) REFERENCES Utilisateur(numUtilisateur),
  FOREIGN KEY(numReceveur) REFERENCES Utilisateur(numUtilisateur)
);

CREATE TABLE Adherent (
  numAdh INT PRIMARY KEY NOT NULL,
  nom VARCHAR(50),
  prenom VARCHAR(50),
  sexe CHAR(1),
  dateNaissance DATE,
  poids INT NOT NULL,
  taille INT NOT NULL,
  paiement BOOLEAN,
  certifMedical BOOLEAN,
  FOREIGN KEY(numAdh) REFERENCES Utilisateur(numUtilisateur)
);

CREATE TABLE AdherentMineur (
  autorisationParentale PRIMARY KEY BOOLEAN,
  FOREIGN KEY(numAdhMineur) REFERENCES Adherent(numAdh)
);

CREATE TABLE Moderateur (
  numMod INT PRIMARY KEY NOT NULL,
  FOREIGN KEY(numMod) REFERENCES Adherent(numAdh)
);

CREATE TABLE Admin (
  numAdmin INT PRIMARY KEY NOT NULL,
  FOREIGN KEY(numAdmin) REFERENCES Moderateur(numMod)
);

CREATE TABLE Commentaire (
  numCom INT PRIMARY KEY NOT NULL,
  numAdh INT NOT NULL,
  numAct INT NOT NULL,
  nomAdh VARCHAR(50),
  dateCom DATE,
  contenuCom TEXT,
  FOREIGN KEY(numAdh, nomAdh) REFERENCES Utilisateur(numUtilisateur, login),
  FOREIGN KEY(numAct) REFERENCES Actualites(numAct)
);

CREATE TABLE Actualites (
  numAct INT PRIMARY KEY NOT NULL,
  titre VARCHAR(50),
  dateActu DATE,
  contenuActu TEXT
);

CREATE TABLE Lien (
  adresse VARCHAR(200) PRIMARY KEY,
  numAct INT NOT NULL,
  FOREIGN KEY(numAct) REFERENCES Actualites(numAct)
);
