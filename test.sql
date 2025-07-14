CREATE TABLE membre (
    id_membre INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(255),
    date_de_naissance DATE,
    genre CHAR,
    mail VARCHAR(255),
    ville VARCHAR(255),
    mdp VARCHAR(255),
    image_profile VARCHAR(255)
);

CREATE TABLE categorie_objet (
    id_categorie INT AUTO_INCREMENT PRIMARY KEY,
    nom_categorie VARCHAR(255)
);

CREATE TABLE objet(
    id_objet INT AUTO_INCREMENT PRIMARY KEY,
    nom_objet VARCHAR(255),
    id_categorie INT,
    id_membre INT
);

CREATE TABLE images_objet(
    id_image INT AUTO_INCREMENT PRIMARY KEY,
    id_objet INT,
    nom_image VARCHAR(255)
);

CREATE TABLE emprunt(
    id_emprunt INT AUTO_INCREMENT PRIMARY KEY,
    id_objet INT,
    id_membre INT,
    date_emprunt DATE,
    date_retour DATE
);

ALTER TABLE objet
ADD CONSTRAINT fk_objet_categorie
FOREIGN KEY (id_categorie) REFERENCES categorie_objet(id_categorie);

ALTER TABLE objet
ADD CONSTRAINT fk_objet_membre
FOREIGN KEY (id_membre) REFERENCES membre(id_membre);

ALTER TABLE images_objet
ADD CONSTRAINT fk_images_objet_objet
FOREIGN KEY (id_objet) REFERENCES objet(id_objet);

ALTER TABLE emprunt
ADD CONSTRAINT fk_emprunt_objet
FOREIGN KEY (id_objet) REFERENCES objet(id_objet);

ALTER TABLE emprunt
ADD CONSTRAINT fk_emprunt_membre
FOREIGN KEY (id_membre) REFERENCES membre(id_membre);

INSERT INTO membre(nom, date_de_naissance, genre, mail, ville, mdp, image_profile) 
VALUES("Anna", '2002-10-9', 'F', 'anna@gmail.com', 'Antananarivo', 'anna123', 'anna.png');

INSERT INTO membre(nom, date_de_naissance, genre, mail, ville, mdp, image_profile) 
VALUES("Bob", '2002-2-18', 'M', 'bob@gmail.com', 'Antananarivo', 'bob123', 'bob.png');


INSERT INTO membre(nom, date_de_naissance, genre, mail, ville, mdp, image_profile) 
VALUES("Charlie", '2002-11-2', 'M', 'charlie@gmail.com', 'Antananarivo', 'charlie123', 'charlie.png');


INSERT INTO membre(nom, date_de_naissance, genre, mail, ville, mdp, image_profile) 
VALUES("David", '2002-5-11', 'M', 'david@gmail.com', 'Antananarivo', 'david123', 'david.png');

INSERT INTO categorie_objet(nom_categorie) VALUES("esthetique");
INSERT INTO categorie_objet(nom_categorie) VALUES("bricolage");
INSERT INTO categorie_objet(nom_categorie) VALUES("mecanique");
INSERT INTO categorie_objet(nom_categorie) VALUES("cuisine");

INSERT INTO objet(nom_objet, id_categorie, id_membre) VALUES('mirroir', 1, 1);
INSERT INTO objet(nom_objet, id_categorie, id_membre) VALUES('spatule', 1, 1);
INSERT INTO objet(nom_objet, id_categorie, id_membre) VALUES('marteau', 2, 1);
INSERT INTO objet(nom_objet, id_categorie, id_membre) VALUES('clou', 2, 1);
INSERT INTO objet(nom_objet, id_categorie, id_membre) VALUES('tournevis', 2, 1);
INSERT INTO objet(nom_objet, id_categorie, id_membre) VALUES('cle plate', 3, 1);
INSERT INTO objet(nom_objet, id_categorie, id_membre) VALUES('cric', 3, 1);
INSERT INTO objet(nom_objet, id_categorie, id_membre) VALUES('couteau', 4, 1);
INSERT INTO objet(nom_objet, id_categorie, id_membre) VALUES('poel', 4, 1);
INSERT INTO objet(nom_objet, id_categorie, id_membre) VALUES('casserole', 4, 1);

