$(document).ready(function(){
    $("#resultadoBusqueda").html('<p>SIN BUSCAR</p>');
    $('#myTable').DataTable();
});
//-----------localStorage
if (localStorage.getItem('storage')){
  alert("ESTE EQUIPO ES SEGURO");
}else{
  alert("ESTE EQUIPO NO ES SEGURO");
}


//---------------------------ROL

$("#rol_c_descripcion").focus(function(){
    $("#rol_c_name").siblings("span").remove();
    var name = $("#rol_c_name").val();
    $.post("index.php?c=rol&a=validRol",{nombre:name},function(data){
        var data = JSON.parse(data);
        $("#rol_c_name").after("<span class='error'>"+data[1]+"</span>")
        if (data[0] == false) {
            $("#but_rol").attr("disabled",true);
        } else {
            $("#but_rol").attr("disabled",false);
        }
    });
});

 $("#rol_c_name").focus(function(){
    $(this).siblings("span").remove();
    $("#but_rol").attr("disabled",false);
});
$("#frm_c_rol").submit(function(e){
  e.preventDefault();
  var a = $("#rol_c_id").val();
  if (!a) {
    var url="index.php?c=rol&a=create";
    var datarol=[ $("#rol_c_name").val(),
                 $("#rol_c_descripcion").val()];
  }else{
    var url="index.php?c=rol&a=update";
    var datarol=[ $("#rol_c_name").val(),
                 $("#rol_c_descripcion").val()];
    datarol[2]=a;
  }
    $.post(url,{datarol:datarol},function(data){
      var data = JSON.parse(data);
      if (data[0]==true) {
        alert(data[1]);
        document.location.href=data[2];
      }else{
        alert(data[1]);
      }
    });
});
//-----------------------------------------------LOGIN
$("#login_pass").focus(function(){
    $("#login_email").siblings("span").remove();
    var email = $("#login_email").val();
    $.post("index.php?c=main&a=validEmail",{email:email},function(data){
        var data = JSON.parse(data);
        $("#login_email").after("<span class='error'>"+data[0]+"</span>")
        if (data[1] == false) {
            $("#but_login").attr("disabled",true);
        } else {
            $("#but_login").attr("disabled",false);
        }
    });
});

 $("#login_email").focus(function(){
    $(this).siblings("span").remove();
    $("#but_login").attr("disabled",false);
});

$("#frm_login").submit(function(e){
    e.preventDefault();
      var email = $("#login_email").val();
      var pass = $("#login_pass").val();
      $.post("index.php?c=main&a=login",{email:email, pass:pass},function(data){
          var data = JSON.parse(data);
            if (data[0] == true) {
              var local= prompt("Este Equipo es seguro?");
              document.location.href = data[1];
              if (local.toLowerCase()=="si") {
                localStorage.setItem('storage',data[2]);
              }
          } else {
              $("#login_pass").after("<span class='error'>"+data[1]+"</span>");
          }
    });
});
//------------------------------------------- USUARIO
$("#user_c_pass").focus(function(){
    $("#user_c_email").siblings("span").remove();
    var email = $("#user_c_email").val();
    $.post("index.php?c=user&a=validEmail",{email:email},function(data){
        var data = JSON.parse(data);
        $("#user_c_email").after("<span class='error'>"+data[1]+"</span>")
        if (data[0] == false) {
            $("#but_c_user").attr("disabled",true);
        } else {
            $("#but_c_user").attr("disabled",false);
        }
    });
});

 $("#user_c_email").focus(function(){
    $(this).siblings("span").remove();
    $("#but_c_user").attr("disabled",false);
});

