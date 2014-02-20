<?php

require_once("tareas.repo.php");
  
  // Copiamos de Editar pero con algunas nuevas modificaciones. 
   
  
  
  $comentario = $_POST["comentario"];
  $id = $_POST["id"];
  
  //Hay que verificar que tenga una comentario la tarea si no, no se puede guardar comentario. 
  if(!isset($comentario) || trim($comentario)==='') {
	header('Location: comentartarea.php?id='.$id);
	exit; //esto detiene la ejecucion del script. forzando a php a inmediatamente rediriguir. 
  }
  
  
  
  
  if(ComentarTarea($id, $comentario)) {
	header('Location: comentartarea.php?id='.$id);
  }else {
	// Si no pudimos crear la tarea nos regresamos al formulario de crear tarea. 
	header('Location: comentartarea.php?id='.$id);
  }
  
  //tenemos que acabar la ejecucion del script. 
  exit;
