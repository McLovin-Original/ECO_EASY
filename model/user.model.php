<?php

Class UserModel{
  private $pdo;

  public function __CONSTRUCT(){
    try {
      $this->pdo = DataBase::connect();
      $this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
      die($e->getMessage()." ".$e->getLine()." ".$e->getFile());
    }
  }
  public function createUser($data){
    try {
      $sql="INSERT INTO usuario VALUES(?,?,?,?,?,?)";
      $query = $this->pdo->prepare($sql);
      $query->execute(array($data[9],$data[0],$data[2],NULL,NULL,$data[3]));
      $sql="INSERT INTO access VALUES(?,?,?,?,?,?,?,?)";
      $query = $this->pdo->prepare($sql);
      $query->execute(array($data[8],$data[9],$data[1],$data[10],$data[0],$data[6],$data[11],$data[4]));
    } catch (PDOException $e) {
      die($e->getMessage()." ".$e->getLine()." ".$e->getFile());
    }
  }
  public function createUserLogin($data){
    try {
      $sql="INSERT INTO usuario VALUES(?,?,?,?,?,?)";
      $query = $this->pdo->prepare($sql);
      $query->execute(array($data[7],$data[0],$data[2],NULL,NULL,$data[10]));
      $sql="INSERT INTO access VALUES(?,?,?,?,?,?,?,?)";
      $query = $this->pdo->prepare($sql);
      $query->execute(array($data[6],$data[7],$data[1],$data[8],$data[0],$data[5],$data[9],$data[3]));
    } catch (PDOException $e) {
      die($e->getMessage()." ".$e->getLine()." ".$e->getFile());
    }
  }
  public function readRol(){
    try {
      $sql="SELECT * FROM rol";
      $query = $this->pdo->prepare($sql);
      $query->execute();
      $result = $query->fetchALL(PDO::FETCH_BOTH);
    } catch (PDOException $e) {
      die($e->getMessage()." ".$e->getLine()." ".$e->getFile());
    }
    return $result;
  }
  public function readLocalizacion(){
    try {
      $sql="SELECT * FROM localizacion";
      $query = $this->pdo->prepare($sql);
      $query->execute();
      $result = $query->fetchALL(PDO::FETCH_BOTH);
    } catch (PDOException $e) {
      die($e->getMessage()." ".$e->getLine()." ".$e->getFile());
    }
    return $result;
  }
  public function readUser(){
    try {
      $sql="SELECT * FROM rol INNER JOIN usuario ON (usuario.rol_id=rol.rol_id) INNER JOIN access ON (access.usu_id=usuario.usu_id) INNER JOIN localizacion ON(usuario.loc_id=localizacion.loc_id) ";
      $query = $this->pdo->prepare($sql);
      $query->execute();
      $result=$query->fetchALL(PDO::FETCH_BOTH);
      return $result;
    } catch (PDOException $e) {
      die($e->getMessage()." ".$e->getLine()." ".$e->getFile());
    }
  }
  public function readUserById($field){
    try {
      $sql="SELECT * FROM usuario INNER JOIN access ON (usuario.usu_id=access.usu_id) INNER JOIN localizacion ON(usuario.loc_id=localizacion.loc_id) WHERE usuario.usu_id = ?";
      $query = $this->pdo->prepare($sql);
      $query->execute(array($field));
      $result=$query->fetch(PDO::FETCH_BOTH);
    } catch (PDOException $e) {
      die($e->getMessage()." ".$e->getLine()." ".$e->getFile());
    }
    return $result;
  }
  public function searchUser($busqueda){
      try {
          $sql="SELECT * FROM usuario WHERE usu_nombre LIKE '%$busqueda%'";
          $query = $this->pdo->prepare($sql);
          $query->execute(array($busqueda));
          $result = $query->fetch(PDO::FETCH_BOTH);
      } catch (PDOException $e) {
          die($e->getMessage()."".$e->getLine()."".$e->getFile());
      }
        return $result;
  }
  public function updateUser($data){
    try {
      $sql="UPDATE usuario SET  usu_nombre = ?, loc_id = ? WHERE usu_id = ?";
      $query = $this->pdo->prepare($sql);
      $query->execute(array($data[0],$data[2],$data[6]));
      $sql="UPDATE access SET  acc_email = ?, acc_session = ?, acc_secreto = ?, acc_pass = ?  WHERE usu_id = ?";
      $query = $this->pdo->prepare($sql);
      $query->execute(array($data[1],$data[0],$data[5],$data[3],$data[6]));
    } catch (PDOException $e) {
      die($e->getMessage()." ".$e->getLine()." ".$e->getFile());
    }
  }
  public function deleteUser($field){
    try {
      $sql="DELETE FROM usuario WHERE usu_id = ?";
      $query = $this->pdo->prepare($sql);
      $query->execute(array($field));
    } catch (PDOException $e) {
      die($e->getMessage()." ".$e->getLine()." ".$e->getFile());
    }
  }
  public function countUser(){
    try {
      $sql="SELECT count(usu_id) FROM usuario";
      $query = $this->pdo->prepare($sql);
      $query->execute();
      $result=$query->fetch(PDO::FETCH_BOTH);
    } catch (PDOException $e) {
      die($e->getMessage()." ".$e->getLine()." ".$e->getFile());
    }
    return $result;
  }
  public function __DESTRUCT(){
      DataBase::disconnect();
  }
}

 ?>
