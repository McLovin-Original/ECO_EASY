<?php

require_once ("model/user.model.php");
require_once ("model/login.model.php");
Class MainController{
  private $LoginM;
  private $UserM;

  public function __CONSTRUCT(){
    $this->LoginM = new LoginModel();
    $this->UserM = new UserModel();
  }

  public function mainPage(){
    if (!isset($_SESSION["user"])) {
      require_once("views/modules/access_mod/login.php");
    }else{
      header("Location:dashboard-admin");
    }
  }
  public function validEmail(){
      $data = $_POST["email"];
      $result = $this->LoginM->readUserByEmail($data);
      if (count($result[0]) <= 0) {
          $return = array("El correo no existe", false);
      } else {
          $return = array("", true);
      }
      echo json_encode($return);
  }
  public function login(){
      $data[0] = $_POST["email"];
      $data[1] = $_POST["pass"];
      $result = $this->LoginM->readUserByEmail($data[0]);
          if (password_verify($data[1],$result["acc_pass"])) {
              $_SESSION["user"]["token"] = $result["acc_token"];
              $_SESSION["user"]["code"] = $result["usu_id"];
              $_SESSION["user"]["name"] = $result["usu_nombre"];
              $_SESSION["user"]["role"] = $result["rol_id"];
              $_SESSION["user"]["email"] = $_POST["email"];
              if ($_SESSION["user"]["role"] == "pT8PsEGeDj") {
                  $return = array(true, "dashboard-admin",$result["acc_token"]);
              } else {
                  $return = array(true, "dashboard",$result["acc_token"]);
              }
            }else{
              $return = array(false,"contraseña incorrecta",null);
            }
      echo json_encode($return);
  }
  public function dashboard(){
    if (!isset($_SESSION["user"])) {
      header("Location:inicio");
    }else{
      require_once("views/include/header.php");
      require_once("views/include/main.php");
      require_once("views/include/footer.php");
    }
  }
  public function viewUser(){
    if (!isset($_SESSION["user"])) {
      header("Location:inicio");
    }else{
      require_once("views/modules/access_mod/vista.php");
    }
  }
  public function close(){
    session_destroy();
    header("Location:inicio");
  }
}

 ?>
