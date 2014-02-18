<?php

require_once("tareas.repo.php");
  
  // Copiamos de Editar pero con algunas nuevas modificaciones. 
   
  
  // Para borrar algo solo es nescesario utilizar el "id" el resto no es relevante. 
  $id = $_POST["id"];
  
  
  
  $tarea = array( 
					"id" => $id
					);
  
  
  if(BorrarTarea($tarea)) {
	header('Location: index.php');
  }else {
	// Si no pudimos crear la tarea nos regresamos al formulario de crear tarea. 
	header('Location: borrartarea.php');
  }
  
  //tenemos que acabar la ejecucion del script. 
  exit;
