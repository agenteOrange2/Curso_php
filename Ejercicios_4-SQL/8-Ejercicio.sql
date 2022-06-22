/*
Visualizar todos los coches en cuyo marca exista la letra "a" y que cuyo modelo empiece por f
*/

SELECT * FROM coches WHERE marca LIKE '%a%' AND modelo LIKE 'F%';


SELECT * FROM coches WHERE marca LIKE '%a%' OR modelo LIKE 'F%';