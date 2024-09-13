CREATE DATABASE cardapioIF;

USE cardapioIF;

CREATE TABLE Usuario (
    id INT AUTO_INCREMENT PRIMARY KEY,
    prontuario VARCHAR(100) NOT NULL UNIQUE,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    senha VARCHAR(100) NOT NULL
);

CREATE TABLE Alimento (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    tipo VARCHAR(50)
);

CREATE TABLE Cardapio_Alimento (
    id_alimento INT,
    id_cardapio INT,
    PRIMARY KEY (id_alimento, id_cardapio),
    FOREIGN KEY (id_alimento) REFERENCES Alimento(id),
    FOREIGN KEY (id_cardapio) REFERENCES Cardapio(id)
);

CREATE TABLE Cardapio_Alergico (
    id_alergico INT,
    id_cardapio INT,
    PRIMARY KEY (id_alergico, id_cardapio),
    FOREIGN KEY (id_alergico) REFERENCES Alergicos(id),
    FOREIGN KEY (id_cardapio) REFERENCES Cardapio(id)
);


CREATE TABLE Cardapio (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL
);

CREATE TABLE Alergicos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL
);
