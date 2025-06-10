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

$numero = 7;
$factorial = 1;
for ($i = 1; $i <= $numero; $i++) {
	$factorial *= $i;
}

$option = 0;
$option = intval(trim(fgets(STDIN)));

switch ($option) {
	case 1:
		echo "Opción 1 seleccionada";
		break;
	case 2:
		echo "Opción 2 seleccionada";
		break;
	default:
		echo "Opción no válida";
		break;
}
echo "El factorial de $numero es $factorial";

?>