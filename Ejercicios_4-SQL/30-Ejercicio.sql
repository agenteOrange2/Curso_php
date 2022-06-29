/*
Mostrar los datos del vendedor con mas antiguiedad en el concesionario
*/


SELECT * FROM vendedores ORDER BY fecha ASC LIMIT 1;



/* ejercicio extra
Obtener los coches con mas unidades vendidas
*/

SELECT * FROM coches WHERE id IN
(SELECT coche_id FROM encargos WHERE cantidad IN
(SELECT MAX(cantidad) FROM encargos));

