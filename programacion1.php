<h1> Ejercicio 1 </h1>
<h2> Utilizando la fórmula del área del trapecio A=(B+b)*h/2, determina la base mayor de un trapecio de altura 4 cm y de superficie 14cm2, sabiendo que la base menor es de 2</h2>
<form>
Área<input id="A" name="A" placeholder="Área" value="14" onkeyup="calcular()"/>
Base menor<input id="b" name="b" placeholder="Base menor" value="2" onkeyup="calcular()"/>
Altura<input id="h" name="h" placeholder="Altura" value="4" onkeyup="calcular()"/>
<button onclick="calcular()"> Calcular </button>
</form>
<div id="B" style="
padding:20px;
background-color:yellow;
">
Resultado
</div>
<script>
//alert('hola mundo')
//console.log('hola otra vez')
function calcular(){
	A=document.getElementById("A").value;
	b=document.getElementById("b").value;
	h=document.getElementById("h").value;
	B=2*A/h -b;
	document.getElementById('B').innerHTML= B+'cm';
	}calcular();
</script>
<?php
//if(isset($_GET)) print_r($_GET);
?>

<h1> Ejercicio 2 </h1>
<h2>Se quiere construir un jardín de 1 m de ancho alrededor de una fuente circular de 4 m de diámetro. Para rodear el jardín con una valla, ¿cuántos m lineales son necesarios?</h2>
<form>
Radio fuente<input id="R" name="R" placeholder="Radio fuente" value="2000" onkeyup="resolver()"/>
Ancho jardín<input id="r" name="r" placeholder="Ancho jardin" value="1000" onkeyup="resolver()"/>
<button onclick="resolver()"> Resolver </button>
</form>
<div id="X" style="
padding:20px;
background-color:yellow;
">
Resultado
</div>
<script>
//alert('hola mundo')
//console.log('hola otra vez')
function resolver(){
	R=document.getElementById("R").value;
	r=document.getElementById("r").value;
	r=parseInt(r);
	R=parseInt(R);
	X= 2*Math.PI*(R+r);
	document.getElementById('X').innerHTML= X+'mm';
	}resolver();
</script>
<?php
//if(isset($_GET)) print_r($_GET);
?>

<h1> Ejercicio 3 </h1>
<h2>Un grupo hostelero acude a una pescadería y compra 160 kg, en total, de bocarte y bonito. El precio del bonito es de 6 EUR/kg y el precio del bocarte es de 2 EUR/kg. Si paga por la compra 576 euros. Calcula los kg de bonito y los kg de bocarte que ha comprado</h2>
<form>
Kilos compra<input id="Kg" name="Kg" placeholder="Kilos compra" value="160" onkeyup="solucionar()"/>
Precio Bonito<input id="Bonito" name="Bonito" placeholder="Precio bonito" value="6" onkeyup="solucionar()"/>
Precio Bocarte<input id="b" name="b" placeholder="Precio bocarte" value="2" onkeyup="solucionar()"/>
Precio compra<input id="P" name="P" placeholder="Precio compra" value="576" onkeyup="solucionar()"/>

<button onclick="solucionar()"> solucionar </button>
</form>
<div id="J" style="
padding:20px;
background-color:yellow;

">
Kilos Bonito
</div>
<div id="Y" style="
padding:20px;
background-color:yellow;

">
Kilos bocarte
</div>

<script>
//alert('hola mundo')
//console.log('hola otra vez')
function solucionar(){
	Kg=document.getElementById("Kg").value;
	P=document.getElementById("P").value;
	Bonito=document.getElementById("Bonito").value;
	b=document.getElementById("b").value;
	Y=document.getElementById("Y").value;
	J=document.getElementById("J").value;
	J=parseInt(J);
	Y=parseInt(Y);
	Kg=parseInt(Kg);
	P=parseInt(P);
	Bonito=parseInt(Bonito);
	b=parseInt(b);
	Y= (P-Bonito*Kg)/(-Bonito+b);
	J= Kg-Y;
	console.log(Kg);
	console.log(P);
	console.log(Bonito);
	console.log(b);
	document.getElementById('Y').innerHTML= Y+'kg bonito';
	document.getElementById('J').innerHTML= J+'kg bocarte';
	}solucionar();
	
	
	
</script>
<?php
//if(isset($_GET)) print_r($_GET);
?>

<h1> Ejercicio 4 </h1>
<h2>Se quiere construir un depósito abierto de base cuadrada y paredes verticales con capacidad para 13.5 m3. Para ello se dispone de una chapa de acero de grosor uniforme. Calcula las dimensiones del depósito para que el gasto en chapa sea el mínimo posible</h2>
<form>
Volumen<input id="Vol" name="Vol" placeholder="Volumen" value="13.5" onkeyup="completar()"/>


<button onclick="completar()"> completar </button>
</form>
<div id="L" style="
padding:20px;
background-color:yellow;

">
Lado
</div>
<div id="Alt" style="
padding:20px;
background-color:yellow;

">
Altura
</div>

<script>
//alert('hola mundo')
//console.log('hola otra vez')
function completar(){
	Vol=document.getElementById("Vol").value;
	Alt=document.getElementById("Alt").value;
	L=document.getElementById("L").value;
	
	Vol=parseInt(Vol);
	Alt=parseInt(Alt);
	L=parseInt(L);
	
	
	
	
	L=Math.pow(2*Vol,1/3);
	Alt= Vol/Math.pow(L,2);
	document.getElementById('L').innerHTML= L+'m';
	document.getElementById('Alt').innerHTML= Alt+'m';
	}completar();
	
	
	
</script>
<?php
//if(isset($_GET)) print_r($_GET);
?>