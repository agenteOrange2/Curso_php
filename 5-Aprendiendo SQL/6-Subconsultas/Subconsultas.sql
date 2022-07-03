/*
SUBCONSULTAS
- Son consutlas que se ejecutan dentro de otras.
- Consiste en utilizar los resultados de las subconsulta para operar en la consulta principal
- Jugando con las claves ajenas / foraneas.
*/

/*INGRESAMOS UN NUEVO USUARIO*/
INSERT INTO usuarios VALUES(null, "Leslie", "Romero", "romero@fsociety.com", "fsociety", CURDATE());

/*PARA QUE SOLO ME SAQUE LOS USUARIOS QUE TIENEN ENTRADA */
/*Para ello se utiliza el operador in y dentro la siguiente subconsulta para especificar que solo quiero los usuarios con entradas registradas*/
SELECT * FROM usuarios WHERE id IN (SELECT usuario_id FROM entradas);


/*Sacando usuarios que no tienen entradas*/
SELECT * FROM usuarios WHERE id NOT IN (SELECT usuario_id FROM entradas);

/*SACAR LOS USUARIOS QUE TENGAN ALGUNA ENTRADA QUE EN SU TITULO HABLE DE GTA V*/

/*SE INSERTA*/
INSERT INTO entradas VALUES(NULL, 3, 1, "Guia de GTA Vice City", "GTA", CURDATE());

/*Se manda a llamar el usuario que habla de GTA*/
/*Significa, sacame el nombre y apellidos de usuario cuyo id exista en la tabla de entradas y ademas que en la tabla de entradas hayan hablado o que tenga le titulo de gta*/
SELECT nombre, apellidos FROM usuarios WHERE id IN(SELECT usuario_id FROM entradas WHERE titulo LIKE "%GTA%");


/*1.-Sacar todas las entradas de la categoria accion utilizando su nombre*/
SELECT titulo FROM entradas WHERE categoria_id 
    IN(SELECT id FROM categorias WHERE nombre = 'Accion');

    /*Sacando con un id*/
SELECT categoria_id, titulo FROM entradas WHERE categoria_id 
    IN(SELECT id FROM categorias WHERE nombre = 'Accion');


/*2.- Mostrar las categorias de 3 o mas entradas*/
SELECT * FROM categorias WHERE
    ID IN (SELECT categoria_id FROM entradas GROUP BY categoria_id HAVING COUNT(categoria_id) >=3);


/*3.- Mostrar los usuarios que crearon una entrada un martes*/
SELECT * FROM usuarios WHERE id IN (SELECT usuario_id FROM entradas WHERE DAYOFWEEK(FECHA)=7);




/*4.- Mostrar el nombre de el usuario que tenga mas entradas*/

/*se ordena de mayor a menor */
SELECT usuario_id, COUNT(id) FROM entradas GROUP BY usuario_id ORDER BY COUNT(id);

/*se ordena de forma descendente*/
SELECT usuario_id, COUNT(id) FROM entradas GROUP BY usuario_id ORDER BY COUNT(id) DESC;

/*para solo marcar uno*/
SELECT usuario_id, COUNT(id) FROM entradas GROUP BY usuario_id ORDER BY COUNT(id) DESC LIMIT 1;

/*Esta serial a subconsulta*/
SELECT usuario_id FROM entradas GROUP BY usuario_id ORDER BY COUNT(id) DESC LIMIT 1;


/*FINAL*/
SELECT nombre FROM usuarios WHERE id =
    (SELECT usuario_id FROM entradas GROUP BY usuario_id ORDER BY COUNT(id) DESC LIMIT 1);

/*CON un alias*/
SELECT CONCAT(nombre,' ', apellidos) AS 'El usuario con mas entradas' FROM usuarios WHERE id =
    (SELECT usuario_id FROM entradas GROUP BY usuario_id ORDER BY COUNT(id) DESC LIMIT 1);


/*Mostrar las categorias sin entradas*/
SELECT * FROM categorias WHERE id 
    NOT IN (SELECT categoria_id FROM entradas);