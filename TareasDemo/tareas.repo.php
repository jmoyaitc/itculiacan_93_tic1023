<?php
// Este archivo se engarga de leer de la base de datos o de donde sea nescesario la informacion de las tareas.
// Este patron de diseño se llama repositorio, es simplemente generar una clase o libreria que se encarge de sacar todos los datos
// De Tareas. 

//En este caso haremos funciones 
// http://www.php.net/manual/en/functions.user-defined.php
function MisTareas( ) {
	// Debe de regresar una lista de todas mis tareas. 
	$tareas = array();
	$tareas[0] = UnaTarea(1,"Hacer la comida", 3, "No");
	$tareas[1] = UnaTarea(2,"Aprender PHP " , 1, "No");
	$tareas[2] = UnaTarea(3,"Leer las referencias de php", 2, "Si");
	$tareas[3] = UnaTarea(4,"Leer las referencias de html",3, "Si");
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
	//Debe de regresar una tarea especifica.
	return UnaTarea($id, "Esto esuna prueba", 2, "No");
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
	return true;
}

function ActualizarTarea($tarea) {
	//Debe de borrar una tarea si existe.
	return true;
}

function BorrarTarea($tarea) {
	//Debe de borrar la tarea si existe.
	return true;
}

?>