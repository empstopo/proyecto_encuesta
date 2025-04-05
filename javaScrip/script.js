labe//arrreglo de las respuetas correctas 
let correctas = [0,0,0,0,0,0,0,0,0];

//arreglo de las respuetas del usuario 
let opcion_elegida = [];

let catidad_correctas = 0;

//funcion que toma el num de pregunta y el input elegido de esa pregunta
function respueta(num_pregunta, seleccionada) {
 	// guardo la respuesta elegida 
 	opcion_elegida[num_pregunta] = seleccionada.value;
 	
 	/*El siguiente codigo es para poner en blanco el fondo 
 	  de los inputs para cuando eliga otra opcion y el armado del id
 	  para la seleccionar  el section correspondiente */

 	id = "p" + num_pregunta;

 	labels = document.getElemenById(id).childNodes;

 	labels[3].style.backgroundColor = "white";
 	labels[5].style.backgroundColor = "white";
 	labels[7].style.backgroundColor = "white";

 	//Se leda el color al label selecccionado 
 	seleccionada.parentNode.style.backgroundColor = "#CEC0FC";

 } 

 //Funcion que compara los arreglos para seber cuantas estan bien 

 function corregir(){
 	catidad_correctas = 0;
 	for (var i = 0; i < correctas.length; i++) {
 		if (correctas[i] == opcion_elegida[i]){
 			catidad_correctas ++;
 		}
 	}

 	document.getElemenById("resultado").innerHTML = catidad_correctas;
 }