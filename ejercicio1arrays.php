<? php if(!isset($_GET['n_dia'])) $_GET['n_dia']=1; ?>
<center><h1>Ejercicio 1</h1></center>
<h2>Crea un array con los dias de la semana y muestra el que te indique el usuario a través de un formulario con un campo de tipo select</h2>
<?php
//arrays
$dia = [
	'No hay mes 0.',
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
$txt='<select name="n_dia" id="x" onchange="determinar()">';
for ($i=1; $i<= 7; $i++)
	$txt.='<option>'.$i.'</option>';
$txt.='</select>';
echo $txt;
?>
</form>
<div style="background-color:pink;"id="resultado">resultado j</div>
<?php
echo $dia[$_GET["n_dia"]];
?>

<script>
function  determinar(){
dia =  [
	'Lunes',
	'Martes',
	'Miercoles',
	'Jueves',
	'Viernes',
	'Sábado',
	'Domingo',
	
] ;
dias= document.getElementById('x').value ;

document.getElementById('resultado').innerHTML= dia[dias-1];
}
determinar();
</script>