var numberOfKeys = document.querySelectorAll(".key").length;

var c3 = new Audio("sound/c3.ogg");
var c_3 = new Audio("sound/c-3.ogg");
var d3 = new Audio("sound/d3.ogg");
var d_3 = new Audio("sound/d-3.ogg");
var e3 = new Audio("sound/e3.ogg");
var f3 = new Audio("sound/f3.ogg");
var f_3 = new Audio("sound/f-3.ogg");
var g3 = new Audio("sound/g3.ogg");
var g_3 = new Audio("sound/g-3.ogg");
var a3 = new Audio("sound/a3.ogg");
var a_3 = new Audio("sound/a-3.ogg");
var b3 = new Audio("sound/b3.ogg");
var c4 = new Audio("sound/c4.ogg");
var c_4 = new Audio("sound/c-4.ogg");
var d4 = new Audio("sound/d4.ogg");
var d_4 = new Audio("sound/d-4.ogg");
var e4 = new Audio("sound/e4.ogg");

for (var i = 0; i < numberOfKeys; i++) {

  document.querySelectorAll(".key")[i].addEventListener("click", function() {

    var buttonInnerHTML = this.innerHTML;

    makeSound(buttonInnerHTML);

    buttonAnimation(buttonInnerHTML);

  });

}

document.addEventListener("keypress", function(event) {

  makeSound(event.key);

  buttonAnimation(event.key);

});

document.addEventListener("keyup", function(event) {
  switch (event.key) {
    case "a":
      c3.pause();
      c3.currentTime=0;
      break;

    case "w":
      c_3.pause();
      c_3.currentTime=0;
      break;
    
    case "s":
      d3.pause();
      d3.currentTime=0;
      break;

    case "e":
      d_3.pause();
      d_3.currentTime=0;
      break;

    case "d":
      e3.pause();
      e3.currentTime=0;
      break;
  
    case "f":
      f3.pause();
      f3.currentTime=0;
      break;
    
    case "t":
      f_3.pause();
      f_3.currentTime=0;
      break;

    case "g":
      g3.pause();
      g3.currentTime=0;
      break;
   
    case "y":
      g_3.pause();
      g_3.currentTime=0;
      break;  

    case "h":
      a3.pause();
      a3.currentTime=0;
      break;

    case "u":
      a_3.pause();
      a_3.currentTime=0;
      break;

    case "j":
      b3.pause();
      b3.currentTime=0;
      break;
     
    case "k":
      c4.pause();
      c4.currentTime=0;
      break;
      
    case "o":
      c_4.pause();
      c_4.currentTime=0;
      break;

    case "l":
      d4.pause();
      d4.currentTime=0;
      break;

    case "p":
      d_4.pause();
      d_4.currentTime=0;
      break;
  
    case ";":
      e4.pause();
      e4.currentTime=0;
      break;

    default: console.log(key);
  }
});

function makeSound(key) {

  switch (key) {
    case "a":
      c3.play();
      break;

    case "w":
      c_3.play();
      break;
    
    case "s":
      d3.play();
      break;

    case "e":
      d_3.play();
      break;

    case "d":
      e3.play();
      break;
  
    case "f":
      f3.play();
      break;
    
    case "t":
      f_3.play();
      break;

    case "g":
      g3.play();
      break;
   
    case "y":
      g_3.play();
      break;  

    case "h":
      a3.play();
      break;

    case "u":
      a_3.play();
      break;

    case "j":
      b3.play();
      break;
     
    case "k":
      c4.play();
      break;
      
    case "o":
      c_4.play();
      break;

    case "l":
      d4.play();
      break;

    case "p":
      d_4.play();
      break;
  
    case ";":
      e4.play();
      break;

    default: console.log(key);
  }
}


function buttonAnimation(currentKey) {
  if(currentKey==';')
  var activeButton = document.querySelector("#\\;");
  else var activeButton = document.querySelector("#" + currentKey);

  activeButton.classList.add("pressed");

  setTimeout(function() {
    activeButton.classList.remove("pressed");
  }, 100);

}
