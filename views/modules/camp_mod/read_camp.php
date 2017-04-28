<table id="myTable">
  <tr>
    <td>#</td>
    <td>foto</td>
    <td>titulo</td>
    <td>descripcion</td>
    <td>fecha</td>
    <td>direccion</td>
    <td>estado</td>
    <td>modificar</td>
    <td>eliminar</td>
  </tr>
  <?php
  $item=0;
  foreach ($this->CampM->readCamp() as $row) {
    $item++;
    ?>
    <tr>
      <td><?php echo $item; ?></td>
      <td><?php echo $row["camp_foto"]; ?></td>
      <td><?php echo $row["camp_titulo"]; ?></td>
      <td><?php echo $row["camp_descrip"]; ?></td>
      <td><?php echo $row["camp_fecha"]; ?></td>
      <td><?php echo $row["camp_direc"]; ?></td>
      <td><?php echo $row["camp_estado"]; ?></td>
      <td><a href="index.php?c=camp&a=updateData&campcod=<?php echo $row['camp_id']; ?>">
        <i class="fa fa-pencil fa-2x" aria-hidden="true" style="color:black"></i>
      </a></td>
      <td><a href="index.php?c=camp&a=delete&campcod=<?php echo $row['camp_id']; ?>">
        <i class="fa fa-trash fa-2x" aria-hidden="true" style="color:red; "></i>
      </a></td>
    </tr>
<?php } ?>
</table>
