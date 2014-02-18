<?php
  // Nada de codigo aun. solo el html.
  require_once("tareas.repo.php");
	$id = $_GET['id'];
	$tarea = LeerTarea($id); 
	// Normalente estos datos puden salir directamente de LeerTarea, pero para simplificar utilizaremos una funcion aparte. 
	$comentarios = LeerComentarios($id);
?><DOCTYPE html>
<html>
<head>
<title><?php echo $tarea["descripcion"]; ?></title>
<LINK href="site.css" rel="stylesheet" type="text/css">
</head>
<body>
<h1><?php echo $tarea["descripcion"]; ?> ( <?php echo $tarea["prioridad"]; ?> )</h1>
<nav><a href="index.php">Mis Tareas</a><nav>
<!-- Un separador  -->
<hr />
<h2>Comentarios : </h2>
<dl>
	<?php
		foreach($comentarios as $c) {
			?><dt><?php echo $c["fecha"]  ?></dt>
			   <dd><?php echo $c["comentario"]; ?></dd>
			<?php
		}
	?>
</dl>
<form method="POST" action="comentartarea.post.php">
<span>Comentario  </span><br/>
<textarea name="comentario">

</textarea>
<br />
<input type="hidden" name="id" value="<?php echo $tarea["id"]; ?>" />
<input type="submit" value="Comentar"/>
</form>
</body>
</html>