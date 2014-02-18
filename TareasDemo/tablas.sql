/* Crear una tabla en MYSQL. buscar referencias en Linea.   */
CREATE TABLE IF NOT EXISTS Tareas (
    id INT NOT NULL AUTO_INCREMENT,
    descripcion VARCHAR(100) NOT NULL,
    prioridad INT,
    completado VARCHAR(2),
    PRIMARY KEY (id)
   )
 CREATE TABLE IF NOT EXISTS Comentarios (
	id INT NOT NULL AUTO_INCREMENT,
	tareaid INT NOT NULL,
	fecha DATETIME NOT NULL,
	comentario VARCHAR(500) NOT NULL,
	PRIMARY KEY (id)
 )