/*
Modificar la comision de los vendedores al 0.5% cuando ganan mas de 50000
*/


UPDATE vendedores SET comision = 0.5 WHERE sueldo >= 50000;