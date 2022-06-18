/*Insertar nuevos registors*/

INSERT INTO usuarios VALUES(null, 'Elliot', 'Alderson','robot@fsociety.com','fsociety','2022-06-16');

INSERT INTO usuarios VALUES(null, 'Darlene', 'Alderson','darlene@fsociety.com','Dfsociety','2022-06-16');

INSERT INTO usuarios VALUES(null, 'Tyrell', 'Wellick','Wellick@evilcorp.com','corp','2022-06-16');


/*INSERTAR FILAS SOLO CON CIERTAS COLUMNAS*/
INSERT INTO usuarios(email, password) VALUES('mrrobot@fsociety.com', 'Fsociety2022');