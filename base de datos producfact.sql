DROP DATABASE IF EXISTS tienda;
CREATE DATABASE tienda CHARACTER SET utf8mb4;
USE tienda;
				/*--------TABLA FABRICANTE-------*/
CREATE TABLE fabricante (
 codigo INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
 nombre VARCHAR(100) NOT NULL
);
				/*------------TABLA PRODUCTO-----------*/
CREATE TABLE producto (
 codigo INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
 nombre VARCHAR(100) NOT NULL,
 precio DOUBLE NOT NULL,
 codigo_fabricante INT UNSIGNED NOT NULL,
 FOREIGN KEY (codigo_fabricante) REFERENCES fabricante(codigo)
);
INSERT INTO fabricante VALUES(1, 'Asus');
INSERT INTO fabricante VALUES(2, 'Lenovo');
INSERT INTO fabricante VALUES(3, 'Hewlett-Packard');
INSERT INTO fabricante VALUES(4, 'Samsung');
INSERT INTO fabricante VALUES(5, 'Seagate');
INSERT INTO fabricante VALUES(6, 'Crucial');
INSERT INTO fabricante VALUES(7, 'Gigabyte');
INSERT INTO fabricante VALUES(8, 'Huawei');
INSERT INTO fabricante VALUES(9, 'Xiaomi');
INSERT INTO producto VALUES(1, 'Disco duro SATA3 1TB', 86.99, 5);
INSERT INTO producto VALUES(2, 'Memoria RAM DDR4 8GB', 120, 6);
INSERT INTO producto VALUES(3, 'Disco SSD 1 TB', 150.99, 4);
INSERT INTO producto VALUES(4, 'GeForce GTX 1050Ti', 185, 7);
INSERT INTO producto VALUES(5, 'GeForce GTX 1080 Xtreme', 755, 6);
INSERT INTO producto VALUES(6, 'Monitor 24 LED Full HD', 202, 1);
INSERT INTO producto VALUES(7, 'Monitor 27 LED Full HD', 245.99, 1);
INSERT INTO producto VALUES(8, 'Portátil Yoga 520', 559, 2);
INSERT INTO producto VALUES(9, 'Portátil Ideapd 320', 444, 2);
INSERT INTO producto VALUES(10, 'Impresora HP Deskjet 3720', 59.99, 3);
INSERT INTO producto VALUES(11, 'Impresora HP Laserjet Pro M26nw', 180, 3);

				/*---------------Mostrar tabla------------------------*/
SELECT *FROM producto;
SELECT*FROM fabricante;
			/*--------------------Consultas----------------------------*/
/*1. Lista el nombre de todos los productos que hay en la tabla producto.*/
SELECT nombre FROM producto;

/*2. Lista los nombres y los precios de todos los productos de la tabla producto.*/
SELECT nombre, precio FROM producto;

/*3. Lista todas las columnas de la tabla producto.*/
SELECT * FROM producto;

/*4. Lista el nombre de los productos, el precio en euros y el precio en dólares
estadounidenses (USD).*/
SELECT nombre, (precio/22.09), (precio/19.54) FROM producto;

/*5. Lista el nombre de los productos, el precio en euros y el precio en dólares
estadounidenses (USD). Utiliza los siguientes alias para las columnas: nombre de
producto, euros, dólares.*/
SELECT nombre AS nombre_producto, (precio*1.06) AS Euros, precio AS Dólares FROM producto;

/*6. Lista los nombres y los precios de todos los productos de la tabla producto,
convirtiendo los nombres a mayúscula.*/
SELECT ucase(nombre), precio FROM producto;

/*7. Lista los nombres y los precios de todos los productos de la tabla producto,
convirtiendo los nombres a minúscula.*/
SELECT lcase(nombre), precio FROM producto;

/*8. Lista el nombre de todos los fabricantes en una columna, y en otra columna
obtenga en mayúsculas los dos primeros caracteres del nombre del fabricante.*/
SELECT nombre, UPPER(SUBSTRING(nombre, 1, 2)) AS Iniciales FROM fabricante;

/*Sustituir el código de fabricante por el nombre del mismo:*/
SELECT producto.nombre, producto.precio, fabricante.nombre AS Fabricante FROM producto
INNER JOIN fabricante ON producto.codigo_fabricante = fabricante.codigo;

/*Agregar el precio en euros y dólares:*/
SELECT producto.nombre, producto.precio*1.06 AS Euros, producto.precio AS Dólares, fabricante.nombre AS Fabricante FROM producto
INNER JOIN fabricante ON producto.codigo_fabricante = fabricante.codigo;

/*Mostrar aquellos con fabricante Asus:*/
SELECT producto.nombre, producto.precio*1.06 AS Euros, producto.precio AS Dólares, fabricante.nombre AS Fabricante FROM producto
INNER JOIN fabricante ON producto.codigo_fabricante = fabricante.codigo
WHERE fabricante.nombre LIKE "Asus";

/*Mostrar aquellos que sean mayores de 185 dólares de mayor a menor:*/
SELECT producto.nombre, producto.precio*1.06 AS Euros, producto.precio AS Dólares, fabricante.nombre AS Fabricante FROM producto
INNER JOIN fabricante ON producto.codigo_fabricante = fabricante.codigo
WHERE producto.precio >= 185
ORDER BY precio asc;
set SQL_SAFE_UPDATES = 0;
/*---------eliminar---------*/
delete from fabricante
where nombre = "pablo";
/*-------------------------nueva tabla-------------*/
CREATE TABLE usuario (
 Nombre varchar(10),
 Apellido_Pa varchar(10),
 Apellido_Ma varchar(10),
 Telefono int,
 Correo varchar (10),
 Usuario varchar (30),
 Contraseña varchar (10)
);
DELETE TABLE usuario;
SELECT * FROM usuario;

