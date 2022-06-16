/*Renombrar una tabla
alter table + nombre de tabla y se indica como se renombra

ALTER TABLE usuarios 
*/

ALTER TABLE usuarios RENAME TO usuario_renom;


/*Cambiar el nombre de una columna*/
ALTER TABLE usuario_renom CHANGE apellidos apellido varchar(100)null;


/*Modificar columna sin cambiar nombre*/
ALTER TABLE usuario_renom MODIFY apellido char(50) not null;

/*Agregar una nueva columna*/
ALTER TABLE usuario_renom ADD website varchar(100)null;

/*Agregar una restriccion a columna*/
ALTER TABLE usuario_renom ADD CONSTRAINT uq_email UNIQUE(email);

/*Borrar una columna*/
ALTER TABLE usuario_renom DROP website;