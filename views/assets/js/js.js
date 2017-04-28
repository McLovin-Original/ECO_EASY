var fondo = document.getElementById('fondologin');
var fondo1 = document.getElementById('fondoregistro');
var formulario = document.getElementById('formulario');
var formularioreg = document.getElementById('formreg');
var iconmenu = document.getElementById('iconmenu');
var xmenu = document.getElementById('x');
var menu = document.getElementById('menu');
var href = document.getElementById('a');
var foto = document.getElementById('slide');
var foto1 = document.getElementById('slide1');
var foto2 = document.getElementById('slide2');
var foto3 = document.getElementById('slide3');
var foto4 = document.getElementById('slide4');
var info = document.getElementById('slideinfo');
var info1 = document.getElementById('slideinfo1');
var info2 = document.getElementById('slideinfo2');
var info3 = document.getElementById('slideinfo3');
var info4 = document.getElementById('slideinfo4');
var btn1 = document.getElementById('btn-1');
var btn2 = document.getElementById('btn-2');
var btn3 = document.getElementById('btn-3');
var btn4 = document.getElementById('btn-4');
var btn5 = document.getElementById('btn-5');

function desaparecerlogin(){
  this.fondo.style.zIndex="-1";
  this.fondo.style.opacity = "0";
  this.fondo.style.transition = "0.5s";
  this.formulario.style.opacity = "0";
  this.formulario.style.zIndex = "-2";
  this.formulario.style.transition = "0.5s";
}

function aparecerlogin(){
  this.fondo.style.opacity = "1";
  this.fondo.style.zIndex = "6";
  this.fondo.style.transition = "0.5s";
  this.formulario.style.opacity = "16";
  this.formulario.style.zIndex = "6";
  this.formulario.style.transition = "0.5s";
}

function apareceregistro(){
  this.fondo1.style.opacity = "1";
  this.fondo1.style.zIndex = "6";
  this.fondo1.style.transition = "0.5s";
  this.formularioreg.style.opacity = "16";
  this.formularioreg.style.zIndex = "6";
  this.formularioreg.style.transition = "0.5s";
}

function desaparecerregistro(){
  this.fondo1.style.zIndex="-1";
  this.fondo1.style.opacity = "0";
  this.fondo1.style.transition = "0.5s";
  this.formularioreg.style.opacity = "0";
  this.formularioreg.style.zIndex = "-2";
  this.formularioreg.style.transition = "0.5s";
}

function abrirmenu(){
  this.menu.style.transform = "translateX(300px)";
  this.menu.style.transition = "0.8s";
  this.menu.style.zIndex = "20";
  this.fondo1.style.opacity = "1";
  this.fondo1.style.zIndex = "6";
  this.fondo1.style.transition = "0.5s";
}

function cerrarmenu(){
  this.menu.style.transform = "translateX(-300px)";
  this.menu.style.transition = "0.8s";
  this.fondo1.style.zIndex="-1";
  this.fondo1.style.opacity = "0";
  this.fondo1.style.transition = "0.5s";
}

function home(){
this.foto1.style.transform = "translateX(100%)";
this.foto2.style.transform = "translateX(100%)";
this.foto3.style.transform = "translateX(100%)";
this.foto.style.transform = "translateX(100%)";
this.foto4.style.transform = "translateX(0%)";
this.foto4.style.transition = "0.8s";
this.btn1.style.backgroundColor = "orange";
this.btn2.style.backgroundColor = "transparent";
this.btn3.style.backgroundColor = "transparent";
this.btn4.style.backgroundColor = "transparent";
this.btn5.style.backgroundColor = "transparent";
this.info1.style.transform = "translateX(-100%)";
this.info2.style.transform = "translateX(-100%)";
this.info3.style.transform = "translateX(-100%)";
this.info.style.transform = "translateX(-100%)";
this.info4.style.transform = "translateX(0%)";
this.info4.style.transition = "0.8s";
}
function dieta(){
this.foto.style.transform = "translateX(100%)";
this.foto1.style.transform = "translateX(100%)";
this.foto2.style.transform = "translateX(100%)";
this.foto4.style.transform = "translateX(100%)";
this.foto3.style.transform = "translateX(0%)";
this.foto3.style.transition = "0.8s";
this.foto4.style.transition = "0.8s";
this.btn1.style.backgroundColor = "transparent";
this.btn2.style.backgroundColor = "blue";
this.btn3.style.backgroundColor = "transparent";
this.btn4.style.backgroundColor = "transparent";
this.btn5.style.backgroundColor = "transparent";
this.btn2.style.transition = "0.5s";
this.info1.style.transform = "translateX(-100%)";
this.info2.style.transform = "translateX(-100%)";
this.info.style.transform = "translateX(-100%)";
this.info4.style.transform = "translateX(-100%)";
this.info3.style.transform = "translateX(0%)";
this.info3.style.transition = "0.8s";
this.info4.style.transition = "0.8s";
}

