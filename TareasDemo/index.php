<?php
require_once("tareas.repo.php");

$mistareas = MisTareas(); //Llamar a la funcion del repositorio. a esta paguina no le importa de donde o como salen las tareas. 
  // Nada de codigo aun. solo el html.
?><DOCTYPE html>
<html>
<head>
<title>Cosas que tengo que hacer el fin de semana.</title>
<!-- http://www.w3.org/TR/html401/present/styles.html --->
<LINK href="site.css" rel="stylesheet" type="text/css">
</head>
<body>
<h1>Tareas a realizar</h1>
<nav><a href="creartarea.php">Agregar Tarea</a><nav>
<ul>
<!--- SI esto parece extraño  < ? php asi de la nada ver esta referencia http://www.php.net/manual/es/language.basic-syntax.phpmode.php -->
<?php
	//http://www.php.net/manual/es/control-structures.foreach.php se pueden utilizar muchos opciones aqui for while do . 
	// Esto es un iterador http://en.wikipedia.org/wiki/Iterator
	foreach($mistareas as $t) {
		?>
		<li><?php echo $t["descripcion"]; ?></li>
	<?php
	}
	?>
	<li>Finalizar este demo de paguina de inicio <a href="editartarea.php">[Editar ] </a> <a href="borrartarea.php">[Borrar] </a>
	<a href="comentartarea.php">[Comentar ] </a></li>
<ul>
</body>
</html>
