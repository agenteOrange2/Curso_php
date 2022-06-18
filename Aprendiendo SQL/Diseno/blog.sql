/*Crear tabla usuarios*/
/*se agrega restriccion para que email sea unico*/
/*engine es para asignar el motor o la forma de almacenar los datos y permite manetener la referencia*/
/*Tpos de engine el que viene predeterminado si ee hacen muchas consultas y para mejorar

Myisav permite tener mayor velocidad para obtener datos el unico problema es que no mantiene la integridad
*/

CREATE TABLE usuarios(
    id          int(255) auto_increment not null,
    nombre      varchar(100) not null,
    apellidos   varchar(100)not null,
    email       varchar(255) not null,
    password    varchar(255) not null,
    fecha       date not null,
    CONSTRAINT pk_usuarios PRIMARY KEY(id),
    CONSTRAINT uq_email UNIQUE(email)
)ENGINE=innoDb;


/*Creando tabla de categorias*/

CREATE TABLE categorias(
    id      int(255) auto_increment not null,
    nombre  varchar(100),
    CONSTRAINT pk_categorias PRIMARY KEY(id)
)ENGINE=innoDb;

/*cREANDO UNA TABLA CON CLAVE AJENA QUE APUNTA UNA TABLA A OTRA*/
/*Como es una clave foranea se utiliza fk - a la tabla que apunta*/
/*ON DELETE/UPDATE CASCADE FUNCIONA QUE CUANDO SE BORRE LA TABLA SE BORRE LOS DATOS GUARDADOS*/
/*ON DELETE SE PUEDE COLOCAR SET NULL, QUE CUANDO SE BORRE LA CATEGORIA SE PONGA EN NULL/DEFAULT*/
/*ON DELETE NO ACTION = QUE NO HAGA NADA*/
CREATE TABLE entradas(
    id              int(255) auto_increment not null,
    usuario_id      int(255) not null,
    categoria_id    int(255) not null,
    titulo          varchar(255) not null,
    descripcion     MEDIUMTEXT,
    fecha           date not null,
    CONSTRAINT pk_ PRIMARY KEY (id),
    CONSTRAINT fk_entrada_usuario FOREIGN KEY (usuario_id) REFERENCES usuarios(id),
    CONSTRAINT fk_entrada_categoria FOREIGN KEY(categoria_id) REFERENCES categorias(id)
)ENGINE=innoDb;