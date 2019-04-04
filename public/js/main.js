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