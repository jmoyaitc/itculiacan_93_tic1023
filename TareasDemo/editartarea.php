<?php
  // Nada de codigo aun. solo el html.
?><DOCTYPE html>
<html>
<head>
<title>Editar tarea XYZ</title>
<LINK href="site.css" rel="stylesheet" type="text/css">
</head>
<body>
<h1>Editar Tarea XYZ</h1>
<nav><a href="index.php">Mis Tareas</a><nav>
<!-- Un separador  -->
<hr />
<form method="POST">
<label for="descripcion">Tarea : </label>
<input type="text" value="Dar comida al gato" name="descripcion" /> <br />
<label for="prioridad">Prioridad : </label>
<select name="prioridad">
	<option>1</option>
	<option>2</option>
	<option selected="selected">3</option>
	<option>4</option>
</select>
<br />
<label for="completado"> Completada : </label>
<select name="completado">
	<option>Si</option>
	<option>No</option>
</select>
<br/>
<input type="submit" value="Actualizar"/>
</form>
</body>
</html>