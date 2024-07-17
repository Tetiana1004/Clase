CREATE DATABASE academia1;
USE academia1;
CREATE table userdatos(
    nombre VARCHAR(20),
    apellido VARCHAR(20),
    DNI VARCHAR(20),
    calificacion VARCHAR(20)
)

CREATE table notas(
    nombre VARCHAR(30),
    identificacion VARCHAR(15),
    calificacion VARCHAR(15)
)

SELECT * FROM notas