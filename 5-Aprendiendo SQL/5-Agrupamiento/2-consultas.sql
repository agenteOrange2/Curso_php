/* CONSULTAS DE AGRUPAMIENTO*/
/*GROUP BY =  PERMITE AGRUPAR TODAS LAS FILAS QUE TENGA EN BASE A UNA COLUMNA*/
SELECT titulo FROM entradas GROUP BY categoria_id;

/* agregabdi nas secciones*/
SELECT COUNT(titulo) AS 'NUMERO DE ENTRADAS', categoria_id FROM entradas GROUP BY categoria_id; /**/

/*SI QUIERO HACER UNA CONDICION EN UNA CONSULA DE AGRUPAMIENTO*/
/*HAVING ES LO MISMO QUE WHERE PERO PARA CONSULTAS DE AGRUPAMIENTO*/
/*lo que muestra es que busca cual de las categorias tiene 3 o mas de 3 ebtradas*/
SELECT COUNT(titulo) AS 'NUMERO DE ENTRADAS', categoria_id FROM entradas GROUP BY categoria_id HAVING COUNT(titulo) >= 3;


/*
AVG     Sacar la media
COUNT   Contar el numero de elementos
MAX     Valor maximo del grupo
MIN     Valor minimo del grupo
SUM     Sumar todo el contenido del grupo
*/

/*IMAGINEMOS QUE SE QUIERE SACAR UNA MEDIA DE ENTRADAS*/
SELECT AVG(id) AS 'Media de entradas' FROM entradas;

/*MAX*/
/*Saca el maximo id y el titulo*/
SELECT MAX(id) AS 'MAXIMO ID', titulo FROM entradas;

/*MIN*/
SELECT MIN(id) AS 'MIN ID', titulo FROM entradas;

/**/
SELECT SUM(id) AS 'SUMA DE ID', titulo FROM entradas;