INSERT INTO objet(nom_objet, id_categorie, id_membre) VALUES('pince', 1, 2);
INSERT INTO objet(nom_objet, id_categorie, id_membre) VALUES('lampe', 1, 2);
INSERT INTO objet(nom_objet, id_categorie, id_membre) VALUES('viseuse', 2, 2);
INSERT INTO objet(nom_objet, id_categorie, id_membre) VALUES('perceuse', 2, 2);
INSERT INTO objet(nom_objet, id_categorie, id_membre) VALUES('scie', 2, 2);
INSERT INTO objet(nom_objet, id_categorie, id_membre) VALUES('compresseur air', 3, 2);
INSERT INTO objet(nom_objet, id_categorie, id_membre) VALUES('poulies', 3, 2);
INSERT INTO objet(nom_objet, id_categorie, id_membre) VALUES('planche a decouper', 4, 2);
INSERT INTO objet(nom_objet, id_categorie, id_membre) VALUES('cuillere', 4, 2);
INSERT INTO objet(nom_objet, id_categorie, id_membre) VALUES('spatule', 4, 2);

INSERT INTO objet(nom_objet, id_categorie, id_membre) VALUES('brosse', 1, 3);
INSERT INTO objet(nom_objet, id_categorie, id_membre) VALUES('lime a ongle', 1, 3);
INSERT INTO objet(nom_objet, id_categorie, id_membre) VALUES('metre ruban', 2, 3);
INSERT INTO objet(nom_objet, id_categorie, id_membre) VALUES('cutter', 2, 3);
INSERT INTO objet(nom_objet, id_categorie, id_membre) VALUES('pince', 2, 3);
INSERT INTO objet(nom_objet, id_categorie, id_membre) VALUES('tournevis atelier', 3, 3);
INSERT INTO objet(nom_objet, id_categorie, id_membre) VALUES('pied a coulisse', 3, 3);
INSERT INTO objet(nom_objet, id_categorie, id_membre) VALUES('mixeur', 4, 3);
INSERT INTO objet(nom_objet, id_categorie, id_membre) VALUES('fourchette', 4, 3);
INSERT INTO objet(nom_objet, id_categorie, id_membre) VALUES('fouet', 4, 3);

INSERT INTO objet(nom_objet, id_categorie, id_membre) VALUES('cireuse', 1, 4);
INSERT INTO objet(nom_objet, id_categorie, id_membre) VALUES('diffuseur', 1, 4);
INSERT INTO objet(nom_objet, id_categorie, id_membre) VALUES('papier de verre', 2, 4);
INSERT INTO objet(nom_objet, id_categorie, id_membre) VALUES('cle a mollette', 2, 4);
INSERT INTO objet(nom_objet, id_categorie, id_membre) VALUES('lime metallique', 3, 4);
INSERT INTO objet(nom_objet, id_categorie, id_membre) VALUES('cle Allen', 3, 4);
INSERT INTO objet(nom_objet, id_categorie, id_membre) VALUES('passoire', 4, 4);
INSERT INTO objet(nom_objet, id_categorie, id_membre) VALUES('rape', 4, 4);
INSERT INTO objet(nom_objet, id_categorie, id_membre) VALUES('balance de cuisine', 4, 4);
INSERT INTO objet(nom_objet, id_categorie, id_membre) VALUES('tupperware', 4, 4);

INSERT INTO emprunt(id_objet, id_membre, date_emprunt, date_retour) VALUES(1, 2, '2025-07-13', '2025-07-14');
INSERT INTO emprunt(id_objet, id_membre, date_emprunt, date_retour) VALUES(12, 1, '2025-07-13', '2025-07-14');
INSERT INTO emprunt(id_objet, id_membre, date_emprunt, date_retour) VALUES(23, 2, '2025-07-13', '2025-07-14');
INSERT INTO emprunt(id_objet, id_membre, date_emprunt, date_retour) VALUES(34, 3, '2025-07-13', '2025-07-14');
INSERT INTO emprunt(id_objet, id_membre, date_emprunt, date_retour) VALUES(2, 4, '2025-07-13', '2025-07-14');
INSERT INTO emprunt(id_objet, id_membre, date_emprunt, date_retour) VALUES(13, 1, '2025-07-13', '2025-07-14');
INSERT INTO emprunt(id_objet, id_membre, date_emprunt, date_retour) VALUES(24, 2, '2025-07-13', '2025-07-14');
INSERT INTO emprunt(id_objet, id_membre, date_emprunt, date_retour) VALUES(35, 3, '2025-07-13', '2025-07-14');
INSERT INTO emprunt(id_objet, id_membre, date_emprunt, date_retour) VALUES(3, 4, '2025-07-13', '2025-07-14');
INSERT INTO emprunt(id_objet, id_membre, date_emprunt, date_retour) VALUES(14, 1, '2025-07-13', '2025-07-14');

CREATE OR REPLACE view v_obj_img as
SELECT o.id_objet, o.nom_objet, o.id_categorie, img.id_image, img.nom_image FROM objet as o join images_objet as img on o.id_objet=img.id_objet;