$("#frm_c_user").submit(function(e){
  e.preventDefault();
  var a = $("#user_c_id").val();
  var b = $("#user_c_rol").val();
  if (!a) {
    if (!b) {
      var url="index.php?c=user&a=createLogin";
      var datauser=[ $("#user_c_nombre").val(),
                   $("#user_c_email").val(),
                    $("#user_c_barrio").val(),
                    $("#user_c_pass").val(),
                    $("#user_c_repass").val(),
                    $("#user_c_secreta").val()];
    }else{
      var url="index.php?c=user&a=create";
      var datauser=[ $("#user_c_nombre").val(),
      $("#user_c_email").val(),
      $("#user_c_barrio").val(),
      $("#user_c_rol").val(),
      $("#user_c_pass").val(),
      $("#user_c_repass").val(),
      $("#user_c_secreta").val()];
    }
  }else{
    var url="index.php?c=user&a=update";
    var datauser=[ $("#user_c_nombre").val(),
                 $("#user_c_email").val(),
                  $("#user_c_barrio").val(),
                  $("#user_c_pass").val(),
                  $("#user_c_repass").val(),
                  $("#user_c_secreta").val()];
    datauser[6]=a;
  }
    $.post(url,{datauser:datauser},function(data){
      var data = JSON.parse(data);
      if (data[0]==true) {
        alert(data[2]);
        document.location.href=data[1];
      }else{
        alert(data[1]);
      }
    });
});
//---------------------------------------------------- CAMPAÑA
$("#camp_c_descrip").focus(function(){
    $("#camp_c_titulo").siblings("span").remove();
    var name = $("#camp_c_titulo").val();
    $.post("index.php?c=camp&a=validCamp",{nombre:name},function(data){
        var data = JSON.parse(data);
        $("#camp_c_titulo").after("<span class='error'>"+data[1]+"</span>")
        if (data[0] == false) {
            $("#but_camp").attr("disabled",true);
        } else {
            $("#but_camp").attr("disabled",false);
        }
    });
});

 $("#camp_c_titulo").focus(function(){
    $(this).siblings("span").remove();
    $("#but_camp").attr("disabled",false);
});
$("#frm_c_camp").submit(function(e){
  e.preventDefault();
  var a = $("#camp_c_id").val();
  if (!a) {
    var url="index.php?c=camp&a=create";
    var datacamp=[$("#camp_c_foto").val(),
                 $("#camp_c_titulo").val(),
                 $("#camp_c_descrip").val(),
                 $("#camp_c_fecha").val(),
                 $("#camp_c_direc").val(),
                 $("#camp_c_comen").val(),
                 $("#camp_c_estado").val(),
                 $("#camp_c_usu").val()];
  }else{
    var url="index.php?c=camp&a=update";
    var datacamp=[$("#camp_c_foto").val(),
                 $("#camp_c_titulo").val(),
                 $("#camp_c_descrip").val(),
                 $("#camp_c_fecha").val(),
                 $("#camp_c_direc").val(),
                 $("#camp_c_comen").val(),
                 $("#camp_c_estado").val()];
    datacamp[7]=a;
  }
    $.post(url,{datacamp:datacamp},function(data){
      var data = JSON.parse(data);
      if (data[0]==true) {
        alert(data[1]);
        document.location.href=data[2];
      }else{
        alert(data[1]);
      }
    });
});
function buscar(){
  var busqueda =  $("#search").val()
  $.post("index.php?c=rol&a=search",{busqueda:busqueda},function(data){
    var data = JSON.parse(data);
    if (data[0]==true) {
      $("#resultadoBusqueda").html('<p>'+data[1]+'</p>');
    }else{
      $("#resultadoBusqueda").html('<p>'+data[1]+'</p>');
    }
 });
}
function buscar_usuario(){
  var busqueda =  $("#search_user").val()
  $.post("index.php?c=user&a=search",{busqueda:busqueda},function(data){
    var data = JSON.parse(data);
    if (data[0]==true) {
      $("#resultadoBusqueda").html('<p>'+data[1]+'</p>');
    }else{
      $("#resultadoBusqueda").html('<p>'+data[1]+'</p>');
    }
 });
}
function buscar_camp(){
  var busqueda =  $("#search_camp").val()
  $.post("index.php?c=camp&a=search",{busqueda:busqueda},function(data){
    var data = JSON.parse(data);
    if (data[0]==true) {
      $("#resultadoBusqueda").html('<p>'+data[1]+'</p>');
    }else{
      $("#resultadoBusqueda").html('<p>'+data[1]+'</p>');
    }
 });
}
function remover(){
  $("#resultadoBusqueda").html('<p>SIN BUSCAR</p>');
}
