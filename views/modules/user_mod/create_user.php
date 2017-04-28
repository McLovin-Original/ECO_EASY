<div class="container">
  <div class="row">
    <div class="col-xs-12 col-md-6 col-md-offset-3">
      <form id="frm_c_user" action="" method="post">
        <div class="form-group">
          <input id="user_c_nombre" class="form-control" type="text" name="data[]" placeholder="nombre"><br>
          <input id="user_c_email" class="form-control" type="email" name="data[]" placeholder="email"><br>
          <select id="user_c_barrio" class="form-control" name="data[]">
              <?php foreach ($this->UserM->readLocalizacion() as $row) { ?>
                  <option value="<?php echo $row['loc_id']; ?>"><?php echo $row["loc_barrio"]; ?></option>
              <?php } ?>
          </select><br>
          <select id="user_c_rol" class="form-control" name="data[10]">
              <?php foreach ($this->UserM->readRol() as $row) { ?>
                  <option value="<?php echo $row['rol_id']; ?>"><?php echo $row["rol_name"]; ?></option>
              <?php } ?>
          </select><br>
          <input id="user_c_pass" class="form-control" type="password" name="data[3]" placeholder="contraseña"><br>
          <input id="user_c_repass" class="form-control" type="password" name="data[4]" placeholder="repetir contraseña"><br>
          <input id="user_c_secreta" class="form-control" type="text" name="data[5]" placeholder="contraseña secreta"><br>
        </div>
        <input type="text" id="search_user" name="data[]" onKeyUp="buscar_usuario();" onblur="remover();">
        <div id="resultadoBusqueda">

        </div>
        <button type="submit" class="btn btn-primary" style="width:100%" id="but_c_user">Enviar</button>
      </form>
    </div>
  </div>
</div>
<?php require_once("views/modules/user_mod/read_user.php"); ?>
