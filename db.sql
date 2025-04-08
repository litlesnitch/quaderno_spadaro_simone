CREATE DATABASE IF NOT EXISTS spadaro_simone_quaderno_informatica;
USE spadaro_simone_quaderno_informatica;

CREATE TABLE utenti (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50),
    password VARCHAR(50)
);

INSERT INTO utenti (username, password) VALUES ('admin', '1234');

CREATE TABLE film (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titolo VARCHAR(100),
    genere VARCHAR(50)
);

INSERT INTO film (titolo, genere) VALUES 
('Matrix', 'Fantascienza'),
('Il Padrino', 'Drammatico'),
('Toy Story', 'Animazione');

CREATE TABLE campi (
    id INT AUTO_INCREMENT PRIMARY KEY,
    sport VARCHAR(50),
    disponibile VARCHAR(10)
);

INSERT INTO campi (sport, disponibile) VALUES
('Calcio', 'Sì'),
('Tennis', 'No'),
('Pallavolo', 'Sì');
