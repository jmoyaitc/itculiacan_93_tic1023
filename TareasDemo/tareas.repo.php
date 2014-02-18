<?php
// Este archivo se engarga de leer de la base de datos o de donde sea nescesario la informacion de las tareas.
// Este patron de diseño se llama repositorio, es simplemente generar una clase o libreria que se encarge de sacar todos los datos
// De Tareas. 


function AbrirConexion() {
	//Ver documentacion: http://www.php.net/manual/es/function.mysqli-connect.php
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$db = "Tareas";
	$link = new mysqli($dbhost,$dbuser,$dbpass,$db);
		if($link->connect_errno) {
			die("Error " . $link->connect_error);
		}
	return $link;
}


//En este caso haremos funciones 
// http://www.php.net/manual/en/functions.user-defined.php
function MisTareas( ) {
	// Debe de regresar una lista de todas mis tareas. 
	$query = "SELECT id, descripcion, prioridad, completado FROM Tareas ";
	$link = AbrirConexion();
	$tareas = array();
	
	if($r = $link->query($query)){
		while($t = $r->fetch_assoc()) {
			$tareas[] = $t;
		}		
		$r->free();
		$link->close();
	}else {
		//Dejaremos esto aqui para saber que es lo que esta pasando. 
		die("Error: ". $mysqli->error);
		return array();
	}
	
	return $tareas;
}

function UnaTarea($id, $descrip, $prioridad, $completado) {
	//	http://www.php.net/manual/es/language.types.array.php
	$t = array(
	"id" => $id,
	"descripcion" => $descrip,
	"prioridad" => $prioridad,
	"completado" => $completado
	);
	return $t;
}

function LeerTarea($id) {
	// Debe de regresar una lista de todas mis tareas. 
	$query = "SELECT id, descripcion, prioridad, completado FROM Tareas WHERE id=" .$id;
	$link = AbrirConexion();
	
	$tarea = array();
	
	if($r = $link->query($query)){
		if($t = $r->fetch_assoc()) {
			$tarea = $t;
		}		
		$r->free();
		$link->close();
		return $tarea;
	}else {
		//Dejaremos esto aqui para saber que es lo que esta pasando. 
		die("Error: ". $mysqli->error);
		return array();
	}
	
	return $tarea;
}

function LeerComentarios($id) {
	$comentarios = array();
	$comentarios[0] = UnComentario("Esto es una comentario");
	$comentarios[1] = UnComentario("Otro comentario");
	$comentarios[2] = UnComentario("Otro comentario ss");
	$comentarios[3] = UnComentario("Que comentario");
	return $comentarios;
}

function UnComentario($comen) {
	$f = getdate();
	
	return array( 
			"fecha" => $f["year"] . "-" . $f["mon"] . "-" .  $f["mday"],
			"comentario" => $comen
		);
}

function ComentarTarea($tareaid, $comentario) {
	
	return true;
}

function CrearTarea($tarea) {
	// Debe de crear una tarea. 
	$comando = "INSERT INTO Tareas (descripcion, prioridad, completado) VALUES ( '" 
							. $tarea["descripcion"] . "', '" . $tarea["prioridad"] . "', 'No')";
							
	$link = AbrirConexion();
	//http://www.php.net/manual/en/mysqli.query.php
	if($r = $link->query($comando)){
		return true;
	}else {
		//Dejaremos esto aqui para saber que es lo que esta pasando. 
		die("Error: ". $mysqli->error);
		return false;
	}
}

function ActualizarTarea($tarea) {
	//http://dev.mysql.com/doc/refman/5.0/en/update.html
	$comando = "UPDATE Tareas SET descripcion = '". $tarea["descripcion"]."' ".
							", prioridad = ". $tarea["prioridad"]." ".
							", completado= '". $tarea["completado"]."' WHERE id = " . $tarea["id"]; 
							
							
	$link = AbrirConexion();
	//http://www.php.net/manual/en/mysqli.query.php
	if($r = $link->query($comando)){
		return true;
	}else {
		//Dejaremos esto aqui para saber que es lo que esta pasando. 
		die("Error: ". $mysqli->error);
		return false;
	}
}

function BorrarTarea($tarea) {
	//Debe de borrar la tarea si existe.
	return true;
}

?>