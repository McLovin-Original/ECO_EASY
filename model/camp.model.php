<?php

Class CampModel{
  private $pdo;

  public function __CONSTRUCT(){
    try {
      $this->pdo = DataBase::connect();
      $this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
      die($e->getMessage()." ".$e->getLine()." ".$e->getFile());
    }
  }
  public function createCamp($data){
    try {
      $sql="INSERT INTO campaña VALUES(?,?,?,?,?,?,?,?,?)";
      $query = $this->pdo->prepare($sql);
      $query->execute(array($data[8],$data[7],$data[0],$data[1],$data[2],$data[3],$data[4],$data[5],$data[6]));
    } catch (PDOException $e) {
      die($e->getMessage()." ".$e->getLine()." ".$e->getFile());
    }
  }
  public function readUser(){
    try {
      $sql="SELECT * FROM usuario";
      $query = $this->pdo->prepare($sql);
      $query->execute();
      $result=$query->fetchALL(PDO::FETCH_BOTH);
    } catch (PDOException $e) {
      die($e->getMessage()." ".$e->getLine()." ".$e->getFile());
    }
      return $result;
  }
  public function readCamp(){
    try {
      $sql="SELECT * FROM campaña ORDER BY camp_titulo";
      $query = $this->pdo->prepare($sql);
      $query->execute();
      $result=$query->fetchALL(PDO::FETCH_BOTH);
      return $result;
    } catch (PDOException $e) {
      die($e->getMessage()." ".$e->getLine()." ".$e->getFile());
    }
  }
  public function readCampById($field){
    try {
      $sql="SELECT * FROM campaña WHERE camp_id = ?";
      $query = $this->pdo->prepare($sql);
      $query->execute(array($field));
      $result=$query->fetch(PDO::FETCH_BOTH);
    } catch (PDOException $e) {
      die($e->getMessage()." ".$e->getLine()." ".$e->getFile());
    }
    return $result;
  }
  public function readCampByName($name){
      try {
          $sql="SELECT camp_titulo FROM campaña WHERE camp_titulo = ?";
          $query = $this->pdo->prepare($sql);
          $query->execute(array($name));
          $result = $query->fetch(PDO::FETCH_BOTH);
      } catch (PDOException $e) {
          die($e->getMessage()."".$e->getLine()."".$e->getFile());
      }
        return $result;
  }
  public function searchCamp($busqueda){
      try {
          $sql="SELECT * FROM campaña WHERE camp_titulo LIKE '%$busqueda%'";
          $query = $this->pdo->prepare($sql);
          $query->execute(array($busqueda));
          $result = $query->fetch(PDO::FETCH_BOTH);
      } catch (PDOException $e) {
          die($e->getMessage()."".$e->getLine()."".$e->getFile());
      }
        return $result;
  }
  public function updateCamp($data){
    try {
      $sql="UPDATE campaña SET  camp_foto = ?, camp_titulo = ?, camp_descrip = ?,camp_direc = ?,camp_fecha = ?, camp_comen = ?,camp_estado = ? WHERE camp_id = ?";
      $query = $this->pdo->prepare($sql);
      $query->execute(array($data[0],$data[1],$data[2],$data[4],$data[3],$data[5],$data[6],$data[7]));
    } catch (PDOException $e) {
      die($e->getMessage()." ".$e->getLine()." ".$e->getFile());
    }
  }
  public function deleteCamp($field){
    try {
      $sql="DELETE FROM campaña WHERE camp_id = ?";
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
