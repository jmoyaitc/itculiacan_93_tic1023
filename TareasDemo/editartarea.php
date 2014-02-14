<?php
  // Nada de codigo aun. solo el html.
require_once("tareas.repo.php");
// Hablamos de esto en clase pero aqui para mas informacion ver.  
// Es importante considerar que se puede pasar variables maliciosas pero por el momento no nos preocupamos de esto.
//  http://www.php.net/manual/es/reserved.variables.get.php
$id = $_GET['id'];
$tarea = LeerTarea($id); 
  
?><DOCTYPE html>
<html>
<head>
<title>Editar  <?php echo $tarea["descripcion"]; ?></title>
<LINK href="site.css" rel="stylesheet" type="text/css">
</head>
<body>
<h1>Editar  <?php echo $tarea["descripcion"]; ?></h1>
<nav><a href="index.php">Mis Tareas</a><nav>
<!-- Un separador  -->
<hr />
<form method="POST">
<label for="descripcion">Tarea : </label>
<input type="text" value="<?php echo $tarea["descripcion"]; ?>" name="descripcion" /> <br />
<label for="prioridad">Prioridad : </label>
<select name="prioridad">
	<?php
		for( $i = 1 ; $i <= 5 ; $i++) {
			if($i == $tarea["prioridad"]) {
				?><option selected><?php echo $i;  ?></option>
			<?php
			}else {
			?><option ><?php echo $i;  ?></option>
			<?php }
		}
	?>
</select>
<br />
<label for="completado"> Completada : </label>
<select name="completado">
	<?php if($tarea["completado"] == "Si") {
		?>
		<option selected>Si</option>
		<option>No</option>
		<?php
	}else {
	?>
		<option>Si </option>
		<option selected>No </option>
		<?php
	}?>
	
</select>
<br/>
<input type="submit" value="Actualizar"/>
</form>
</body>
</html>