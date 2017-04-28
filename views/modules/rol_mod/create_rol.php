<div class="container">
  <div class="row">
    <div class="col-xs-12 col-md-6 col-md-offset-3">
      <form id="frm_c_rol" action="" method="post">
          <div class="form-group">
            <input type="text" class="form-control" name="data[]" placeholder="Nombre" id="rol_c_name">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="data[]" placeholder="descripcion" id="rol_c_descripcion">
          </div>
            <input type="text" id="search" name="data[]" onKeyUp="buscar();" onblur="remover();">
            <div id="resultadoBusqueda">

            </div>
        <button type="submit" class="btn btn-primary" style="width:100%" id="but_rol">ENVIAR</button>
      </form>
    </div>
  </div>
</div>
<?php require_once("views/modules/rol_mod/read_rol.php"); ?>
