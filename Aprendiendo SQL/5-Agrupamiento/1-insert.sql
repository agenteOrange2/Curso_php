/*INSERT PARA CATEGORIAS*/
INSERT INTO categorias VALUES(null, 'Accion');
INSERT INTO categorias VALUES(null, 'Rol');
INSERT INTO categorias VALUES(null, 'Deportes');



/*INSERT PARA ENTRADAS*/
/*Se utiliza curdate para que lo coloque automaticamente*/

/*USUARIO 1*/
INSERT INTO entradas VALUES(null, 1, 1, 'Novedades de GTA V Online', 'Review del GTA V', CURDATE());

INSERT INTO entradas VALUES(null, 1, 2, 'Leguegue of legends', 'Parche julio League of legends', CURDATE());

INSERT INTO entradas VALUES(null, 1, 3, 'Novedades de Residente evil 4', 'Review del Resident evil 4', CURDATE());


/*USUARIO 2*/
INSERT INTO entradas VALUES(null, 2, 1, 'Novedades de PUBG online', 'Review del PUBG', CURDATE());

INSERT INTO entradas VALUES(null, 2, 2, 'Novedades Overwatch', 'Parche julio Overwatch', CURDATE());

INSERT INTO entradas VALUES(null, 2, 3, 'Novedades de Residente evil 3', 'Review del Resident evil 3', CURDATE());


/*USUARIO 3*/
INSERT INTO entradas VALUES(null, 3, 1, 'Novedades de Halo infinity', 'Review del Halo infinity', CURDATE());

INSERT INTO entradas VALUES(null, 3, 2, 'Novdades online APEX', 'Parche julio APEX', CURDATE());

INSERT INTO entradas VALUES(null, 3, 3, 'Novedades de Residente evil 2', 'Review del Resident evil 2', CURDATE());