USE Adam882094;

CREATE TABLE closet (
closetId INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(50) NOT NULL,
colour VARCHAR(50) NOT NULL);

ALTER TABLE closet AUTO_INCREMENT 10000;
INSERT INTO closet (name, colour, clothesType) VALUES ('Winter Jacket','Black', 'Coats');

DESC closet;

CREATE TABLE clothes
(clothesID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
closetType VARCHAR(50) NOT NULL);

ALTER TABLE closet
ADD COLUMN clothesID int;

INSERT INTO clothes (closetType) VALUES ('Shirt');
INSERT INTO clothes (closetType) VALUES ('Pants');
INSERT INTO clothes (closetType) VALUES ('Underwear');
INSERT INTO clothes (closetType) VALUES ('Socks');
INSERT INTO clothes (closetType) VALUES ('Hat');
INSERT INTO clothes (closetType) VALUES ('Coats');
DELETE FROM clothesID;
