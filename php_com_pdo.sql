

CREATE DATABASE IF NOT EXISTS php_com_pdo;
USE php_com_pdo;


CREATE TABLE php_com_pdo.alunos(
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    nome VARCHAR(255) NOT NULL,
    nota INT NOT NULL,
    PRIMARY KEY(id)
);
 
INSERT INTO php_com_pdo.alunos(nome, nota) VALUES
('Beraldo', 5),
('João', 8),
('João Pedro', 7),
('Marcelo da Silva', 4),
('Miranda', 3),
('Guereiro', 2),
('Maria', 3),
('José', 5),
('Linus Torvalds', 8),
('Patricia', 6),
('Nina Martins', 10),
('Douglas dos Santos', 9),
('Mark Zuckerberg', 6),
('Steve Wozniak', 9),
('Evilin Dias', 7),
('Miro Dias', 9),
('Lucio Batista', 8),
('Alfeu Ginga', 2),
('Paulo Couto', 4),
('Lilico Davi', 7);

