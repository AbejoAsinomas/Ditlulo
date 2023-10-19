INSERT INTO usuarios(Cedula, Nombre, Apellido, Correo, Ocupacion, Estudios, Descripcion, Celular, Telefono, Direccion)
VALUES(53540043, 'Alejandro', 'Marquez', 'alejodelrio1901@gmail.com', 'Estudiante','Universitario', 'Ola', 3203866300, 53874154, 'santateresa');##CTRL+ENTER

INSERT INTO usuarios(Cedula, Nombre, Apellido, Correo, Ocupacion, Estudios, Descripcion, Celular, Telefono, Direccion)
VALUES(4654654, 'Camilo', 'Henao', 'Vanshe@gmail.com', 'Estudiante','Universitario', 'Alto', 324618594, 54781816, 'Marinilla');##CTRL+ENTER

INSERT INTO usuarios(Cedula, Nombre, Apellido, Correo, Ocupacion, Estudios, Descripcion, Celular, Telefono, Direccion)
VALUES(4685484, 'Javier', 'Antonio', 'javier@gmail.com', 'Docente','Ingeniero', 'Profesor', 64841654, 9784651, 'Nose');##CTRL+ENTER

INSERT INTO usuarios(Cedula, Nombre, Apellido, Correo, Ocupacion, Estudios, Descripcion, Celular, Telefono, Direccion)
VALUES(984651, 'Yesenbia', 'Rodriguez', 'yesemcia@gmail.com', 'Estudiante','Universitario', 'nose', 79465, 879456, 'Rionegro');##CTRL+ENTER

INSERT INTO usuarios(Cedula, Nombre, Apellido, Correo, Ocupacion, Estudios, Descripcion, Celular, Telefono, Direccion)
VALUES(940043, 'wildri', 'franco', 'wildri@gmail.com', 'Estudiante','preescolar', 'alfredo', 78458894, 7451956, 'Antioqiea');##CTRL+ENTER

SELECT * FROM usuarios; ##CTRL+ENTER

INSERT INTO servicios(Id,Nombre,Descripcion,Tipo,Precio,CedulaUsuario)
Values (94614, 'Diseño de software', 'Buenas tardes', 'Diseño','40000','53540043');

INSERT INTO servicios(Id,Nombre,Descripcion,Tipo,Precio,CedulaUsuario)
Values (1000, 'Diseño de páginas', 'Buenas dias', 'Diseño','90000','4654654');

INSERT INTO servicios(Id,Nombre,Descripcion,Tipo,Precio,CedulaUsuario)
Values (2000, 'Programacion', 'Buenas noches', 'program','199900','4685484');

insert into servicios (Id,Nombre,Descripcion,Tipo,Precio,CedulaUsuario)
values (3000, 'carpintero', 'Ofrezco servicio de carpinteria','carpinteria','50000 por hora','984651');

insert into servicios (Id,Nombre,Descripcion,Tipo,Precio,CedulaUsuario)
values (4000, 'Mantenimiento', 'Ofrezco servicio de mantenimiento de pcs','reparacion y mantenimiento','70000','940043');


SELECT * FROM servicios;