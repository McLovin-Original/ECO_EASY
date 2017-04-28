<?php $usu = $this->UserM->readUserById($field) ?>
<div class="container">
  <div class="row">
    <div class="col-xs-12 col-md-6 col-md-offset-3">
      <form id="frm_c_user" class="" action="" method="post">
        <div class="form-group">
            <input id="user_c_nombre" class="form-control" type="text" name="data[]" value="<?php echo $usu['usu_nombre']; ?>"><br>
            <input id="user_c_email" class="form-control" type="text" name="data[]" value="<?php echo $usu['acc_email']; ?>"><br>
            <select id="user_c_barrio" class="form-control" name="data[]">
                <?php foreach ($this->UserM->readLocalizacion() as $row) { ?>
                    <option value="<?php echo $row['loc_id']; ?>"><?php echo $row["loc_barrio"]; ?></option>
                <?php } ?>
            </select><br>
            <input id="user_c_pass" class="form-control" type="password"  name="data[]" value=""><br>
            <input id="user_c_repass" class="form-control" type="password" name="data[]"><br>
            <input id="user_c_secreta" class="form-control" type="text"  name="data[]" value="<?php echo $usu['acc_secreto']; ?>"><br>
            <input id="user_c_id" class="form-control" type="text" name="data[]" value="<?php echo $usu['usu_id']; ?>" style="visibility:hidden;"><br>
        </div>
        <button type="submit" class="btn btn-primary" style="width:100%" id="but_c_user">Actualizar</button>
      </form>
    </div>
  </div>
</div>
