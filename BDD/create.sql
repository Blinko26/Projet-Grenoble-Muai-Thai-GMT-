CREATE TABLE User ( -- Table de l'utilisateur (détenteur d'un compte sur le site internet). Dépend de son numéro d'utilisateur.
  numUtilisateur INT PRIMARY KEY NOT NULL,
  login VARCHAR(25),
  password VARCHAR(50),
  mail VARCHAR(50),
  role TEXT CHECK( role IN ('admin','moderateur','adherent', 'inscrit', 'responsableLegal') )
);

CREATE TABLE informationsResponsableLegal ( -- Table d'informations concernant le responsable légal d'un adhérent mineur. Dépend de son numéro d'Utilisateur.
  numRespLegal INT PRIMARY KEY NOT NULL,
  nom VARCHAR(50),
  prenom VARCHAR(50),
  telephone VARCHAR(10),
  numEnfant INT NOT NULL,
  FOREIGN KEY(numEnfant) REFERENCES informationsPersonnelles(numAdh)
);

CREATE TABLE informationsPersonnelles ( -- Table d'informations concernant les adhérents du club. Dépend de son numéro d'adhérent, lié au numéro d'utilisateur sur le site internet.
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

CREATE TABLE Commentaire ( -- Table des commentaires (affichés sous les différents articles trouvables sur le site internet). Dépend de son numéro de commentaire.
  numCom INT PRIMARY KEY NOT NULL,
  numUtilisateur INT NOT NULL,
  numArticle INT NOT NULL,
  numComSuivant INT,
  dateCom DATE,
  contenuCom TEXT,
  FOREIGN KEY(numUtilisateur) REFERENCES User(numUtilisateur),
  FOREIGN KEY(numArticle) REFERENCES Article(id),
  FOREIGN KEY(numComSuivant) REFERENCES Commentaire(numCom)
);

CREATE TABLE Article ( -- Table des articles (informations données par l'administrateur aux différents utilisateurs et visiteurs à travers le site internet). Dépend de son numéro d'article (id).
  id INT PRIMARY KEY NOT NULL,
  titre VARCHAR(255),
  date_time_publication DATETIME,
  date_time_edition DATETIME DEFAULT NULL,
  contenu TEXT
);

CREATE TABLE Media ( -- Table des médias (vidéo ou image) ajoutés aux articles ou aux commentaires. Dépend de son id qui est le même que celui de la table Article.
  id INT NOT NULL,
  nomMedia VARCHAR(255),
  type TEXT CHECK( type IN ('video', 'image') ),
  FOREIGN KEY(id) REFERENCES Article(id)
);
