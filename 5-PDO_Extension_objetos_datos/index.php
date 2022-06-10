<?php

//Conexion Mysql

$host= "localhost";
$usuario = "root";
$password = "";
$baseDatos = "crud_php_mysql";


//Configuracion dsn

$dsn = 'mysql:host=' . $host .';dbname=' . $baseDatos;

//Crear instancia PDO

$pdo = new PDO($dsn, $usuario, $password);


//Agregar el setattribute de manera global
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

//Primera consulta

$query = $pdo->query('SELECT * FROM usuarios');

//Ejemplo 1
//fetch = es un metodo propio de pdo para obtener todos los registros
/*while($fila = $query->fetch()){
    echo $fila['nombre'];
    echo"<br/>";
}*/



//Ejemplo 2
//Especificando el modo  PDO::FETCH_OBJ para que nos trabaje esta consulta como si fuera un objeto
/* while($fila = $query->fetch()){
     //Forma de entrar con objetos programacion orientada a objetos
     echo $fila->nombre;
     echo"<br/>";
 }*/



//ejemplo 3 

$nombre = "Elliot";

//manera insegura
//$query2 = "SELECT * FROM usuarios WHERE nombre = '$nombre' ";  

//Ejemplo 4 
$nombre2 = "Darlene";

//Parametros psocionales anonimos
/*$query3 = "SELECT * FROM usuarios WHERE nombre = ? ";

$stmt = $pdo->prepare($query3);

//execute
$stmt->execute([$nombre2]);

//Crea variable usuarios y se accede a la variable stmt

$usuarios = $stmt->fetch();

var_dump($usuarios);*/



//Parametros psocionales anonimos
$query3 = "SELECT * FROM usuarios WHERE nombre = :nombre "; //se agrega nombre para identificar  //sirve para proteger datos

$stmt = $pdo->prepare($query3);

//execute
$stmt->execute([':nombre' => $nombre2]);  //se vincula nombre a la variable nombre2  //se evita inyecciones sql

//Crea variable usuarios y se accede a la variable stmt

$usuarios2 = $stmt->fetchAll(); //se utiliza fetchall para traer todos los registros

//var_dump($usuarios2);

//se vincula usuarios a
/*foreach($usuarios2 as $usuario){
    echo $usuario->nombre;   //forma recomendada

}*/

//Traer un registro


//se selecciona el id de la base de datos en este caso el 4
/* $id = 4;
$query5 = "SELECT * FROM usuarios WHERE id = :id";
$stmt = $pdo->prepare($query5);

//Opción fetch un solo registro
$stmt->execute([':id' => $id]);
$usuario4 = $stmt->fetch();
echo $usuario4->nombre; */


//Contar filas con ROW COUNT
/*$id = "4";
$query6 = "SELECT * FROM usuarios WHERE id = :id";
$stmt = $pdo->prepare($query6);
$stmt->execute([':id' => $id]);

//Accedemos al rowCount()
$totalUsuarios = $stmt->rowCount();

echo "<br/>";
echo "Total; usuarios:" . $totalUsuarios;*/



//Insertar datos
/*
$nombre = "Tyrell";
$apellidos = "Wellick";
$telefono = "5555555555";
$email = "Tyrell@fsociety.com";


//se inserta a la tabla
$query7 = "INSERT INTO usuarios(nombre, apellidos, telefono, email)values(:nombre, :apellidos, :telefono, :email)"; //:nombre para evitar la inyeccion de sql

//utilizar el stmtm para utilizar la consulta pdo
$stmt = $pdo->prepare($query7);
//ejecutar el programa
$stmt->execute(['nombre' => $nombre, 'apellidos' => $apellidos, 'telefono' => $telefono, 'email' => $email]);//statemate
echo "<br/>";
echo "Usuario creado correctamente";


*/


//Opcion recomendada
/*$query8 = "INSERT INTO usuarios(nombre, apellidos, telefono, email)values(:nombre, :apellidos, :telefono, :email)"; //:nombre para evitar la inyeccion de sql

//utilizar el stmtm para utilizar la consulta pdo
$stmt = $pdo->prepare($query8);


//Bind params o vinculacion de parametros
                            //indicar el tipo de dato se colo PDO para PARAM_STR es ppara esperar que sea un paramatro de tipo string
$stmt->bindParam(':nombre', $nombre, PDO::PARAM_STR);
$stmt->bindParam(':apellidos', $apellidos, PDO::PARAM_STR);
$stmt->bindParam(':telefono', $telefono, PDO::PARAM_STR);
$stmt->bindParam(':email', $email, PDO::PARAM_STR);


//ejecutar el programa
$stmt->execute();//statemate
echo "<br/>";
echo "Usuario creado correctamente";
*/

