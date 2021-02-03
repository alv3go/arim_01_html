  <h1> Ejercicio 3</h1>
<h2>Crea un array con los dias de la semana y muestra el que te indique el usuario a través de un formulario con un campo de texto</h2>
<br/>
</br>
<form>
<input name="dia"/>
</form>
<?php
$dias = [
	'Lunes',
	'Martes',
	'Miercoles',
	'Jueves',
	'Viernes',
	'Sábado',
	'Domingo',
	
];
$dia= $_GET['dia'];
foreach ($dias as $n=>$d){
if ($n==$dia-1){
echo $d;
}}

?>
</br>
</br>