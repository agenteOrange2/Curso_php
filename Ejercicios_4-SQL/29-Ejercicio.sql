/*
Crear una vista llamada vendedores que incluira todos los vendedores  del grupo que se llame "Venddores A"
*/

CREATE VIEW vendedoresA AS
SELECT * FROM vendedores WHERE grupo_id IN
(SELECT id FROM grupos WHERE nombre = "Vendedores A");