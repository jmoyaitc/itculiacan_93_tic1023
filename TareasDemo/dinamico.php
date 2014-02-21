<?php
// Este es una paguina que solo genera fragmentos de html para ser insertados dinamicament. 
// America/Hermosillo es la hora a la que estamos segun php. http://www.php.net/manual/en/timezones.america.php
// No es terriblemente importante esto. 
date_default_timezone_set('America/Hermosillo');
$date = date('m/d/Y h:i:s a', time());
// SImulamos una tarea muy costosa en tiempo. 
// http://php.net/sleep

//Dormir por 5 segundos
sleep(5);
$date2 = date('m/d/Y h:i:s a', time());

// Para el reto utilizar esta simple tecnica nomas que en lugar de regresar los datos aqui mostrados, regresar la lista de Contactos. 
?>
<dl>
	<dt>Tiempo Inicial:</dt>
	<dd><?php echo $date; ?></dd>
	<dt>Tiempo Final:</dt>
	<dd><?php echo $date2; ?></dd>
</dl>
<div>Cargado dinamicamente usando AJAX!!! </div>

