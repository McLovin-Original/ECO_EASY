var btnmenu = document.getElementById("btnmenu");
var menu = document.getElementById("menu");
var btncerrarmenu = document.getElementById("iconcerrar");
var home = document.getElementById("home");
var contenct = document.getElementById("contenct");
var info = document.getElementById("info");
var secimg1 = document.getElementById("secimg1");
var secimg2 = document.getElementById("secimg2");
var secimg3 = document.getElementById("secimg3");
var btn1 = document.getElementById("btn1");
var btn2 = document.getElementById("btn2");
var btn3 = document.getElementById("btn3");
var iconmenudash = document.getElementById('iconmenudash');
var menudash =document.getElementById('menudash');
var iconcerrardash = document.getElementById('iconcerrardash');
var fondogris = document.getElementById('fondogris');
var formulariologin = document.getElementById('frm_login');
var formularioregistro = document.getElementById('frm_c_user');

function aparecerlogin(){
this.fondogris.style.zIndex = "4";
this.formulariologin.style.zIndex = "5";
this.fondogris.style.transition = "1s";
this.formulariologin.style.transition = "0.5s";
}
function desaparecerlogin(){
this.fondogris.style.zIndex = "-2";
this.formulariologin.style.zIndex = "-3";
this.formularioregistro.style.zIndex = "-3";
}
function aparecerregistro(){
this.fondogris.style.zIndex = "4";
this.formularioregistro.style.zIndex = "4";
this.formularioregistro.style.zIndex = "5";
this.fondogris.style.transition = "1s";
this.formulariologin.style.transition = "0.5s";
}

function abrirmenu(){
  this.menu.style.transform = "translateX(300px)";
  this.menu.style.transition = "0.5s"
}

function cerrarmenu(){
  this.menu.style.transform = "translateX(-300px)";
  this.menu.style.transition = "0.5s"
}

function btnhome(){
  this.contenct.style.transform = "translateX(-100%)";
  this.info.style.transform = "translateX(-100%)";
  this.home.style.transform = "translateX(0%)";
  this.home.style.transition = "0.5s";
  this.secimg1.style.transform = "translateX(100%)";
  this.secimg2.style.transform = "translateX(100%)";
  this.secimg3.style.transform = "translateX(0%)";
  this.secimg3.style.transition = "0.5s";
}

function btncontenct(){
  this.home.style.transform = "translateX(-100%)";
  this.info.style.transform = "translateX(-100%)";
  this.contenct.style.transform = "translateX(0%)";
  this.contenct.style.transition = "0.5s";
  this.home.style.transition = "0.5s";
  this.secimg1.style.transform = "translateX(100%)";
  this.secimg3.style.transform = "translateX(100%)";
  this.secimg2.style.transform = "translateX(0%)";
  this.secimg2.style.transition = "0.5s";
    this.secimg3.style.transition = "0.5s";
}

function btninfo(){
  this.home.style.transform = "translateX(-100%)";
  this.contenct.style.transform = "translateX(-100%)";
  this.info.style.transform = "translateX(0%)";
  this.info.style.transition = "0.5s";
  this.home.style.transition = "0.5s";
  this.secimg2.style.transform = "translateX(100%)";
  this.secimg2.style.transform = "translateX(100%)";
  this.secimg3.style.transform = "translateX(100%)";
  this.secimg1.style.transform = "translateX(0%)";
  this.secimg1.style.transition = "0.5s";
  this.secimg3.style.transition = "0.5s";
}


function abrirmenudash(){
  this.menudash.style.transform = "translateX(0px)";
  this.menudash.style.transition = "0.5s";
}

function cerrarmenudash(){
  this.menudash.style.transform = "translateX(-300px)";
  this.menudash.style.transition = "0.5s";
  iconcerrardash
}
