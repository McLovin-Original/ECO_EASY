<?php

class LoginModel{
private $pdo;

  public function __CONSTRUCT(){
    try {
      $this->pdo = DataBase::connect();
      $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
      die($e->getMessage()."".$e->getLine()."".$e->getFile());
    }
 }

  public function readUserByEmail($data){
      try {
          $sql = "SELECT * FROM access INNER JOIN usuario ON(access.usu_id = usuario.usu_id) WHERE acc_email = ?";
          $query = $this->pdo->prepare($sql);
          $query->execute(array($data));
          $result = $query->fetch(PDO::FETCH_BOTH);
      } catch (PDOException $e) {
          die($e->getMessage()."".$e->getLine()."".$e->getFile());
      }
      return $result;
  }

  public function __DESTRUCT(){

    DataBase::disconnect();
  }
}
