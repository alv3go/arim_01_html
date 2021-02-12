<? php if(!isset($_GET['dia'])) $_GET['dia']=1; ?>
<h1> Ejercicio 3</h1>
<h2>Crea un array con los dias de la semana y muestra el que te indique el usuario a través de un formulario con un campo de texto</h2>
<br>
</br>
<form>
<input name="dia" id="dia" onkeyup="calcular()" value="<?=$_GET['dia']?>"/>
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
<br>
</br>
<div id="r"/>
<script>
function calcular(){
dias = [
	'Lunes',
	'Martes',
	'Miercoles',
	'Jueves',
	'Viernes',
	'Sábado',
	'Domingo',
	
];

dia=document.getElementById('dia').value;
for(i=0; i<6; i++){
	if(dia==i){
	document.getElementById('r').innerHTML =dias[i-1];	
}}}
calcular();
</script>