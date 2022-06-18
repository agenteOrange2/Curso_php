/*Consulta con una condicion*/
/*
Glosario:\

OPERADORES DE COMPARACION
igual           =
Distinto        !=
Menpr           <
Mayor           >
Menor o igual   <=
Mayor o igual   =>
Entre           between A and B
En              in
Es nulo         is null
no nulo         is not null
como            like
no es como      not like


OPERADORES LOGICOS:
O               OR
Y               AND
NO              NOT



COMODINES:
cualquier cantidad de caracteres:   %
Un caracter desconocido:            _
*/
                                /*Operadores de comparacion que es igual a ===*/
SELECT * FROM usuarios WHERE email = 'Wellick@evilcorp.com';

/*Ejemplos */
/*1.- Mostrar Nombre y apellidos de todos los usuarios registrados en 2022*/
SELECT nombre, apellidos FROM usuarios WHERE YEAR(fecha) = 2022;

/*2.- Mostrar Nombre y apellidos de todos los usuarios que no se  registrados en 2022*/
SELECT nombre, apellidos FROM usuarios WHERE YEAR(fecha) != 2022;

/*2.-Alternativo- Mostrar Nombre y apellidos de todos los usuarios que no se  registrados en 2022 o su fecha es distinta a 2022*/
SELECT nombre, apellidos FROM usuarios WHERE YEAR(fecha) != 2022 OR ISNULL(fecha);


/*3.- Mostrar el email de los usuariso cuyo apellidos contenga la letra A y que su contrasena sea 1234 */
SELECT email FROM usuarios WHERE apellidos LIKE '%a%' AND password = 'fsociety';

/*Si quiero sacar el apellido alderson = son*/

SELECT email FROM usuarios WHERE apellidos LIKE '%son%' AND password = 'fsociety';

/*4.-Sacar todos los registros de la tabla usuarios cuyo año sea PAR*/

SELECT * FROM usuarios Where (YEAR(fecha)%2 =0);

/*4.-Sacar todos los registros de la tabla usuarios cuyo año sea IMPAR*/

SELECT * FROM usuarios Where (YEAR(fecha)%2 != 0);

/*5.- sacar todos los registros de la tabla usuarios cuyo nombre tenga mas de 5 letras y que se hayan registrado antes de 2022, y mostrar el nombre en mayusculas*/

SELECT UPPER(nombre), apellidos FROM usuarios WHERE (LENGTH(nombre) > 5) AND YEAR(FECHA) < 2023;

/*cOLOCANDO UN ALIAS*/

SELECT UPPER(nombre) AS 'Nombre', apellidos FROM usuarios WHERE (LENGTH(nombre) > 5) AND YEAR(FECHA) < 2023;

/*ORDER BY para ordernar*/

SELECT * FROM usuarios ORDER BY id; /*por id*/

/*ORDERAR DE FORMA ASCENDENTE*/
SELECT * FROM usuarios ORDER BY ASC;

/*PRDERNAR DE FORMA DESCENTENDE*/
SELECT * FROM usuarios ORDER BY DESC;


/*ORDERNAR POR OTRO TIPO DE CAMPO*/

SELECT * FROM usuarios ORDER BY fecha ASC; /*De forma scendente*/


/*LIMIT*/

SELECT * FROM usuarios LIMIT 3; /*limita la cantidad que muestra*/

/*PARA INDICARLE QUE SOLO SAQUE EL 1 Y EL 2*/

SELECT * FROM usuarios LIMIT 0,2; /*DEL 0 AL 2*/


SELECT * FROM usuarios LIMIT 0,2; /*DEL 0 AL 4*/

