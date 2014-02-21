<?php
require_once("tareas.repo.php");

$mistareas = MisTareas(); //Llamar a la funcion del repositorio. a esta paguina no le importa de donde o como salen las tareas. 
  
?><!DOCTYPE html>
<html>
<head>
<title>Cosas que tengo que hacer el fin de semana.</title>
<!-- Descargar esto de http://jquery.com/download/ y ponerlo en repositorio. -->
<script src="jquery-2.1.0.min.js"></script>
<script>
	//Leer documentacion aqui... http://api.jquery.com/ready/
	$(document).ready(function() {
		// #dinamico es un selector de CSS # es de id. . es para clases o puden utilizar una etiqueta.
		// Ver funcion LOAD aqui -> http://api.jquery.com/load/
		$("#dinamico").load("dinamico.php");
	});
</script>
<!-- http://www.w3.org/TR/html401/present/styles.html -->
<LINK href="site.css" rel="stylesheet" type="text/css">
</head>
<body>
<h1>Tareas a realizar</h1>
<nav><a href="creartarea.php">Agregar Tarea</a><nav>
<!-- Esto es un contendedor donde cargaremos dinamicamente contenido.  -->
<h3>Contenido Dynamico </h3>
<div id="dinamico"></div>
<dl>
<!--- SI esto parece extraño  < ? php asi de la nada ver esta referencia http://www.php.net/manual/es/language.basic-syntax.phpmode.php -->
<?php
	//http://www.php.net/manual/es/control-structures.foreach.php se pueden utilizar muchos opciones aqui for while do . 
	// Esto es un iterador http://en.wikipedia.org/wiki/Iterator
	$p = "";
	foreach($mistareas as $t) {
			if($t["prioridad"] != $p) {
				$p = $t["prioridad"];
				echo "<dt>Prioridad ". $p ."</dt>"; 
			}
		?>
		<dd <?php if ($t["completado"] == "Si") echo "class=\"completado\"" ?> ><?php echo $t["descripcion"]; ?> 
		<a href="editartarea.php?id=<?php echo $t["id"]; ?>">[Editar ] </a> 
		<a href="borrartarea.php?id=<?php echo $t["id"]; ?>">[Borrar] </a>
	    <a href="comentartarea.php?id=<?php echo $t["id"]; ?>">[Comentar ] </a>
		</dd>
	<?php
	}
	?>
<dl>
</body>
</html>
