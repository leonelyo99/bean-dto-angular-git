CREATE TABLE usuarios(
id  int(11) auto_increment not null ,
nombre varchar(100) not null,
PRIMARY KEY(id)
);

CREATE TABLE cursos(
id  int(11) auto_increment not null ,
nombre varchar(100) not null,
PRIMARY KEY(id)
);

CREATE TABLE usuariosDeCursos(
id_usuario int(11),
id_curso int(11),
FOREIGN KEY (id_usuario) REFERENCES usuarios(id),
FOREIGN KEY (id_curso) REFERENCES cursos(id)
);