INSERT INTO images_objet(id_objet, nom_image) VALUES(1, 'mirroir.jpeg');
INSERT INTO images_objet(id_objet, nom_image) VALUES(2, 'spatule.jpeg');
INSERT INTO images_objet(id_objet, nom_image) VALUES(3, 'marteau.jpeg');
INSERT INTO images_objet(id_objet, nom_image) VALUES(4, 'clou.jpeg');
INSERT INTO images_objet(id_objet, nom_image) VALUES(5, 'tournevis.jpeg');
INSERT INTO images_objet(id_objet, nom_image) VALUES(6, 'cle plate.jpeg');
INSERT INTO images_objet(id_objet, nom_image) VALUES(7, 'cric.jpeg');
INSERT INTO images_objet(id_objet, nom_image) VALUES(8, 'couteau.jpeg');
INSERT INTO images_objet(id_objet, nom_image) VALUES(9, 'poel.jpeg');
INSERT INTO images_objet(id_objet, nom_image) VALUES(10, 'casserole.jpeg');

INSERT INTO images_objet(id_objet, nom_image) VALUES(11, 'pince.jpeg');
INSERT INTO images_objet(id_objet, nom_image) VALUES(12, 'lampe.jpeg');
INSERT INTO images_objet(id_objet, nom_image) VALUES(13, 'viseuse.jpeg');
INSERT INTO images_objet(id_objet, nom_image) VALUES(14, 'perceuse.jpeg');
INSERT INTO images_objet(id_objet, nom_image) VALUES(15, 'scie.jpeg');
INSERT INTO images_objet(id_objet, nom_image) VALUES(16, 'compresseur air.jpeg');
INSERT INTO images_objet(id_objet, nom_image) VALUES(17, 'poulies.jpeg');
INSERT INTO images_objet(id_objet, nom_image) VALUES(18, 'planche a decouper.jpeg');
INSERT INTO images_objet(id_objet, nom_image) VALUES(19, 'cuillere.jpeg');
INSERT INTO images_objet(id_objet, nom_image) VALUES(20, 'spatule.jpeg');

INSERT INTO images_objet(id_objet, nom_image) VALUES(21, 'brosse.jpeg');
INSERT INTO images_objet(id_objet, nom_image) VALUES(22, 'lime a ongle.jpeg');
INSERT INTO images_objet(id_objet, nom_image) VALUES(23, 'metre ruban.jpeg');
INSERT INTO images_objet(id_objet, nom_image) VALUES(24, 'cutter.jpeg');
INSERT INTO images_objet(id_objet, nom_image) VALUES(25, 'pince.jpeg');
INSERT INTO images_objet(id_objet, nom_image) VALUES(26, 'tournevis atelier.jpeg');
INSERT INTO images_objet(id_objet, nom_image) VALUES(27, 'pied a coulisse.jpeg');
INSERT INTO images_objet(id_objet, nom_image) VALUES(28, 'mixeur.jpeg');
INSERT INTO images_objet(id_objet, nom_image) VALUES(29, 'fourchette.jpeg');
INSERT INTO images_objet(id_objet, nom_image) VALUES(30, 'fouet.jpeg');

INSERT INTO images_objet(id_objet, nom_image) VALUES(31, 'cireuse.jpeg');
INSERT INTO images_objet(id_objet, nom_image) VALUES(32, 'diffuseur.jpeg');
INSERT INTO images_objet(id_objet, nom_image) VALUES(33, 'papier de verre.jpeg');
INSERT INTO images_objet(id_objet, nom_image) VALUES(34, 'cle a mollette.jpeg');
INSERT INTO images_objet(id_objet, nom_image) VALUES(35, 'lime metallique.jpeg');
INSERT INTO images_objet(id_objet, nom_image) VALUES(36, 'cle Allen.jpeg');
INSERT INTO images_objet(id_objet, nom_image) VALUES(37, 'passoire.jpeg');
INSERT INTO images_objet(id_objet, nom_image) VALUES(38, 'rape.jpeg');
INSERT INTO images_objet(id_objet, nom_image) VALUES(39, 'balance de cuisine.jpeg');
INSERT INTO images_objet(id_objet, nom_image) VALUES(40, 'tupperware.jpeg');

CREATE OR REPLACE view v_emp_obj_memb as
SELECT o.id_objet, o.nom_objet, o.id_image, o.nom_image, m.id_membre, m.nom, e.date_emprunt, e.date_retour, e.etat 
from emprunt as e join v_obj_img as o on o.id_objet=e.id_objet join membre as m on e.id_membre=m.id_membre;

ALTER TABLE emprunt
ADD COLUMN etat VARCHAR(255);
