<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href = "css/estilos3.css">
	<title>Cuestionario</title> 	
</head>
<body>
	<div class="contenedor">
		<h1 class="titulo"><p>PHQ-9</p>CUESTIONARIO DE LA SALUD DEL PACIENTE - 9</h1>

		<br> 

		<h2>Durrante las útimas 2 semanas ¿qué tan seguido ha tenido molestias debido a los siguientes problemas?</h2>
		      
			<section id="p0">
				<h3>Poco interés o placer en hacer cosas</h3>
				<label>
					<input type="radio" name="p0" value="1" onclick="respuesta(0,this)"> 0= Ningún día
				</label>
				<label>
					<input type="radio" name="p0" value="2" onclick="respuesta(0,this)"> 1= Varios días
				</label>
				<label>
					<input type="radio" name="p0" value="3" onclick="respuesta(0,this)"> 2= Más de la mitad de los días
				</label>
				<label>
					<input type="radio" name="p0" value="4" onclick="respuesta(0,this)"> 3=Casi todos los días
 
				</label>
			</section>

			<section id="p1">
				<h3>Se ha sentido decaido(a), deprimido(a) o sin esperanzas</h3>
				<label>
					<input type="radio" name="p1" value="1" onclick="respuesta(1,this)" > 0= Ningún día
				</label>
				<label>
					<input type="radio" name="p1" value="2" onclick="respuesta(1,this)" > 1= Varios días
				</label>
				<label>
					<input type="radio" name="p1" value="3" onclick="respuesta(1,this)" > 2= Más de la mitad de los días
				</label>
				<label>
					<input type="radio" name="p1" value="4" onclick="respuesta(1,this)" > 3=Casi todos los días

				</label>
			</section>

			<section id="p2">
				<h3>Ha tenido dificultadad para quedarse o permanecer dormido(a), o ha dormido demasiado</h3>
				<label>
					<input type="radio" name="p2" value="1" onclick="respuesta(2,this)"> 0= Ningún día
				</label>
				<label>
					<input type="radio" name="p2" value="2" onclick="respuesta(2,this)"> 1= Varios días
				</label>
				<label>
					<input type="radio" name="p2" value="3" onclick="respuesta(2,this)"> 2= Más de la mitad de los días
				</label>
				<label>
					<input type="radio" name="p2" value="4" onclick="respuesta(2,this)"> 3=Casi todos los días

				</label>
			</section>

			<section id="p3">
				<h3>Se ha sentido cansado(a) o con poca energía.</h3>
				<label>
					<input type="radio" name="p3" value="1" onclick="respuesta(3,this)"> 0= Ningún día
				</label>
				<label>
					<input type="radio" name="p3" value="2" onclick="respuesta(3,this)"> 1= Varios días
				</label>
				<label>
					<input type="radio" name="p3" value="3" onclick="respuesta(3,this)"> 2= Más de la mitad de los días
				</label>
				<label>
					<input type="radio" name="p3" value="4" onclick="respuesta(3,this)"> 3=Casi todos los días

				</label>
			</section>

			<section id="p4">
				<h3>Sin apetito o ha comido en exceso.</h3>
				<label>
					<input type="radio" name="p4" value="1" onclick="respuesta(4,this)"> 0= Ningún día
				</label>
				<label>
					<input type="radio" name="p4" value="2" onclick="respuesta(4,this)"> 1= Varios días
				</label>
				<label>
					<input type="radio" name="p4" value="3" onclick="respuesta(4,this)"> 2= Más de la mitad de los días
				</label>
				<label>
					<input type="radio" name="p4" value="4" onclick="respuesta(4,this)"> 3=Casi todos los días

				</label>
			</section>

			<section id="p5">
				<h3>Se ha sentido mal con usted mismo(a) o que es un fracaso o que ha quedado mal con usted mismo(a) o con su familia.</h3>
				<label>
					<input type="radio" name="p5" value="1" onclick="respuesta(5,this)"> 0= Ningún día
				</label>
				<label>
					<input type="radio" name="p5" value="2" onclick="respuesta(5,this)"> 1= Varios días
				</label>
				<label>
					<input type="radio" name="p5" value="3" onclick="respuesta(5,this)"> 2= Más de la mitad de los días
				</label>
				<label>
					<input type="radio" name="p5" value="4" onclick="respuesta(5,this)"> 3=Casi todos los días

				</label>
			</section>

			<section id="p6">
				<h3>Ha tenido dficuliad para concentrarse en ciertas actividades, tales como leer el periódico o ver la televisión.</h3>
				<label>
					<input type="radio" name="p6" value="1" onclick="respuesta(6,this)"> 0= Ningún día
				</label>
				<label>
					<input type="radio" name="p6" value="2" onclick="respuesta(6,this)"> 1= Varios días
				</label>
				<label>
					<input type="radio" name="p6" value="3" onclick="respuesta(6,this)"> 2= Más de la mitad de los días
				</label>
				<label>
					<input type="radio" name="p6" value="4" onclick="respuesta(6,this)"> 3=Casi todos los días

				</label>
			</section>	

			<section id="p7">
				<h3>¿Se ha movido o hablado tan lento que otras personas podrían a verlo notado? o lo contrario muy inquieto(a) o agitado(a) que ha estado moviéndose mucho más de lo normal.</h3>
				<label>
					<input type="radio" name="p7" value="1" onclick="respuesta(7,this)"> 0= Ningún día
				</label>
				<label>
					<input type="radio" name="p7" value="2" onclick="respuesta(7,this)"> 1= Varios días
				</label>
				<label>
					<input type="radio" name="p7" value="3" onclick="respuesta(7,this)"> 2= Más de la mitad de los días
				</label>
				<label>
					<input type="radio" name="p7" value="4" onclick="respuesta(7,this)"> 3=Casi todos los días

				</label>
			</section>	

			<section id="p8">
				<h3>Pensamientos de que estaría mejor muerto(a) o de las timarse de alguna manera.</h3>
				<label>
					<input type="radio" name="p8" value="1" onclick="(8,this)"> 0= Ningún día
				</label>
				<label>
					<input type="radio" name="p8" value="2" onclick="(8,this)"> 1= Varios días
				</label>
				<label>
					<input type="radio" name="p8" value="3" onclick="(8,this)"> 2= Más de la mitad de los días
				</label>
				<label>
					<input type="radio" name="p8" value="4" onclick="(8,this)"> 3=Casi todos los días

				</label>
			</section>	
		
		<button onclick="corregir()">prueva</button>
			<!--<a  onclick="corregir()">Enviar</a>-->

			<!--href="resultado.php"--> 

			</div>

		<div>
	
	</div>
	<script type="javaScrip/script.js"></script>


</body>
</html>