$(document).ready(function(){
    $('.fixed-action-btn').floatingActionButton();
  });

$(document).ready(function(){
    $('.slider').slider();
  });

$(document).ready(function(){
    $('.tap-target').tapTarget();
  });

$(".dropdown-trigger").dropdown();

$(document).ready(function(){
    $('.sidenav').sidenav();
  });

document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.tooltipped');
    var instances = M.Tooltip.init(elems, options);
  });

/*anime.timeline({loop: true})
  .add({
    targets: '.ml15 .word',
    scale: [14,1],
    opacity: [0,1],
    easing: "easeOutCirc",
    duration: 800,
    delay: function(el, i) {
      return 1000 * i;
    }
  }).add({
    targets: '.ml15',
    opacity: 0,
    duration: 1000,
    easing: "easeOutExpo",
    delay: 5000
  });*/


var hotbod = document.querySelector("body");

function doStuff() {
    hotbod.className += " animate";
}

window.onload = function() {
    doStuff();
};

$( function() {
  $( "#draggable1" ).draggable();
  $( "#draggable2" ).draggable();
  $( "#draggable3" ).draggable();
  $( "#draggable4" ).draggable();
  $( "#draggable5" ).draggable();
  $( "#draggable6" ).draggable();
  $( "#draggable7" ).draggable();
  $( "#draggable8" ).draggable();
  $( "#draggable9" ).draggable();
  $( "#draggable10" ).draggable();
  $( "#draggable11" ).draggable();

} );

//*Loto compo



$(function(){
   //*
   // FONCTIONS
   //*
//fonction de création d'un nombre aléatoire compris entre [1 et max]
function nbAleatoire(max) {
   return Math.floor(Math.random() * (max)) + 1;
}

//*******************
//** FIN FONCTIONS **
//*******************



//***************
//** CODE LOTO **
//***************

//déclaration d'un tableau qui va contenir les numéros de 1 à 49
let tabNumLoto=[];
//boucle pour avoir les 49 numéros dans le tableau
for(let i=0;i<11;i++){
   tabNumLoto[i]=i+1;
}

//maintenant on va piocher 5 fois un numéro en le supprimant ensuite du tableau pour vraiment simuler le loto réel
//on met bien var et non let pour accéder à k pour le numero chance
for(var j=0;j<6;j++){
   //obtention d'un nombre aléatoire avec comme nombre maximum, la longueur du tableau (49 au départ)
   let nb = nbAleatoire(tabNumLoto.length);
   //création des balises html créant une balle de loto avec le nombre aléatoire
   $('#sectionTirage').append('<div class="tirage" id="tirage'+j+'"><div class="balle"><div class="numero" id="numero'+j+'"><div>'+tabNumLoto[nb-1]+'</div><div class="souligne"></div></div></div><div class="ombre"></div></div>');
   //on supprime l'indice du tableau qui correspond au numéro aléatoire (c'est -1 par rapport à la longueur du tableau)
   tabNumLoto.splice(nb-1,1);
}

//maintenant on va piocher le numéro chance(1 seul de 1 à 10)
let numChance = nbAleatoire(10);
$('#sectionChance').append('<div class="tirage" id="tirage'+j+'"><div class="balle"><div class="numero" id="numero'+j+'"><div>'+numChance+'</div><div class="souligne"></div></div></div><div class="ombre"></div></div>');

//*******************
//** FIN CODE LOTO **
//*******************


//***************
//** ANIMATION **
//***************

//largeur de l'écran
let deplacement = $(window).width();
//déplacement des boules sur la gauche
$('.tirage').css({'transform':'translateX('+-deplacement+'px)'});
//nombre de tours que la boule fera en fonction de la taille de l'écran(Pi * diamètre)
let degres = (deplacement/(150*3.14))*360;

//sélection de toutes les boules
let boules = document.querySelectorAll("[id*='tirage']");

//on attribut à chaque boule une rotation et un déplacement
for (let l = 0; l < boules.length+1; l++) {
   //définition d'un degré aléatoire au début pour la boule
   let degreDebut = nbAleatoire(360);
   //définition du degré final
   let degreFin = degres+degreDebut;
   //on affecte un timeout qui fait partir chaque boule 2 secondes après la suivante.
   setTimeout(function(){
       //on replace la boule à son point d'origine
       $('#tirage'+l).css({'--deplacement':-deplacement+'px','animation-name':'deplacement','animation-duration':'5s','animation-fill-mode':'forwards'});
       //on fait tourner le numéro de la boule
       $('#numero'+l).css({'--degreDebut':degreDebut+'deg','--degreFin':degreFin+'deg','animation-name':'tours','animation-duration':'5s','animation-fill-mode':'forwards'});
   //
   },3000*l);
}

})
