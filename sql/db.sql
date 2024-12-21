CREATE TABLE Utilisateur(
UserID INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
nom VARCHAR(20),
email VARCHAR(20),
password_ VARCHAR(20),
role_ ENUM('avocat','client')
);




CREATE TABLE avocats(
AvocatID INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
UserID INT ,
experience INT,
Biographie VARCHAR(500),
Specialites ENUM('Droit arbitage','Droit de commercial','Droit de Rural','Droit de social','Droit des sociétés','Droit de pénale'),
FOREIGN KEY (UserID) REFERENCES Utilisateur(UserID)
);
CREATE TABLE Reservations(
ReservationID INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
clientID INT,
AvocatID INT,
Date_res DATETIME,
statu enum('En attente', 'Accepté', 'Rejeté'),
FOREIGN KEY (clientID) REFERENCES Utilisateur(UserID),
FOREIGN KEY (AvocatID) REFERENCES avocats(AvocatID)
);
CREATE TABLE Disponibilites(
DisponibilitesID INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
AvocatID INT,
Date_dis DATE,
FOREIGN KEY (AvocatID) REFERENCES avocats(AvocatID)
);

USE avocat;
ALTER TABLE avocats
ADD COLUMN image MEDIUMBLOB;

USE avocat;
ALTER TABLE utilisateur
DROP COLUMN role_;
USE avocat;
ALTER TABLE utilisateur MODIFY password_ VARCHAR(255);
ALTER TABLE avocats
ADD COLUMN full_name VARCHAR(20),
ADD COLUMN email VARCHAR(50);

ALTER TABLE avocats
ADD COLUMN password_av VARCHAR(200);

ALTER TABLE avocats CHANGE COLUMN image image_av MEDIUMBLOB;

ALTER TABLE avocats MODIFY COLUMN Specialites VARCHAR(200);

USE  avocat;
ALTER TABLE utilisateur ADD UNIQUE (email);
ALTER TABLE avocats ADD UNIQUE (email);

