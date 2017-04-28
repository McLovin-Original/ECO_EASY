<?php $rol = $this->RolM->readRolById($field) ?>
<div class="control">
  <div class="row">
    <div class="col-xs-12 col-md-6 col-md-offset-3">
      <form id="frm_c_rol" class="" action="" method="post">
        <div class="form-group">
          <input id="rol_c_name" class="form-control" type="text" name="data[]" value="<?php echo $rol['rol_name']; ?>"><br>
          <input id="rol_c_descripcion" class="form-control" type="text" name="data[]" value="<?php echo $rol['rol_descripcion']; ?>"><br>
          <input id="rol_c_id" class="form-control" type="text" hidden="" name="data[]" value="<?php echo $rol['rol_id']; ?>" style="visibility:hidden;">
        </div>
        <button type="submit" class="btn btn-primary" style="width:100%" id="but_rol">Actualizar</button>
      </form>
    </div>
  </div>
</div>
