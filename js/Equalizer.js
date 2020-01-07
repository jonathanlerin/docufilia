class Equalizer {
  constructor(className) {
            this.equalizing(className);
        }

 equalizing(className){

    var elementaHeightEqualTo=document.getElementsByClassName(className);
    var heightsElments= [];

    //Obtener entero de pixeles de todos los

    for (var i = elementaHeightEqualTo.length - 1; i >= 0; i--) {
      heightsElments[i]=parseInt(window.getComputedStyle(elementaHeightEqualTo[i], null).getPropertyValue("height"), 10);
    }

    //Ordenar de manera descendente
    heightsElments.sort(function(a, b){return b-a});
     //Obtener la altura del elemento más alto
    const heightHeighiestElement= heightsElments[0];

    //Igual todos elementos con la altura más alta
     for (var i = elementaHeightEqualTo.length - 1; i >= 0; i--) {
      elementaHeightEqualTo[i].style.height =heightHeighiestElement+'px';
    }
  }
}


var igualador;

window.onload= function(){igualador = new Equalizer("heightEqualTo");}

function OnresizeEqualizer(){
   igualador = new Equalizer("heightEqualTo");
  
}
