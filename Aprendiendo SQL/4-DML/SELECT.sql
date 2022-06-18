/*Mostrar TODOS LOS REGISTROS / FILAS DE UNA TABLA#
sacamos todas filas con los campos email, nombre apellidos de la tabla usuarios de la tabla que quiero utilizar*/

SELECT email, nombre, apellidos FROM usuarios;

#MOSTRAR TODOS LOS CAMPOS#
SELECT * FROM usuarios;


#OPERADORES ARITMETICOS#
SELECT email, (4+7) AS 'OPERACION' FROM usuarios;


#FUNCIONES MATIMATICAS#

SELECT ABS(7,34) AS 'OPERACION' FROM usuarios; /*Saca valor absoluto*/


SELECT CEIL(7,34) AS 'OPERACION' FROM usuarios;  /**Permite redondear*/

SELECT FLOR(7,34) AS 'OPERACION' FROM usuarios;  /*Redondeo bajo*/


SELECT PI(7,34) AS 'OPERACION' FROM usuarios;  /*Sacar Pi*/

SELECT ROUND(7,34 , 1) AS 'OPERACION' FROM usuarios;  /*numero aleatorio*/


/*Funciones para textos*/
SELECT nombre FROM usuarios;  /*Redondeo bajo*/

SELECT UPPER (nombre) FROM usuarios;  /*Textos en mayusucula*/

SELECT LOWER (nombre) FROM usuarios;  /*Textos en mayusucula*/

/*PARA CONCATENAR*/
SELECT CONCAT (nombre, '', apellidos) FROM usuarios;

/*para poner nombre a la columna*/
SELECT CONCAT (nombre, '', apellidos) AS 'CONVERSION' FROM usuarios;

/*SE puede meter una invocacion dentro de otra*/
SELECT UPPER(CONCAT (nombre, '', apellidos)) AS 'CONVERSION' FROM usuarios;

/*PERMITE LA LONGITUD DE CARATERES*/

SELECT LENGHT(CONCAT (nombre, '', apellidos)) AS 'CONVERSION' FROM usuarios;
/*MOSTRAR EMAIL CADA QUE RECORRA LA TABLA*/
SELECT email LENGHT(CONCAT (nombre, '', apellidos)) AS 'CONVERSION' FROM usuarios;

/*PARA LIIMPIAR LOS ESPACIOS SE UTILIZA TRIM*/

SELECT TRIM(CONCAT (nombre, '        ', apellidos,'         ')) AS 'CONVERSION' FROM usuarios;


/*FUNCIONES PARA FECHTAS*/
SELECT fecha FROM usuarios;

/*Mostrar la fecha actual*/
SELECT email, fecha, CURDATE() FROM usuarios;

/*Con alias*/
SELECT email, fecha, CURDATE() AS 'Fecha actual' FROM usuarios;

/* Muestra los dias*/
SELECT email, DATEDIFF (CURDATE() AS 'Fecha actual') FROM usuarios;

/*MOSTRAR EL NOMBRE DEL DIA*/

SELECT email, DAYNAME (fecha) AS 'Fecha actual' FROM usuarios;

/*muestra el día del mes*/
SELECT email, DAYOFMONTH (fecha) AS 'Fecha actual' FROM usuarios;

/*MUESTRA EL DÍA DE LA SEMANA*/
SELECT email, DAYOFWEEK (fecha) AS 'Fecha actual' FROM usuarios;


/*MUESTRA EL DIA DEL AÑO*/
SELECT email, DAYOFYEAR (fecha) AS 'Fecha actual' FROM usuarios;

/*MUESTRA MES DEL AÑO DE ESA FECHA */
SELECT email, MONTH(fecha) AS 'Fecha actual' FROM usuarios;

/*AÑO QUE PERTENECE ESA FECHA*/
SELECT email, YEAR(fecha) AS 'Fecha actual' FROM usuarios;

/*DIA/ HORA*/

SELECT email, DAY(fecha) AS 'Fecha actual' FROM usuarios;

SELECT email, HOUR(fecha) AS 'Fecha actual' FROM usuarios;

/*MUESTRA HORA ACTUAL*/
SELECT email, CURTIME() AS 'Fecha actual' FROM usuarios;


/*MUESTRA HORA COMPLETA DE SERVIDOR O COMPUTADORA*/

SELECT email, SYSDATE(fecha) AS 'Fecha actual' FROM usuarios;

/*PERMITE FORMATAR UNA FECHA*/
SELECT email, DATE_FORMAT(fecha, '%d-%m-%Y') AS 'Fecha actual' FROM usuarios;



/*COMPROBAR QUE LOS APELLIDOS SON NULOS*/
SELECT email, ISNULL(apellidos) FROM usuarios;

/*COMPROBAR SI DOS CAMPOS SON IGUALES*/
SELECT email, STRCMP('HOLA', 'HOLA1A') FROM usuarios;

/*MOSTRAR VERSION DE SQL*/
SELECT VERSION() FROM usuarios;

/*user que permite sacar el usuario de la base de datos*/
SELECT USER() FROM usuarios;

/*se puede indicar el distint solo sacara los datos que son diferentes*/
SELECT USER() distinct FROM usuarios;


/*DATABASE SACA EL NOMBRE DE LA BASE DE DATOS QUE SE ESTA UTILIZANDO*/
SELECT DISTINCT DATABASE() FROM usuarios;

/*si yo compruebo un campo apellidos en ves de colocarme null coloque el mensaje*/

SELECT IFNULL(apellidos, 'Este campo esta vacio') FROM usuarios;
/*agregando la columna de email*/
SELECT email, IFNULL(apellidos, 'Este campo esta vacio') FROM usuarios;