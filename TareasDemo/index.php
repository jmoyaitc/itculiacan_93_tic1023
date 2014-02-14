<?php
require_once("tareas.repo.php");

$mistareas = MisTareas(); //Llamar a la funcion del repositorio. a esta paguina no le importa de donde o como salen las tareas. 
  
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
		<li><?php echo $t["descripcion"]; ?> 
		<a href="editartarea.php?id=<?php echo $t["id"]; ?>">[Editar ] </a> 
		<a href="borrartarea.php?id=<?php echo $t["id"]; ?>">[Borrar] </a>
	    <a href="comentartarea.php?id=<?php echo $t["id"]; ?>">[Comentar ] </a>
		</li>
	<?php
	}
	?>
<ul>
</body>
</html>
