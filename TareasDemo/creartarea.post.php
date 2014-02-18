<?php
  // este archivo solo guarda los datos de una nueva tarea. No debe de regresar nada de html, a menos que exista algun error.
  // para este efecto solo utilizaremos un redirigir. que en php se hace de la siguiente manera.
  // http://php.net/manual/en/function.header.php  
  
  //Comentamos esto momentaneamente. para ver si recibimos correctamente los valores  posteados. 
  
  //Estos nombres corresponden a cada elemento del formulario que tenga Nombre o NAME="...." . pueden ser input, select, textarea, etc. 
  $desc = $_POST["descripcion"];
  $prio = $_POST["prioridad"];
  
  echo $desc . "<br />";
  echo $prio . "<br />";
  
  //header('Location: index.php');
  //exit;
