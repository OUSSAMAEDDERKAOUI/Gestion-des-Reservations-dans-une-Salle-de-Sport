--Création de la base de données et ses tables.
CREATE DATABASE gestion_salle_sport;
USE gestion_salle_sport;

-- -------------------------- creation des tables --------------------------------
CREATE TABLE membres (
    ID_Membre INT AUTO_INCREMENT PRIMARY KEY,
    Nom VARCHAR(50) NOT NULL,
    Prenom VARCHAR(50) NOT NULL,
    Email VARCHAR(100) NOT NULL,
    Telephone VARCHAR(15)
);

CREATE TABLE activites (
    ID_Activite INT AUTO_INCREMENT PRIMARY KEY,
    Nom_Activite VARCHAR(100) NOT NULL,
    Description TEXT NOT NULL,
    Capacite INT NOT NULL,
    date_debut DATE NOT NULL,
    date_fin DATE NOT NULL,
    Disponibilite TINYINT(1) 
);

CREATE TABLE reservation (
    ID_Resrvation INT AUTO_INCREMENT PRIMARY KEY,
    ID_Membre INT,
    ID_Activite INT,
    Date_Reservation DATETIME NOT NULL,
    Statut ENUM('confirmée', 'annulée'),
    FOREIGN KEY (ID_Membre) REFERENCES membres (ID_Membre),
    FOREIGN KEY (ID_Activite) REFERENCES activites (ID_Activite)
);

-- Insertion des membres---------------------------------------------------
INSERT INTO membres (Nom, Prenom, Email, Telephone)
VALUES 
    ('oussama', 'edderkaoui', 'oussama@gmail.com', '0654174604'),
    ('mohamed ali', 'kley', 'mohamed@gmail.com', '0656876543'),
    ('abdelhafid', 'ait el mokhtar', 'hafid@gmail.com', '0690765443'),
    ('oussama', 'amou', 'amou@gmail.com', '0678897543');

INSERT INTO membres (ID_Membre, Nom, Prenom, Email, Telephone)
VALUES 
    (21, 'ahmed', 'benkrara', 'ahmed_12@gmail.com', '0656547865'),
    (34, 'hicham', 'oubaha', 'hicham_12@gmail.com', '0656547865'),
    (94, 'achraf', 'hakimi', 'achraf_12@gmail.com', '0656547865');

-- Insertion des activités-------------------------------------------------------
INSERT INTO activites (Nom_Activite, Description, Capacite, date_debut, date_fin, Disponibilite)
VALUES 
    ('Cours de yoga', 'Séance de méditation et de relaxation qui améliore la flexibilité et la concentration.', 15, '2024-12-15', '2024-12-30', 1),
    ('Zumba', 'Cours de danse basé sur la musique latine qui mélange fitness et amusement.', 10, '2024-12-18', '2024-12-25', 1),
    ('Natation', 'Accès à la piscine pour nager avec des créneaux horaires spécifiés pour les membres.', 5, '2024-12-15', '2024-12-23', 1),
    ('Cours de Pilates', 'Cours de renforcement musculaire doux qui met l accent sur la flexibilité, le tonus et l équilibre.', 1, '2024-12-15', '2024-12-20', 1);

-- Insertion des réservations---------------------------------------------------------------------------
INSERT INTO reservation (ID_Membre, ID_Activite, Date_Reservation, Statut)
VALUES 
    (1, 2, CURRENT_DATE, 'annulée'),
    (2, 3, CURRENT_DATE, 'annulée'),
    (3, 1, CURRENT_DATE, 'confirmée'),
    (1, 3, CURRENT_DATE, 'annulée');

-- Mise à jour des réservations------------------------------------------------------------------------------
UPDATE reservation 
SET Statut = 'confirmée' 
WHERE ID_Resrvation IN (1, 2, 3);

UPDATE membres 
SET Nom = 'ahmed' 
WHERE Nom = 'mohamed ali';

UPDATE reservation 
SET Statut = 'confirmée' 
WHERE ID_Activite = 1;

UPDATE reservation 
SET Date_Reservation = '2024-12-12' 
WHERE Statut = 'annulée';

-- Sélections--------------------------------------------------------------
SELECT * FROM membres WHERE Email = 'nom@gmail.com';

-- Suppressions------------------------------------------------------------------------------
DELETE FROM membres WHERE Nom = 'nom1';
DELETE FROM membres WHERE Email = 'nom@gmail.com';

-- Requêtes JOIN------------------------------------------------------------------------------------
SELECT Nom_Activite, Statut 
FROM activites 
JOIN reservation ON activites.ID_Activite = reservation.ID_Activite;

SELECT Nom_Activite, Statut
FROM activites 
JOIN reservation ON activites.ID_Activite = reservation.ID_Activite
WHERE reservation.Statut = 'annulée';

SELECT * 
FROM membres 
LEFT JOIN reservation ON reservation.ID_Membre = membres.ID_Membre;

SELECT * 
FROM membres 
RIGHT JOIN reservation ON reservation.ID_Membre = membres.ID_Membre
WHERE reservation.Statut = 'annulée';