function rutina(){
  this.foto.style.transform = "translateX(100%)";
  this.foto1.style.transform = "translateX(100%)";
  this.foto3.style.transform = "translateX(100%)";
  this.foto4.style.transform = "translateX(100%)";
  this.foto2.style.transform = "translateX(0%)";
  this.foto2.style.transition = "0.8s";
  this.foto4.style.transition = "0.8s";
  this.btn1.style.backgroundColor = "transparent";
  this.btn2.style.backgroundColor = "transparent";
  this.btn3.style.backgroundColor = "red";
  this.btn4.style.backgroundColor = "transparent";
  this.btn5.style.backgroundColor = "transparent";
  this.btn3.style.transition = "0.5s";
  this.info1.style.transform = "translateX(-100%)";
  this.info.style.transform = "translateX(-100%)";
  this.info3.style.transform = "translateX(-100%)";
  this.info4.style.transform = "translateX(-100%)";
  this.info2.style.transform = "translateX(0%)";
  this.info2.style.transition = "0.8s";
  this.info4.style.transition = "0.8s";
}
function musica(){
  this.foto.style.transform = "translateX(100%)";
  this.foto2.style.transform = "translateX(100%)";
  this.foto3.style.transform = "translateX(100%)";
  this.foto4.style.transform = "translateX(100%)";
  this.foto1.style.transform = "translateX(0%)";
  this.foto1.style.transition = "0.8s";
  this.foto4.style.transition = "0.8s";
  this.btn1.style.backgroundColor = "transparent";
  this.btn2.style.backgroundColor = "transparent";
  this.btn3.style.backgroundColor = "transparent";
  this.btn4.style.backgroundColor = "yellow";
  this.btn5.style.backgroundColor = "transparent";
  this.btn4.style.transition = "0.5s";
  this.info3.style.transform = "translateX(-100%)";
  this.info2.style.transform = "translateX(-100%)";
  this.info.style.transform = "translateX(-100%)";
  this.info4.style.transform = "translateX(-100%)";
  this.info1.style.transform = "translateX(0%)";
  this.info1.style.transition = "0.8s";
  this.info4.style.transition = "0.8s";
}
function video(){
  this.foto1.style.transform = "translateX(100%)";
  this.foto2.style.transform = "translateX(100%)";
  this.foto3.style.transform = "translateX(100%)";
  this.foto4.style.transform = "translateX(100%)";
  this.foto.style.transform = "translateX(0%)";
  this.foto.style.transition = "0.8s";
  this.foto4.style.transition = "0.8s";
  this.btn1.style.backgroundColor = "transparent";
  this.btn2.style.backgroundColor = "transparent";
  this.btn3.style.backgroundColor = "transparent";
  this.btn4.style.backgroundColor = "transparent";
  this.btn5.style.backgroundColor = "grey";
  this.btn5.style.transition = "0.5s";
  this.info1.style.transform = "translateX(-100%)";
  this.info2.style.transform = "translateX(-100%)";
  this.info3.style.transform = "translateX(-100%)";
  this.info4.style.transform = "translateX(-100%)";
  this.info.style.transform = "translateX(0%)";
  this.info.style.transition = "0.8s";
  this.info4.style.transition = "0.8s";
}
