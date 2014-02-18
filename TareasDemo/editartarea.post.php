<?php

require_once("tareas.repo.php");
  
  // Copiamos de Crear pero con algunas nuevas modificaciones. 
   
  
  $desc = $_POST["descripcion"];
  $prio = $_POST["prioridad"];
  $comple = $_POST["compleatado"];
  
  //Hay que verificar que tenga una descripcion la tarea si no, no se puede guardar. 
  if(!isset($desc) || trim($desc)==='') {
	header('Location: editartarea.php');
	exit; //esto detiene la ejecucion del script. forzando a php a inmediatamente rediriguir. 
  }
  
  $tarea = array( "descripcion" => $desc,
					"prioridad" => $prio,
					"completado" => $comple
					);
  
  
  if(ActualizarTarea($tarea)) {
	header('Location: index.php');
  }else {
	// Si no pudimos crear la tarea nos regresamos al formulario de crear tarea. 
	header('Location: editartarea.php');
  }
  
  //tenemos que acabar la ejecucion del script. 
  exit;
