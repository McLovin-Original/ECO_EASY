<div class="container-fluid" style="padding-left:0;padding-right:0">
  <div class="menudashtop" style="position:Absolute;width:100%;height:8%;background-color:Grey">
    <span class="iconmenudash" id="iconmenudash" onclick="abrirmenudash()"><i class="fa fa-bars" aria-hidden="true"></i></span>
    <a href="cerrar-sesion" style="position:absolute;z-index:5;right:0;color:orange;font-size:20px;text-decoration:none;bottom:13px">CERRAR SESSION</a>
    <?php echo "<h1 style='position:absolute;margin-left:40%;bottom:1px;'>Bienvenido ".$_SESSION["user"]["name"]."</h1>";?>
  </div>
  <div class="menudash" id="menudash">
    <span class="iconcerrardash" id="iconcerrardash" onclick="cerrarmenudash()"><i class="fa fa-times" aria-hidden="true"></i></span>
    <a href="admin-campañas" class="enlaces">CAMPAÑA</a>
    <a href="admin-roles" class="enlaces">ROL</a>
    <a href="admin-usuarios" class="enlaces">USUARIO</a>
  </div>
</div>

<h2 style="margin-left:35%;margin-top:5.8%">USUARIOS REGISTRADOS:</h2>
<?php
$p=$this->UserM->countUser();
echo "<h1 style='position:absolute;z-index:1;right:32%;top:8.5%'>$p[0]</h1>";
?>
