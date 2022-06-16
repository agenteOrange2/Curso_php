/*
Declaramos tipo de dato
int(n caracteres)               ENTERO
integer(n caracteres)           ENTERO (maximo 255)
varchar(n caracteres)           STRING / ALFANUMERICO (Maximo 255)
char(n caraceteres) STRING      STRING / ALFANUMERICO
float(n cifras, n decimales)    DECIMAL / COMA FLOTANTE
date
time
timestamp 

//String mas grandes
TEXT permite 65535
MEDIUMTEXT 16 millones
LONGTEXT permite guardar 4 billones de caracteres


//ENTEROS MAS GRANDES
MEDIUMINT
BIGINT
*/

/*
Crer una tabla

siempre debe de ir en plural



//
Borrar una tabla se utiliza = drop table nombre de tabla;


//Restricciones
- Not null = Siempre debe tener un valor, no puede quedar vacio
- default = se le pasan los parametros algun dato
-auto increment = solo se puede autoincrementar con una llave primaria

*/

CREATE TABLE usuarios(
    id              int(11) auto_increment not null ,
    nombre          varchar(100) not null,
    apellidos       varchar(255) default 'hola que tal',
    email           varchar(100) not null,
    password        varchar(255),
    CONSTRAINT pk_usuarios PRIMARY KEY(id)
);