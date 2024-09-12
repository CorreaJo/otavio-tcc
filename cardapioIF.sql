CREATE DATABASE cardapioIF;

USE cardapioIF;

CREATE TABLE Usuario (
    id INT AUTO_INCREMENT PRIMARY KEY,
    prontuario VARCHAR(100) NOT NULL UNIQUE,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    senha VARCHAR(100) NOT NULL,
    biografia TEXT,
    restricoes TEXT
);

CREATE TABLE Alimento (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    tipo VARCHAR(50),
    descricao TEXT
);


CREATE TABLE Cardapio (
    id INT AUTO_INCREMENT PRIMARY KEY,
    alimento_id INT,
    FOREIGN KEY (alimento_id) REFERENCES Alimento(id)
);

CREATE TABLE Alergicos (
    usuario_id INT,
    alimento_id INT,
    FOREIGN KEY (usuario_id) REFERENCES Usuario(id),
    FOREIGN KEY (alimento_id) REFERENCES Alimento(id)
);
