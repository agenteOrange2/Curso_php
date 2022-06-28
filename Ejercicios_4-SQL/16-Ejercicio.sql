/*
Obtener listado de clientes atendidos por el vendedor  Daniel Mares
*/

SELECT * FROM clientes WHERE vendedor_id IN
(SELECT id FROM vendedores WHERE nombre = 'Daniel' AND apellidos='Mares' );