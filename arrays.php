<? php if(!isset($_GET['n_mes'])) $_GET['n_mes']=1; ?>
<center><h1>Ejercicio 2</h1></center>
<h2>Crea un array con los meses del año y muestra el que te indique el usuario a través de un formulario con un campo de tipo select</h2>
<?php
//arrays
$mes = [
	'No hay mes 0.',
	'enero',
	'febrero',
	'marzo',
	'abril',
	'mayo',
	'junio',
	'julio',
	'agosto',
	'septiembre',
	'octubre',
	'noviembre',
	'diciembre',
];
?>
<form>
<button onclick="seleccionar()"> seleccionar </button>
<?php
$txt='<select name="n_mes" id="x" onchange="determinar()">';
for ($i=1; $i<= 12; $i++)
	$txt.='<option>'.$i.'</option>';
$txt.='</select>';
echo $txt;
?>
</form>
<div style="background-color:pink;"id="meses">resultado j</div>
<?php
echo $mes[$_GET["n_mes"]];
?>
<div id="x" </div>
<script>
function  determinar(){
mes  =  [
	'enero',
	'febrero',
	'marzo',
	'abril',
	'mayo',
	'junio',
	'julio',
	'agosto',
	'septiembre',
	'octubre',
	'noviembre',
	'diciembre',
] ;
meses= document.getElementById('x').value ;

document.getElementById('meses').innerHTML= mes[meses-1];
}
determinar();
</script>