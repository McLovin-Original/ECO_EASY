<?php
require_once("model/rol.model.php");
require_once("model/user.model.php");

Class RolController{
  private $RolM;
  private $UserM;

  public function __CONSTRUCT(){
    $this->RolM = new RolModel();
    $this->UserM = new UserModel();
  }

  public function mainPage(){
    require_once("views/include/header.php");
    require_once("views/modules/rol_mod/create_rol.php");
    require_once("views/include/footer.php");
  }
  public function validRol(){
    $name = $_POST["nombre"];
    $result = $this->RolM->readRolByName($name);
    if (count($result[0])==1) {
      $return = array(false,"El rol ya existe");
    }else{
      $return = array(true,"");
    }
    echo json_encode($return);
  }
  public function create(){
    $data = $_POST["datarol"];
    for($i=0; $i <count($data); $i++){
      if(strlen($data[$i])==0 || preg_match('`[1-9]`',$data[$i])){
        $p=1;
        break;
      }else{
        $p=0;
      }
    }
    if ($p==1) {
      $return = array(false,"Digite valores validos","");
    }else{
      $data[2] = randomAlpha('10');
      $this->RolM->createRol($data);
      $return = array(true,"Guardo con exito","admin-roles");
    }
    echo json_encode($return);
  }
  public function updateData(){
    $field = $_GET["rolcode"];
    require_once("views/include/header.php");
    require_once("views/modules/rol_mod/update_rol.php");
    require_once("views/include/footer.php");
  }
  public function update(){
    $data = $_POST["datarol"];
    for($i=0; $i <count($data)-1; $i++){
      if(strlen($data[$i])==0 || preg_match('`[1-9]`',$data[$i])){
        $p=1;
        break;
      }else{
        $p=0;
      }
    }
    if ($p==1) {
      $return = array(false,"Digite valores validos","");
    }else{
      $this->RolM->updateRol($data);
      $return = array(true,"Actualizo con exito","admin-roles");
    }
    echo json_encode($return);
  }
  public function search(){
      $busqueda= $_POST["busqueda"];
      $result=$this->RolM->searchRol($busqueda);
      if (count($result[0])===0) {
        $return = array(false,"No existe el nombre del rol");
      }else{
        $return = array(true,$result["rol_name"]);
      }
      echo json_encode($return);
    }

  public function delete(){
    $field = $_GET["rolcode"];
    $this->RolM->deleteRol($field);
    header("Location:admin-roles");
  }
}


 ?>
