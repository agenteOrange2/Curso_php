/*
    CONSULTA MULTITABLA:
    son consultas que sirve para consultar varias tablas en una sola sentencia
*/

/*Mostrar las entradas con el nombre del autor y el nombre de la categoria*/
/*Se le agrega un alias e, u ,c */

/*sacamae todas las columnas con sus alias*/
SELECT e.id, e.titulo, u.nombre AS 'Autor',  c.nombre AS 'Categoria'
/*de las tablas*/
FROM entradas e, usuarios u, categorias c
/*Cuando se cumpla el id del usuario de la entrada sea igual a id de la categoria cuando esa informacion coicida entonces mostrara la fila*/
WHERE e.usuario_id = u.id AND e.categoria_id = c.id;

/*INNER JOIN SIGNIFICA MEZCLA LAS TABLAS*/
/*INNER JOIN*/
SELECT e.id, e.titulo, u.nombre AS 'Autor', c.nombre AS 'Categoria'
FROM entradas e
INNER JOIN usuarios u ON e.usuario_id = u.id
INNER JOIN categorias c ON e.usuario_id = c.id;



/*LEFT JOIN*/
SELECT c.nombre, COUNT(e.id) FROM  categorias c 
LEFT JOIN entradas e ON e.categoria_id = c.id GROUP BY categoria_id; /*SU FUNCION ES MANTENER AL LADO IZQUIERDO LAS CATEGORIAS CON RELACION MIENTRAS QUE EN LA DERECHA EL CONTENIDO*/


/*RIGHT JOIN*/
SELECT c.nombre, COUNT(e.id) FROM  entradas e
RIGHT JOIN categorias c ON e.categoria_id = c.id GROUP BY categoria_id;



/*VISTAS MYSQL*/



/*Ejemplos*/


/*MOSTRAR EL NOMBRE DE LAS CATEGORIAS Y AL LADO CUANTAS ENTRADAS TIENEN*/
SELECT c.nombre, COUNT(e.id)FROM categorias c, entradas e
WHERE e.categoria_id = c.id GROUP BY e.categoria_id;

/*Quitando group by, cuenta todas las entradas que hay, no me lo agrupa en categorias*/
SELECT c.nombre, COUNT(e.id)FROM categorias c, entradas e
WHERE e.categoria_id = c.id;




/*Mostrar el email de los usuarios y al lado cuantas entradas tienen*/
SELECT u.email, COUNT(titulo) FROM usuarios u, entradas e
WHERE e.usuario_id = u.id GROUP BY e.usuario_id;


