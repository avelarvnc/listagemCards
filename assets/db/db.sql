CREATE TABLE item
(
	idItem			INT PRIMARY KEY AUTO_INCREMENT,
    titulo			VARCHAR(100),
    descricao		VARCHAR(2000),
    caminho			VARCHAR(2000)
);

INSERT INTO item (titulo, descricao, caminho) 
VALUES 
	('Tomate','Tomate comum orgânico','/assets/upload/tomate.jpg'),
    ('Alho','Alho roxo orgânico','/assets/upload/alho.jpg'),
    ('Cebola','Cebola comum orgânico','/assets/upload/cebola.jpg');

DELIMITER //
CREATE PROCEDURE psItem ()
BEGIN
SELECT * FROM item;
END //
