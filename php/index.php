<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <link rel="stylesheet" type="text/css" href="index.css"/>
  <title>Mini Calculadora Básica</title>
</head>
<body>
  <a href="http://openshift.com" class="brand">
    <img class="brand-image"
      alt="OpenShift logo"
      src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAgCAYAAABU1PscAAAAAXNSR0IArs4c6QAAAAZiS0dEAAAAAAAA+UO7fwAAAAlwSFlzAAARHgAAER4B27UUrQAABUhJREFUWMPFWFlsVGUU/s5/70zbaSltA7RQpJ2lC9CFkQkWIgSJxkAhRA0JCYFq4hPG6JsoGKNCtPigxqhvGlPAuGIaE4igNaElbIW2yNL2tkOtTYGWCqWF2e79fCh7p1Bmpnge/3vuOef7z/nPJiTxMHS6pMRuu6YqFNTTAJYSyAU4GZB0AH2AGCANAfc5Qrba6T3HrmECScYLwCioSIcV2AjidQDZ45Q/LJRaWrLV03X89P8GwHB5XwG4DcDkGPWEBKimNrzN094efGQAzjm9GWHFr4R4LiHKgFaSL3r8zYcmHEBbkW+KFo7UEyhKsNeHlMgyV8eJo4kQpqId9ub6HCoc+XWcxl8lcBTATwDax8GfZtHa054/f/bNg8ZcnyOhHjBc834E8MJ9/vML8aYZQX1hd1PP3WFXkhMRfYkIlpOoGomc0WRRTnch+XAQWG2KTNJNLbuy68C/cQMwXOWrAKkdgz8A8kMdg9X5fn/gQcI7POXLaMk3AGbe/P8SbF0D1KcGRGXpIJJpIQkWBHhnsf/Ie3GF0DmnMxmQT8bg7RellXr8ze+Ox3gAcBvNf+iUUhH5FODLSvScAerDGpiVxTAyGUYKzICA34nCwbhDyHB7N4L8PAofhVzh9jfvjffR/ZZTnupIsR8G0C9EjW7Tfnii/dBgrPL0u83kmjHy33Z3Z/zG97uKi7xpWA8GHZpE1mcZRne8MvXblfbxqQAWR+Fp+mdW5hZPjAqu5JVlhrTwOgrXi2ABbjjchF4FYGvi0qhprgagjYod4OeldXWRWBUEtdBjEH4mwIJ7vF2V4Dqgot0+NEFdPAqmdZ5tAXA8Slx6LrpKsxMHQJge5ft1v0oe2OOu+PZ39+LCOFqImqiXo8JzAeBkXlnmnoKK9LgACJl2R9gELsHW1saUwKCpnbIoa8UMTokVgGXJmSjHkfNWUlWDy9d6USVdyoiEF8b1iElxQKHuPG1D/bCtVEBhCiykMQQFgCK2mN2sSx+tkdcbhGq7wKSkK9RnmsCG2xVSLsflAR1S6eloWhawtF8yGJGskSJDBdQR8pIjZMXcfFmm1gOg2lRaSRdT1AD1PBPQbCAyxcRMifCpc41HEtILNbh9s8SSvYTUmBp2LDGOdCOB1OD0XbeByWliwY5bugc9nU2T4wqhCx7PNAV9bSGwARp3TzVaP0j09GQUzJubLUgefY3SEHMh63MVr4FIlYL+7C1AlCwAmxM+/plYy6hhgN2xp1HBawAr72krnH3uoicTaXyHx7uIwKZoT0QhUhszAAI7x7ivL0a60/jp77yyTFrWt6N6rxE99c7OkxdiBhC2y/cAorXHpama/aNG8dkOO32b6p3zTzXmeysfPu4LkkKafA3IrGjfCfPtuGfiPlfx+xBsuWtwpa3zIuy2YaoZ5o0eSQc5TVnb53aeeAuk9eBtRvkqUH0MoTsqA7nL429eFzeA3lyfQ08eaiNgCrjTYNozQ1S+WyUfQCosTLqZ+oiDUNwhggPujpZTuCMXGwUV6cJgKYnNIJffR3df2NLLZ5871puQrUR//pzpU7rOnAfJP53eDELrsoPpk4RIGRn5xqIBAAdBOCAoBjBjPJsJUdZSt9HSOGFrld5cn2M4KbwfkIUJzqYhQlYWdJ7YN2FrFQCY3nPsmk61AuSuRNYyUdaiRBk/7tViR37Zcir1JYC8WNshgjWWPfhq0dmzVx/5bhQAWnLKU1Md8gZHOsjxAgmD2GEKq4s6m1sxASQPu16HiBh53goqPg9ac0TEcwNQEOBlQAZEcMgC94dDZt2c7r8GMIH0H43ZRDC51RVCAAAAAElFTkSuQmCC">
    <div class="brand-text"><strong>Open</strong>Shift</div>
  </a>
  <h1>Práctica 1: Creación y despliegue de una aplicación en un PaaS</h1>
  <h2>Infraestructura virtual</h2>
  <p>Aplicación en PHP que se encarga de realizar una operación matemática.</p>
  <p>La aplicación es una mini calculadora en donde el usuario introduce dos números y según la operación que desee realizar pulsa el botón correspondiente, mostrándole a continuación al usuario el resultado de su operación. </p>  
  <h2>Calculadora</h2>
	<?php
		$x = $_POST['a'];
		$y = $_POST['b'];

		if(isset($_POST['suma'])){
			$res = $x + $y;
			echo "<p>La suma de $x + $y es: $res</p>";
		}

		if(isset($_POST['resta'])){
			$res = $x - $y;
			echo "<p>La resta de $x - $y es: $res</p>";
		}

		if(isset($_POST['mult'])){
			$res = $x * $y;
			echo "<p>La multiplicacion de $x * $y es: $res</p>";
		}

		if(isset($_POST['div'])){
			if($y != 0)
				$res = $x / $y;
			else
				$res = 0;

			echo "<p>La division de $x / $y es: $res</p>";
		}
	?>

	<script type="text/javascript">
		//Función para validar que el usuario no introduce la cadena vacia ni ningún caracter e introduce solamente números
		function validarFormulario(formulario){
			if(formulario.a.value.length == 0){ 
				formulario.a.focus();
				alert('No has introducido el valor A');
				return false;
			}

			if(isNaN(formulario.a.value)){
				formulario.a.focus();
				alert('Debes introducir un número en el valor A');
				return false;
			}

			if(formulario.b.value.length == 0){
				formulario.b.focus();
				alert('No has introducido el valor B');
				return false;
			}

			if(isNaN(formulario.b.value)){
				formulario.b.focus();
				alert('Debes introducir un número en el valor B');
				return false;
			}

			return true;
		}
	</script>
	<section id="centro">
		<form action="http://practica1-jcastilloprez.rhcloud.com/" method="post" onsubmit="return validarFormulario(this);">
			<label for="a">Valor A: </label> 
			<input type="number" name="a" value="" /> 
			<label for="b">Valor B: </label>
			<input type="number" name="b" value="" />	<br><br>
			<input type="submit" name = "suma" value="Sumar" />
			<input type="submit" name = "resta" value="Restar" />
			<input type="submit" name = "mult" value="Multiplicar" />
			<input type="submit" name = "div" value="Dividir" />
		</form>
	</section><br>
	<p id="sub">Aplicación realizada por: José Manuel Castillo Pérez</p>
</body>
</html>
