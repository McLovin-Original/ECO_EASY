<?php

require_once("model/login.model.php");
require_once("model/user.model.php");

Class UserController{
  private $UserM;
  private $LoginM;

  public function __CONSTRUCT(){
    $this->UserM = new UserModel();
    $this->LoginM = new LoginModel();
  }
  public function mainPage(){
    require_once("views/include/header.php");
    require_once("views/modules/user_mod/create_user.php");
    require_once("views/include/footer.php");
  }
  public function validEmail(){
      $data = $_POST["email"];
      $result = $this->LoginM->readUserByEmail($data);
      if (count($result[0]) >=1 ) {
          $return = array(false,"El correo ya existe");
      } else {
          $return = array(true,"");
      }
      echo json_encode($return);
  }
  public function createLogin(){
    $data = $_POST["datauser"];
    if ($data[3]===$data[4]) {
      $data[3]= password_hash($data[3],PASSWORD_DEFAULT);
      $data[6]=randomAlpha('10');
      $data[7]="USU".randomAlpha('10');
      $data[8]=3;
      $data[9]="inactivo";
      $data[10]= "6fKTHzZa4U";
      $this->UserM->createUserLogin($data);
      $return = array(true,"inicio","Usuario: ".$data[1]."Registrado");
    }else{
      $return = array(false,"No coinciden Las contraseñas","");
    }
    echo json_encode($return);
  }
  public function create(){
    $data = $_POST["datauser"];
    if ($data[4]===$data[5]) {
      $data[4]= password_hash($data[4],PASSWORD_DEFAULT);
      $data[8]=randomAlpha('10');
      $data[9]="USU".randomAlpha('10');
      $data[10]=3;
      $data[11]="inactivo";
      $data[3]= !isset($data[3]) ? "1EzCtm9nz6" : $data[3];
      $this->UserM->createUser($data);
      $return = array(true,"admin-usuarios","Usuario: ".$data[1]."Registrado");
    }else{
      $return = array(false,"No coinciden Las contraseñas","");
    }
    echo json_encode($return);
  }
  public function updateData(){
    $field = $_GET["usucod"];
    require_once("views/include/header.php");
    require_once("views/modules/user_mod/update_user.php");
    require_once("views/include/footer.php");
  }
  public function search(){
      $busqueda= $_POST["busqueda"];
      $result=$this->UserM->searchUser($busqueda);
      if (count($result[0])===0) {
        $return = array(false,"No existe el nombre del usuario");
      }else{
        $return = array(true,$result["usu_nombre"]);
      }
      echo json_encode($return);
    }
  public function update(){
    $data = $_POST["datauser"];
    if ($data[3]===$data[4]) {
      $data[3]= password_hash($data[3],PASSWORD_DEFAULT);
      $this->UserM->updateUser($data);
      $return = array(true,"admin-usuarios","Actualizo Con Exito");
    }else{
      $return = array(false,"No coinciden Las contraseñas",null);
    }
    echo json_encode($return);
  }
  public function delete(){
    $field= $_GET["usucod"];
    $this->UserM->deleteUser($field);
    header("Location:admin-usuarios");
  }
}


 ?>
