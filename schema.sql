create database if not exists saicyr;
use saicyr;

create table galeria(
    id int(6) primary key not null auto_increment,
    url char(140) not null
);

create table area(
    id tinyint(1) primary key not null,
    nombre char(50)
);

create table usuarios(
    id tinyint(2) primary key not null auto_increment,
    username char(15) not null unique,
    realname char(30) not null,
    password char(32) not null,
    tipo enum("Director","Encargado") not null,
    area_id tinyint(1) not null,
    question_secret char(140) not null,
    answer_secret char(140) not null,
    foreign key(area_id) references area(id)
    on delete cascade
    on update cascade
);

create table inventario(
    id int(6) primary key not null auto_increment,
    nombre char(30) not null,
    codigo char(16),
    condicion enum("En Reparación","Dañado","Operativo") not null,
    categoria enum("Químico","Mueble","Oficina") not null,
    cantidad int(3) not null,
    escala enum("Kgrs", "Grs", "Unidades") not null,
    area_id tinyint(1) not null,
    foreign key(area_id) references area(id)
    on delete cascade
    on update cascade,
    galeria_id int(6) not null,
    foreign key(galeria_id) references galeria(id)
    on delete cascade
    on update cascade
);

create table registro(
    id int(6) primary key not null auto_increment,
    fecha_at date not null,
    hora time not null,
    usuario char(32) not null,
    accion enum("Entrar","Salir","Agrego","Elimino","Modifico") not null,
    area char(50) not null
);
 
insert into galeria(url) values ("null");
insert into area(id,nombre) values 
(0,"Todas"),(1,"Taller"),(2,"Laboratorio"),(3,"Oficina"),
(4,"Salón Principal"),(5,"Sala de Arte"),(6,"Taller de Escultura"),(7,"Depósito");
insert into usuarios(username,realname,password,tipo,area_id,question_secret,answer_secret) values
("admin","Nohe Gilson",md5("12345678"),"Director","0","Sede de Conservacion y restauración","seminario");
