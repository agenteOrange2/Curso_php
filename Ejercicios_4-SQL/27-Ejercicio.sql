/*
Visualizar los nombres de los clientes y la cantidad de encargos realizados, incluyendo
los que no hayan realizado encargos
*/

/**/Se 

INSERT INTO clientes VALUES(NULL, 5, 'Tienda de autopartes', 'Sonora', 0, CURDATE());

#Sacar todos los clientes#

SELECT c.nombre, COUNT(e.id) FROM clientes c
LEFT JOIN encargos e ON c.id = e.cliente_id
GROUP BY 1;