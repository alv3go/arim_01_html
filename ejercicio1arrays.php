<center><h1>Ejercicio 1</h1></center>
<h2>Crea un array con los días de la semana y muestra el que te indique el usuario a través de un formulario con un campo de tipo select</h2>
<?php
//arrays
$dia = [
	'caca',
	'Lunes',
	'Martes',
	'Miercoles',
	'Jueves',
	'Viernes',
	'Sábado',
	'Domingo',
	
];

?>
<form>
<button onclick="seleccionar()"> seleccionar </button>

<?php
$txt='<select name="n_dia">';
for ($i=1; $i<= 7; $i++)
	$txt.='<option>'.$i.'</option>';
$txt.='</select>';
echo $txt;
?>
</form>
<?php
echo $dia[$_GET["n_dia"]];
?>

<div id="x" </div>

<div id="r" </div>