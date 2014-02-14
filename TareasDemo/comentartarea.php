<?php
  // Nada de codigo aun. solo el html.
?><DOCTYPE html>
<html>
<head>
<title>Borrar tarea XYZ</title>
<LINK href="site.css" rel="stylesheet" type="text/css">
</head>
<body>
<h1>Tarea XYZ ( 3 )</h1>
<nav><a href="index.php">Mis Tareas</a><nav>
<!-- Un separador  -->
<hr />
<h2>Comentarios : </h2>
<dl>
	<dt>1/1/2013<dt>
	<dd>Se incio este trabajo <dd>
	<dt>1/2/2013<dt>
	<dd>Es muy divertido hacerlo<dd>
	<dt>1/3/2013<dt>
	<dd>Espero que les guste lo que hago.<dd>
</dl>
<form method="POST">
<span>Comentario  </span><br/>
<textarea name="comentario">

</textarea>
<br />
<input type="submit" value="Comentar"/>
</form>
</body>
</html>