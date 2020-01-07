function centrarVertical(id) {
	var alturaVentana=window.innerHeight;
	var elemento=document.getElementById(id);
	var alturaElemento=elemento.clientHeight;

	elemento.style.paddingTop=(alturaVentana-alturaElemento)/2+'px';
}
function desplegar(id,final){
	var elemento=document.getElementById(id);
	var ALTURA_FINAL=final;//px

	if(elemento.clientHeight<ALTURA_FINAL)
	{
		//elemento.style.height=ALTURA_FINAL+'px';
		transition.begin(elemento, ['height', '0px', ALTURA_FINAL+'px', '1000ms', 'ease-in-out']);
	}else
	{
		transition.begin(elemento, ['height', ALTURA_FINAL+'px', '0px', '1000ms', 'ease-in-out']);
	}
	
}




function main(){
	//Se implementa en cada vista
}

function codeViewerXML(){
  	var codeAreas=document.getElementsByClassName('code-viewer-xml');
  	if(codeAreas.length!=0){
		for(var a=0;a<codeAreas.length;a++){
			var editor = CodeMirror.fromTextArea(codeAreas[a], {
				lineWrapping:true,
			    lineNumbers: true,
			    readOnly: true,
				styleActiveLine: true,
			    mode:  'xml',
			    viewportMargin: Infinity,
			    theme: "material"
			  });
		}
	}
}

codeViewerXML('xml');

function existeArray(array){
	if(array.length){return true;}
	else{return false;}
}

function scrollSet(){
	var elementos = document.getElementsByClassName("principal");

	if(existeArray(elementos)){
		var navbar = document.getElementById("nav");
		var browserHeight = parseInt(window.innerHeight);
		var navbarHeight = parseInt(window.getComputedStyle(navbar, null).getPropertyValue("height"));

		for(var i=0;i<elementos.length;i++){
			elementos[i].style.height = browserHeight-navbarHeight+"px";
		}
	}else{
		document.getElementsByTagName("BODY")[0].style.overflowY="scroll";
	}
}

function VerOcultarIndice(){
	var elemento = document.getElementsByClassName("indice")[0];

	if(window.getComputedStyle(elemento, null).getPropertyValue("display").localeCompare("none")==0){
		elemento.style.display="block";
	}else{
		elemento.style.display="none";
		
	}

	var listIndice = document.getElementById("entradas-indice").getElementsByTagName("li");

	try {
		for(var i=0;i<listIndice.length;i++){
			listIndice[i].removeEventListener("click", function(){
				elemento.style.display="none";
			});
		}
	
	  }
	  catch(error) {}
	
	
	for(var i=0;i<listIndice.length;i++){
		listIndice[i].addEventListener("click", function(){elemento.style.display="none";});
	}

}
function esUnMobil() { 
	if( navigator.userAgent.match(/Android/i)
	|| navigator.userAgent.match(/webOS/i)
	|| navigator.userAgent.match(/iPhone/i)
	|| navigator.userAgent.match(/iPad/i)
	|| navigator.userAgent.match(/iPod/i)
	|| navigator.userAgent.match(/BlackBerry/i)
	|| navigator.userAgent.match(/Windows Phone/i)
	){
	   return true;
	 }
	else {
	   return false;
	 }
   }

function controlVisualizacionIndice(){

	var breakPoint_1=800;
	var indice = document.getElementsByClassName("indice")[0];
	var botonIndice = document.getElementsByClassName("indice-switch")[0];
	var anchuraNavegador=parseInt(window.innerWidth);

	if(anchuraNavegador>breakPoint_1){
		indice.style.display="block";
		botonIndice.style.display="none";
	}else{
		indice.style.display="none";
		botonIndice.style.display="block";
	}
}

window.onload = function(){scrollSet()};
window.onresize = function(){
	if(!esUnMobil()){scrollSet()}
	if(existeArray(document.getElementsByClassName("indice"))){
		controlVisualizacionIndice();
	}
};
