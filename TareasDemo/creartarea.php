<?php
  // Nada de codigo aun. solo el html.
?><DOCTYPE html>
<html>
<head>
<title>Crear nueva tarea</title>
<LINK href="site.css" rel="stylesheet" type="text/css">
</head>
<body>
<h1>Nueva Tarea</h1>
<nav><a href="index.php">Mis Tareas</a><nav>
<!-- Un separador  -->
<hr />
<form method="POST" action="creartarea.post.php">
<label for="descripcion">Tarea : </label>
<input type="text" value="" name="descripcion" /> <br />
<label for="prioridad">Prioridad : </label>
<select name="prioridad">
	<option>1</option>
	<option>2</option>
	<option>3</option>
	<option>4</option>
</select>
<br />
<input type="submit" value="Crear"/>
</form>
</body>
</html>