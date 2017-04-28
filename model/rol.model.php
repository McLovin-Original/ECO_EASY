<?php

Class RolModel{
  private $pdo;

  public function __CONSTRUCT(){
    try {
      $this->pdo = DataBase::connect();
      $this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
      die($e->getMessage()." ".$e->getLine()." ".$e->getFile());
    }
  }
  public function createRol($data){
    try {
      $sql="INSERT INTO rol VALUES(?,?,?)";
      $query = $this->pdo->prepare($sql);
      $query->execute(array($data[2],$data[0],$data[1]));
    } catch (PDOException $e) {
      die($e->getMessage()." ".$e->getLine()." ".$e->getFile());
    }
  }
  public function readRol(){
    try {
      $sql="SELECT * FROM rol ORDER BY rol_name";
      $query = $this->pdo->prepare($sql);
      $query->execute();
      $result=$query->fetchALL(PDO::FETCH_BOTH);
      return $result;
    } catch (PDOException $e) {
      die($e->getMessage()." ".$e->getLine()." ".$e->getFile());
    }
  }
  public function readRolById($field){
    try {
      $sql="SELECT * FROM rol WHERE rol_id = ?";
      $query = $this->pdo->prepare($sql);
      $query->execute(array($field));
      $result=$query->fetch(PDO::FETCH_BOTH);
    } catch (PDOException $e) {
      die($e->getMessage()." ".$e->getLine()." ".$e->getFile());
    }
    return $result;
  }
  public function readRolByName($name){
      try {
          $sql="SELECT rol_name FROM rol WHERE rol_name = ?";
          $query = $this->pdo->prepare($sql);
          $query->execute(array($name));
          $result = $query->fetch(PDO::FETCH_BOTH);
      } catch (PDOException $e) {
          die($e->getMessage()."".$e->getLine()."".$e->getFile());
      }
        return $result;
  }
  public function searchRol($busqueda){
      try {
          $sql="SELECT * FROM rol WHERE rol_name LIKE '%$busqueda%'";
          $query = $this->pdo->prepare($sql);
          $query->execute(array($busqueda));
          $result = $query->fetch(PDO::FETCH_BOTH);
      } catch (PDOException $e) {
          die($e->getMessage()."".$e->getLine()."".$e->getFile());
      }
        return $result;
  }
  public function updateRol($data){
    try {
      $sql="UPDATE rol SET  rol_name = ?, rol_descripcion = ? WHERE rol_id = ?";
      $query = $this->pdo->prepare($sql);
      $query->execute(array($data[0],$data[1],$data[2]));
    } catch (PDOException $e) {
      die($e->getMessage()." ".$e->getLine()." ".$e->getFile());
    }
  }
  public function deleteRol($field){
    try {
      $sql="DELETE FROM rol WHERE rol_id = ?";
      $query = $this->pdo->prepare($sql);
      $query->execute(array($field));
    } catch (PDOException $e) {
      die($e->getMessage()." ".$e->getLine()." ".$e->getFile());
    }
  }
  public function __DESTRUCT(){
      DataBase::disconnect();
  }
}

 ?>
