/*
Visualizar el nombre y los apellidos de los vendedores en una misma columna y su fecha de registro y el dia de la smeana en la que se registraron
*/

SELECT CONCAT(nombre, ' ', apellidos) AS 'nombre y apellidos',
fecha, DAYNAME(fecha) FROM vendedores;