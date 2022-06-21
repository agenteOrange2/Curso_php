/*
Vistas:
:as podemos definir como una consta almacenada en la base de datos que se utilizan como una tabla virtual.

No se almacena datos sino que utiliza asociaciones y los datos originales de las tablas, de forma que siempre se mantienen actualizadas
*/

/*Para hacer una vista se usa la sentencia CREATE VIEW*/
CREATE VIEW entradas_con_nombres AS 
SELECT e.id, e.titulo, u.nombre AS 'Autor', c.nombre AS 'Categoria'
FROM entradas e
INNER JOIN usuarios u ON e.usuario_id = u.id
INNER JOIN categorias c ON e.usuario_id = c.id;


/*borrar vista*/