create database examen;
use examen; 

create table alm_alumno(
	alm_id int primary key auto_increment,
	alm_codigo varchar(100),
	alm_nombre varchar(300),
	alm_edad int,
	alm_sexo varchar(100),
	alm_id_grd int,
	alm_observacion varchar(300)
);

create table grd_grado(
	grd_id int primary key auto_increment,
	grd_nombre varchar(100)
); 

create table mat_materia(
	mat_id int primary key auto_increment,
	mat_nombre varchar(100)
);

create table mxg_materiasxgrado(
	mxg_id int primary key auto_increment,
	mxg_id_grd int,
	mxg_id_mat int
);


ALTER TABLE alm_alumno ADD FOREIGN KEY(alm_id_grd) REFERENCES grd_grado(grd_id) ON UPDATE CASCADE;
ALTER TABLE mxg_materiasxgrado ADD FOREIGN KEY(mxg_id_grd) REFERENCES grd_grado(grd_id) ON UPDATE CASCADE;
ALTER TABLE mxg_materiasxgrado ADD FOREIGN KEY(mxg_id_mat) REFERENCES mat_materia(mat_id) ON UPDATE CASCADE;

