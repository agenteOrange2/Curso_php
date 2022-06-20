/*ACtualizar datos*/

UPDATE usuarios SET fecha = CURDATE(); /*PARA QUE SE ACTUALICEN TODOS EN CASO QUE QUIERA UNO EN ESPECIFICO SE COLOCA UN WHERE*/

/*where*/
/*se agrega una nueva fehca y un apellido*/
UPDATE usuarios SET fecha = '2021-08-17', apellidos='ADMIN' WHERE ID=4; 


