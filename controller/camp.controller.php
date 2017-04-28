<?php
require_once("model/camp.model.php");
require_once("model/user.model.php");


Class CampController{
  private $CampM;
  private $UserM;

  public function __CONSTRUCT(){
    $this->CampM = new CampModel();
    $this->UserM = new UserModel();
  }

  public function mainPage(){
    require_once("views/include/header.php");
    require_once("views/modules/camp_mod/create_camp.php");
    require_once("views/include/footer.php");
  }
  public function validCamp(){
    $name = $_POST["nombre"];
    $result = $this->CampM->readCampByName($name);
    if (count($result[0])==1) {
      $return = array(false,"La campaña ya existe");
    }else{
      $return = array(true,"");
    }
    echo json_encode($return);
  }
  public function create(){
    $data = $_POST["datacamp"];
    for($i=0; $i <count($data); $i++){
      if(strlen($data[$i])==0){
        $p=1;
        break;
      }else{
        $p=0;
      }
    }
    if ($p==1) {
      $return = array(false,"Digite valores validos","");
    }else{
      $data[8] = randomAlpha('10');
      $this->CampM->createCamp($data);
      $return = array(true,"Guardo con exito","admin-campañas");
    }
    echo json_encode($return);
  }
  public function updateData(){
    $field = $_GET["campcod"];
    require_once("views/include/header.php");
    require_once("views/modules/camp_mod/update_camp.php");
    require_once("views/include/footer.php");
  }
  public function update(){
    $data = $_POST["datacamp"];
    for($i=0; $i <count($data)-1; $i++){
      if(strlen($data[$i])==0){
        $p=1;
        break;
      }else{
        $p=0;
      }
    }
    if ($p==1) {
      $return = array(false,"Digite valores validos","");
    }else{
      $this->CampM->updateCamp($data);
      $return = array(true,"Actualizo con exito","admin-campañas");
    }
    echo json_encode($return);
  }
  public function search(){
      $busqueda= $_POST["busqueda"];
      $result=$this->CampM->searchCamp($busqueda);
      if (count($result[0])===0) {
        $return = array(false,"No existe el titulo de la campaña");
      }else{
        $return = array(true,$result["camp_titulo"]);
      }
      echo json_encode($return);
    }
  public function delete(){
    $field = $_GET["campcod"];
    $this->CampM->deleteCamp($field);
    header("Location:admin-campañas");
  }
}


 ?>
