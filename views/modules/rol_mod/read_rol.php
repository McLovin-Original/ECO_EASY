<table id="myTable">
  <tr>
    <td>#</td>
    <td>nombre</td>
    <td>descripcion</td>
    <td>modificar</td>
    <td>eliminar</td>
  </tr>
  <?php
  $item=0;
  foreach ($this->RolM->readRol() as $row) {
    $item++;
    ?>
    <tr>
      <td><?php echo $item; ?></td>
      <td><?php echo $row["rol_name"]; ?></td>
      <td><?php echo $row["rol_descripcion"]; ?></td>
      <td><a href="index.php?c=rol&a=updateData&rolcode=<?php echo $row['rol_id']; ?>">
        <i class="fa fa-pencil fa-2x" aria-hidden="true" style="color:black"></i>
      </a></td>
      <td><a href="index.php?c=rol&a=delete&rolcode=<?php echo $row['rol_id']; ?>">
        <i class="fa fa-trash fa-2x" aria-hidden="true" style="color:red; "></i>
      </a></td>
    </tr>
<?php } ?>
</table>
