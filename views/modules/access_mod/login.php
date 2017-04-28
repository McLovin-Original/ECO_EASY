<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ECOEASY</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="views/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="views/assets/css/main.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300|Russo+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Lobster|Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ruda|Timmana" rel="stylesheet">
  </head>
  <body class="body1">
    <div class="fondo"> </div>
    <!-- ICONO MENU -->
    <span class="iconmenu" onclick="abrirmenu()" id="btnmenu"><i class="fa fa-bars" aria-hidden="true"></i></span>
    <!-- MENU -->
    <div class="menu" id="menu">
      <span class="iconcerrardash" id="iconcerrardash" onclick="cerrarmenu()"><i class="fa fa-times" aria-hidden="true"></i></span>
      <img src="views/assets/img/Logo2.png" class="img-responsive logo">
      <button type="button" name="button" class="btn btn-default btnlog" onclick="aparecerlogin()">INICIAR SESIÓN</button>
      <button type="button" name="button" class="btn btn-default btnreg" onclick="aparecerregistro()">REGISTRATE</button>
    </div>
    <!-- SECCION 1 -->
  <div class="container-fluid">
    <div class="row">
      <div class="col-xs-12 col-md-6 secinfo1" id="contenct">
          <h1 class="text-center titulo">CONTENIDO</h1>
          <label class="text-center info">Ecoeasy es una herramienta tecnológica que mantendrá en comunicación a todos las personas interesadas en el medio ambiente, en la cual se podrán crear foros sobre temas de interés o dudas que tenga algún usuario, además también se podrán crear eventos y campañas sobre el medio ambiente que se basaran principalmente en reciclaje y buen uso de los recursos</label>
      </div>
      <div class="col-xs-12 col-md-6 secinfo2" id="info">
        <h1 class="text-center titulo">SOBRE NOSOTROS</h1>
        <label class="text-center info">Somos un grupo de jovenes desarrolladores, los cuales planteamos la idea de desarrollar una aplicacion donde la gente pueda reportar contaminacion ambiental, compartir informacion ambiental en un foro, y ver eventos y/o campañas ambientales</label>
      </div>
      <div class="col-xs-12 col-md-6 secinfo3" id="home">
        <h1 class="text-center titulo">ECOEASY</h1>
        <label class="text-center info">Es una aplicación desarrollada principalmente con el objetivo de que las personas que estén inconformes con la contaminación puedan denunciar y/o tener una plataforma donde puedan acudir a campañas y eventos de concientización ambiental</label>
      </div>
    <!-- BOTONES DE NAVEGACION -->
      <div class="col-xs-12 col-md-6 secbtn">
          <button type="button" name="button" class="btn btn-default btn1" onclick="btnhome()"><i class="fa fa-home" aria-hidden="true"></i></button>
          <button type="button" name="button" class="btn btn-default btn2" onclick="btncontenct()"><i class="fa fa-archive" aria-hidden="true"></i></button>
          <button type="button" name="button" class="btn btn-default btn3" onclick="btninfo()"><i class="fa fa-users" aria-hidden="true"></i></button>
      </div>
      <!-- SECCION 2 -->
      <div class="hidden-xs hidden-ms col-md-6 col-md-offset-6 secimg1" id="secimg1">
        <h1 class="text-center titulo1">SOBRE NOSOTROS</h1>
      </div>
      <div class="hidden-xs hidden-ms col-md-6 col-md-offset-6 secimg2" id="secimg2">
        <h1 class="text-center titulo1">CONTENIDO</h1>
      </div>
      <div class="hidden-xs hidden-ms col-md-6 col-md-offset-6 secimg3" id="secimg3">
        <h1 class="text-center titulo1">ECOEASY</h1>
      </div>
    </div>
    <!-- FONDO OSCURO -->
  <div class="fondogris" id="fondogris" onclick="desaparecerlogin()"></div>
  <!-- FORMULARIO LOGIN -->
  <div class="row">
    <div class="col-xs-10 col-xs-offset-1 col-md-4 col-md-offset-4">
      <form class="formulariologin" id="frm_login" action="" method="post">
        <img src="views/assets/img/Logo2.png" class="img-responsive logoform">
        <div class="form-group">
          <input type="text" id="login_email" class="form-control inputlogin" name="" required="">
          <label class="labelform">Email</label>
        </div>
        <div class="form-group">
          <input type="password" id="login_pass" class="form-control inputlogin" name="" required="">
          <label class="labelform">Contraseña</label>
        </div>
        <button type="submit" id="but_login" class="btn btn-default btnlogin" name="button">ENVIAR</button>
      </form>
    </div>
  </div>
  <!-- FORMULARIO REGISTRO -->
  <div class="row">
    <div class="col-xs-10 col-xs-offset-1 col-md-4 col-md-offset-4">
      <form class="formulariologin" id="frm_c_user" action="" method="post">
        <img src="views/assets/img/Logo2.png" class="img-responsive logoform">
        <div class="form-group">
          <input type="text" id="user_c_nombre" class="form-control inputlogin" name="data[]" required="">
          <label class="labelform">Nombre</label>
        </div>
        <div class="form-group">
          <input id="user_c_email" type="text" class="form-control inputlogin" name="" required="">
          <label class="labelform">Email</label>
        </div>
        <div class="form-group">
          <input id="user_c_pass" type="password" class="form-control inputlogin" name="" required="">
          <label class="labelform">Contraseña</label>
        </div>
        <div class="form-group">
          <input id="user_c_repass" type="password" class="form-control inputlogin" name="" required="">
          <label class="labelform">Repetir contraseña</label>
        </div>
        <div class="form-group">
          <input id="user_c_secreta" type="text" class="form-control inputlogin" name="" required="">
          <label class="labelform">Contraseña secreta</label>
        </div>
        <div class="form-group">
          <select id="user_c_barrio" class="form-control" name="data[]">
              <?php foreach ($this->UserM->readLocalizacion() as $row) { ?>
                  <option value="<?php echo $row['loc_id']; ?>"><?php echo $row["loc_barrio"]; ?></option>
              <?php } ?>
          </select><br>
        </div>
        <button id="but_c_user" type="submit" class="btn btn-default btnlogin" name="button">ENVIAR</button>
      </form>
    </div>
  </div>
  </div>

      <script src="views/assets/js/jquery.min.js"></script>
      <script src="views/assets/js/bootstrap.min.js"></script>
      <script src="views/assets/js/javascript.js"></script>
      <script src="views/assets/js/main.js"></script>
  </body>
</html>
