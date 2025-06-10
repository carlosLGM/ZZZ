<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Welcome to CodeIgniter</title>
</head>
<body>
<div class="container">
	<h1>Welcome to </h1>
	<input type="text" id="nota" alt="NOTA" placeholder="NOTA DEL ESTUDIANTE">
</div>
</body>
</html>

<?php

$nota = 89;
$asistencias = 89;//en porcentajes

echo "La nota inicial es: $nota <br>";
echo "El porcentaje de asistencia es de: $asistencias %<br>";

echo $asistencias<=90 ? "se aplica promocion".$nota+=5 : "no se aplica promocion<br>";

if($nota > 100){
	$nota=100;
}
echo "<br>la nota final es $nota";




?>