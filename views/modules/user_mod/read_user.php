<table id="myTable">
  <tr>
    <td>#</td>
    <td>nombre</td>
    <td>email</td>
    <td>barrio</td>
    <td>Rol</td>
    <td>modificar</td>
    <td>eliminar</td>
  </tr>
  <?php
  $item=0;
  foreach ($this->UserM->readUser() as $row) {
    $item++;
    ?>
    <tr>
      <td><?php echo $item; ?></td>
      <td><?php echo $row["usu_nombre"]; ?></td>
      <td><?php echo $row["acc_email"]; ?></td>
      <td><?php echo $row["loc_barrio"]; ?></td>
      <td><?php echo $row["rol_name"]; ?></td>
      <td><a href="index.php?c=user&a=updateData&usucod=<?php echo $row['usu_id']; ?>">
        <i class="fa fa-pencil fa-2x" aria-hidden="true" style="color:black"></i>
      </a></td>
      <td><a href="index.php?c=user&a=delete&usucod=<?php echo $row['usu_id']; ?>">
        <i class="fa fa-trash fa-2x" aria-hidden="true" style="color:red; "></i>
      </a></td>
    </tr>
<?php } ?>
</table>
