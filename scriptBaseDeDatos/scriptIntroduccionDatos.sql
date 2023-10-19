-- Usar la base de datos
USE competicion;
ALTER TABLE equipos AUTO_INCREMENT = 1;
ALTER TABLE partidos AUTO_INCREMENT = 1;

-- Insertar equipos
INSERT INTO Equipos (nombre, estadio) VALUES ('Equipo A', 'Estadio A');
INSERT INTO Equipos (nombre, estadio) VALUES ('Equipo B', 'Estadio B');
INSERT INTO Equipos (nombre, estadio) VALUES ('Equipo C', 'Estadio C');

-- Insertar partidos
INSERT INTO Partidos (equipo1_id, equipo2_id, resultado) VALUES (1, 2, '1');
INSERT INTO Partidos (equipo1_id, equipo2_id, resultado) VALUES (2, 3, 'X');
INSERT INTO Partidos (equipo1_id, equipo2_id, resultado) VALUES (3, 1, '2');
