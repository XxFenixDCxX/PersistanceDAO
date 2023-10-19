-- Crear la base de datos
CREATE DATABASE competicion;

-- Usar la base de datos
USE competicion;

-- Crear la tabla de equipos
CREATE TABLE Equipos (
    id INT AUTO_INCREMENT,
    nombre VARCHAR(255) NOT NULL,
    estadio VARCHAR(255) NOT NULL,
    PRIMARY KEY (id)
);

-- Crear la tabla de partidos
CREATE TABLE Partidos (
    id INT AUTO_INCREMENT,
    equipo1_id INT,
    equipo2_id INT,
    resultado ENUM('1', 'X', '2'),
    PRIMARY KEY (id),
    FOREIGN KEY (equipo1_id) REFERENCES Equipos(id),
    FOREIGN KEY (equipo2_id) REFERENCES Equipos(id)
);