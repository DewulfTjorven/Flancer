<?php

require_once( __DIR__ . '/DAO.php');

class FlancerDAO extends DAO {

  public function selectAll(){
    $sql = "SELECT * FROM `flancers`";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function selectById($id){
    $sql = "SELECT * FROM `flancers` WHERE `id` = :id";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':id', $id);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

  public function filterByRecommendations(){
    $sql = "SELECT * FROM `flancers` ORDER BY `recommendations` DESC";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function filterByLocation(){
    $sql = "SELECT * FROM `flancers` ORDER BY `location` DESC";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function filterByPrice(){
    $sql = "SELECT * FROM `flancers` ORDER BY `pricelow` ASC";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }



}
