<?php
//Utilizaremos nuestras funciones para guardar la tarea.

require_once("tareas.repo.php");
  // este archivo solo guarda los datos de una nueva tarea. No debe de regresar nada de html, a menos que exista algun error.
  // para este efecto solo utilizaremos un redirigir. que en php se hace de la siguiente manera.
  // http://php.net/manual/en/function.header.php  
  
  //Comentamos esto momentaneamente. para ver si recibimos correctamente los valores  posteados. 
  
  //Estos nombres corresponden a cada elemento del formulario que tenga Nombre o NAME="...." . pueden ser input, select, textarea, etc. 
  $desc = $_POST["descripcion"];
  $prio = $_POST["prioridad"];
  
  $tarea = array( "descripcion" => $desc,
					"prioridad" => $prio
					);
  
  
  if(CrearTarea($tarea)) {
	header('Location: index.php');
  }else {
	// Si no pudimos crear la tarea nos regresamos al formulario de crear tarea. 
	header('Location: creartarea.php');
  }
  
  //tenemos que acabar la ejecucion del script. 
  exit;
