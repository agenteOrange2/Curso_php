/*
Diseñar base de datos
*/

CREATE DATABASE IF NOT EXISTS concesionario;
USE concesionario;

/*CREANDO TABLAS*/
/*ya se pueden hacer tablas que apunten a otras*/
CREATE TABLE coches(
id          int(10) auto_increment not null,
modelo      varchar(100) not null,
marca       varchar(50),
precio      int(20) not null,
stock       int(255) not null,
CONSTRAINT pk_coches PRIMARY KEY(id)
)ENGINE=InnoDB;


CREATE TABLE grupos(
id              int(10) auto_increment not null,
nombre          varchar(100) not null,
ciudad          varchar(100),
CONSTRAINT pk_grupos PRIMARY KEY(id)
)ENGINE=InnoDB;


CREATE TABLE vendedores(
id              int(10) auto_increment not null,
grupo_id        int(10) not null,
jefe            int(10),
nombre          varchar(100) not null,
apellidos       varchar(150),
cargo           varchar(50),
fecha           date,
sueldo          float(20,2),
comision        float(10,2),
CONSTRAINT pk_vendedores PRIMARY KEY(id),
CONSTRAINT fk_vendedor_grupo FOREIGN KEY(grupo_id) REFERENCES grupos(id),
CONSTRAINT fk_vendedor_jefe FOREIGN KEY(jefe) REFERENCES vendedores(id)
)ENGINE=InnoDB;


CREATE TABLE clientes(
id            int(10) auto_increment not null,
vendedor_id   int(10),
nombre        varchar(150) not null,
ciudad        varchar(100),
gastado       float(50,2),
fecha         date,
CONSTRAINT pk_clientes PRIMARY KEY(id),
CONSTRAINT fk_cliente_vendedor FOREIGN KEY(vendedor_id) REFERENCES vendedores(id)
)ENGINE=InnoDB;


CREATE TABLE encargos(
id              int(10) auto_increment not null,
cliente_id      int(10) not null,
coche_id        int(10) not null,
cantidad        int(100),
fecha           date,
CONSTRAINT pk_encargos PRIMARY KEY(id),
CONSTRAINT fk_encargo_cliente FOREIGN KEY(cliente_id) REFERENCES clientes(id),
CONSTRAINT fk_encargo_coche FOREIGN KEY(coche_id) REFERENCES coches(id)
)ENGINE=InnoDB;



#RELLENAR LA BASE DE DATOS CON INFORMACION - INSERTS#

#COCHES#
INSERT INTO coches VALUES(NULL, 'Renault Clio', 'Renault', 12000, 13);
INSERT INTO coches VALUES(NULL, 'Seat Panda', 'Seat', 10000, 10 );
INSERT INTO coches VALUES(NULL, 'Mercedes Ranchera', 'Mercedes Benz', 32000, 24);
INSERT INTO coches VALUES(NULL, 'Porche Cayene', 'Porche', 65000, 5);
INSERT INTO coches VALUES(NULL, 'Lambo Aventador', 'Lamborgini', 1700000, 2);
INSERT INTO coches VALUES(NULL, 'Ferrari Spider', 'Ferrari', 245000, 80);



#GRUPOS#
INSERT INTO grupos VALUES(NULL, 'Vendedores A', 'Cd Juarez');
INSERT INTO grupos VALUES(NULL, 'Vendedores B', 'Chihuahua');
INSERT INTO grupos VALUES(NULL, 'Directores mecanicos', 'Chihuahua');
INSERT INTO grupos VALUES(NULL, 'Vendedores A', 'CDMX');
INSERT INTO grupos VALUES(NULL, 'Vendedores B', 'Morelos');
INSERT INTO grupos VALUES(NULL, 'Vendedores C', 'Puebla');
INSERT INTO grupos VALUES(NULL, 'Vendedores A', 'Oaxaca');
INSERT INTO grupos VALUES(NULL, 'Vendedores B', 'Guerrero');
INSERT INTO grupos VALUES(NULL, 'Vendedores C', 'San Luis');


#VENDEDORES#
INSERT INTO vendedores VALUES(NULL, 1 ,NULL, 'Daniel', 'Mares', 'Responsable de tienda', CURDATE(), 30000, 4);
INSERT INTO vendedores VALUES(NULL, 1 ,1, 'Elliot', 'Montes', 'Ayudante de tienda', CURDATE(), 25000, 2);
INSERT INTO vendedores VALUES(NULL, 2 ,NULL, 'Marco', 'Ramirez', 'Responsable de tienda', CURDATE(), 38000, 4);
INSERT INTO vendedores VALUES(NULL, 2 ,3, 'Frank', 'Martinez', 'ayudante de tienda', CURDATE(), 12000, 5);
INSERT INTO vendedores VALUES(NULL, 3 ,NULL, 'Victor', 'Guzman', 'Mecanico jefe', CURDATE(), 40000, 2);
INSERT INTO vendedores VALUES(NULL, 4 ,NULL, 'Alejandro', 'Mendoza', 'Vendedor de llantas', CURDATE(), 6000, 1);
INSERT INTO vendedores VALUES(NULL, 5 ,NULL, 'Salvador', 'Lopez', 'Vendedor experto', CURDATE(), 8000,2);
INSERT INTO vendedores VALUES(NULL, 6 ,NULL, 'Joaquin', 'Savedra', 'Ejecutivo de cuentas', CURDATE(), 10000, 7);
INSERT INTO vendedores VALUES(NULL, 6 , 8, 'Luis', 'Perez', 'Ayudante de tienda', CURDATE(), 90000, 3);

#CLIENTES

INSERT INTO clientes VALUES(NULL, 1, 'Construcciones Fsociety', 'Chihuahua', 24000, CURDATE());
INSERT INTO clientes VALUES(NULL, 1, 'Empresa de seguridad Juarez', 'Chihuahua', 40000, CURDATE());
INSERT INTO clientes VALUES(NULL, 1, 'Transportista de personal Chihuahua', 'Chihuahua', 32000, CURDATE());
INSERT INTO clientes VALUES(NULL, 1, 'Taxis morelitos', 'Morelos', 96000, CURDATE());
INSERT INTO clientes VALUES(NULL, 1, 'Conductores SA de CV', 'CDMX', 17000, CURDATE());
INSERT INTO clientes VALUES(NULL, 1, 'Firma de abogados', 'Puebla', 245000, CURDATE());


#ENCARGOS
INSERT INTO encargos VALUES(NULL, 1, 1, 2, CURDATE());
INSERT INTO encargos VALUES(NULL, 2, 2, 4, CURDATE());
INSERT INTO encargos VALUES(NULL, 3, 3, 1, CURDATE());
INSERT INTO encargos VALUES(NULL, 4, 3, 3, CURDATE());
INSERT INTO encargos VALUES(NULL, 5, 5, 1, CURDATE());
INSERT INTO encargos VALUES(NULL, 6, 6, 1, CURDATE());





