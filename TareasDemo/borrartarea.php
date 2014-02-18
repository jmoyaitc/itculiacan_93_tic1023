<?php
  // Nada de codigo aun. solo el html.
  require_once("tareas.repo.php");

$id = $_GET['id'];
$tarea = LeerTarea($id); 
?><DOCTYPE html>
<html>
<head>
<title>Borrar <?php echo $tarea["descripcion"]; ?></title>
<LINK href="site.css" rel="stylesheet" type="text/css">
</head>
<body>
<h1>Borrar <?php echo $tarea["descripcion"]; ?></h1>
<nav><a href="index.php">Mis Tareas</a><nav>
<!-- Un separador  -->
<hr />
<form method="POST" action="borrartarea.post.php" >
<h2>Seguro que desea hacer esto? </h2>
<dl>
<dt>
	Tarea :
<dt>
<dd><?php echo $tarea["descripcion"]; ?><dd>
<dt>Prioridad : </dt>
<dd><?php echo $tarea["prioridad"]; ?><dd>
<dt>Completada : </dt>
<dd><?php echo $tarea["completado"]; ?><dd>
</dl>
<br />
<input type="submit" value="Borrar"/>
</form>
</body>
</html>