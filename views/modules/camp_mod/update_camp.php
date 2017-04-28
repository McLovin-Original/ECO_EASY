<?php $camp = $this->CampM->readCampById($field) ?>
<div class="container">
  <div class="row">
    <div class="col-xs-12 col-md-6 col-md-offset-3">
      <form id="frm_c_camp" class="" action="" method="post">
        <div class="form-group">
          <input id="camp_c_foto" class="form-control" type="text" name="data[]" value="<?php echo $camp['camp_foto']; ?>"><br>
          <input id="camp_c_titulo" class="form-control" type="text" name="data[]" value="<?php echo $camp['camp_titulo']; ?>"><br>
          <input id="camp_c_descrip" class="form-control" type="text" name="data[]" value="<?php echo $camp['camp_descrip']; ?>"><br>
          <input id="camp_c_fecha" class="form-control" type="date" name="data[]" value="<?php echo $camp['camp_fecha']; ?>"><br>
          <input id="camp_c_direc" class="form-control" type="text" name="data[]" value="<?php echo $camp['camp_direc']; ?>"><br>
          <input id="camp_c_comen" class="form-control" type="text" name="data[]" value="<?php echo $camp['camp_comen']; ?>"><br>
          <input id="camp_c_estado" class="form-control" type="number"  min="0" max="1" name="data[]" value="<?php echo $camp['camp_estado']; ?>"><br>
          <input id="camp_c_id" class="form-control" type="text" hidden="" name="data[]" value="<?php echo $camp['camp_id']; ?>"style="visibility:hidden;">
        </div>
        <button type="submit" class="btn btn-primary" id="but_camp">Actualizar</button>
      </form>
    </div>
  </div>
</div>
