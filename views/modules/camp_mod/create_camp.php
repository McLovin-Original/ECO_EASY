<div class="container">
  <div class="row">
    <div class="col-xs-12 col-md-6 col-md-offset-3">
      <div class="form-group">
        <form id="frm_c_camp" action="" method="post">
        <label for="camp_c_usu">Creador De eventos</label>
        <select id="camp_c_usu" class="form-control" name="data[]">
            <?php foreach ($this->CampM->readUser() as $row) { ?>
                <option value="<?php echo $row['usu_id']; ?>"><?php echo $row['usu_nombre']; ?></option>
            <?php } ?>
        </select><br>
        <input type="text" class="form-control" name="data[]" placeholder="foto" id="camp_c_foto"><br>
        <input type="text" class="form-control" name="data[]" placeholder="titulo" id="camp_c_titulo"><br>
        <input type="text" class="form-control" name="data[]" placeholder="descripcion" id="camp_c_descrip"><br>
        <input type="date" class="form-control" name="data[]" placeholder="fecha" id="camp_c_fecha"><br>
        <input type="text" class="form-control" name="data[]" placeholder="direccion" id="camp_c_direc"><br>
        <input type="text" class="form-control" name="data[]" placeholder="comentario" id="camp_c_comen"><br>
        <input type="number" class="form-control" min="0" max="1" name="data[]" placeholder="estado" id="camp_c_estado"><br>
      </div>
        <input type="text" id="search_camp" name="data[]" onKeyUp="buscar_camp();" onblur="remover();">
        <div id="resultadoBusqueda">

        </div>
        <button type="submit" class="btn btn-primary" style="width:100%" id="but_camp">ENVIAR</button>
      </form>
    </div>
  </div>
</div>
<?php require_once("views/modules/camp_mod/read_camp.php"); ?>