//Ejemplo para tomar
//Como agregar a un usuario
//Se crean los valores del usuario 
/*
$nombre = "Elliot";
$apellidos = "Alderson";
$telefono = "1257843";
$email = "alderson@fsociety.com";


//Se procde a insertar a la tabla 
//Se crea una consulta
$query13 = "INSERT INTO usuarios(nombre, apellidos, telefono, email)values(:nombre, :apellidos, :telefono, :email)";

//Utilizar el stmt para utilizar la consulta pdo
$stmt = $pdo->prepare($query13);

//Ocupampos bind para vincular parametros
$stmt->bindParam(':nombre', $nombre, PDO::PARAM_STR);// PARAM de tipo string.
$stmt->bindParam(':apellidos', $apellidos, PDO::PARAM_STR);
$stmt->bindParam(':telefono', $telefono, PDO::PARAM_STR);
$stmt->bindParam(':email', $email, PDO::PARAM_STR);

//Ejecutar el programa
$stmt->execute();
echo "<br/>";
echo "Fue registrado con exito";
*/


//Actualizar un dato con 

//Parametros poscionales por nombre
/*
$id = 15;
$nombre = "Tyrell";
$apellidos = "Wellick";
$telefono = "12574651";
$email = "Wellick@fsociety.com";
//Actualziar datos con PDO

//Se agrega el campo update
$query9 = "UPDATE usuarios set nombre=:nombre, apellidos=:apellidos, telefono=:telefono, email=:email Where id=:id";

//Utilizar el stmt para utilizar la consulta pdo
$stmt = $pdo->prepare($query9);

//Ocupampos bind para vincular parametros
$stmt->bindParam(':nombre', $nombre, PDO::PARAM_STR);// PARAM de tipo string.
$stmt->bindParam(':apellidos', $apellidos, PDO::PARAM_STR);
$stmt->bindParam(':telefono', $telefono, PDO::PARAM_STR);
$stmt->bindParam(':email', $email, PDO::PARAM_STR);
$stmt->bindParam(':id', $id, PDO::PARAM_INT);  //tipo seria int


//Ejecutar el programa
$stmt->execute();
echo "<br/>";
echo "Fue actualizado con exito con exito";
*/


//Parametros posicionales anonimos
/*
$id = 15;
$nombre = "Darlene";
$apellidos = "Alderson";
$telefono = "124524651";
$email = "Darlenek@fsociety.com";
//Actualziar datos con PDO

//Se agrega el campo update
//se quita :nombre y se coloca ?
$query9 = "UPDATE usuarios set nombre=?, apellidos=?, telefono=?, email=? Where id=?";

//Utilizar el stmt para utilizar la consulta pdo
$stmt = $pdo->prepare($query9);

//Ocupampos bind para vincular parametros
//se cambian los :nombre por numeros
$stmt->bindParam(1, $nombre, PDO::PARAM_STR);// PARAM de tipo string.
$stmt->bindParam(2, $apellidos, PDO::PARAM_STR);
$stmt->bindParam(3, $telefono, PDO::PARAM_STR);
$stmt->bindParam(4, $email, PDO::PARAM_STR);
$stmt->bindParam(5, $id, PDO::PARAM_INT);  //tipo seria int


//Ejecutar el programa
$stmt->execute();
echo "<br/>";
echo "Fue actualizado con exito con exito";*/


//Borar datos
//Se selecciona el id a eliminar
/*
$id = 15;
//se realiza la consulta
$query11 = "DELETE FROM usuarios WHERE id=:id";

//Utilizar el stmt para utilizar la consulta pdo
$stmt = $pdo->prepare($query11);

//Se vincula el id, se pasa la variable, se pasa la validacion de tipo entero
$stmt->bindParam(':id', $id, PDO::PARAM_INT);

//Ejecutar el programa
$stmt->execute();
echo "<br/>";
echo "Fue borrado con exito con exito";
*/

//Buscar datos utilizando sentencia preparadas %% = sentencia lite
//Lo que quiero buscar va entre %%
$textoBuscar = "%el%";
//se realiza la consulta
$query12 = "SELECT * FROM usuarios WHERE nombre like :nombre";

//Utilizar el stmt para preparar la consulta pdo
$stmt = $pdo->prepare($query12);

//Se vincula el id, se pasa la variable, se pasa la validacion de tipo STRING
$stmt->bindParam(':nombre', $textoBuscar, PDO::PARAM_STR);

//Ejecutar el programa
$stmt->execute();
//sE PEGA UNA VARIABLE USUARIOS
$usuarios = $stmt->fetchAll(); //para traer todos los datos
var_dump($usuarios);
