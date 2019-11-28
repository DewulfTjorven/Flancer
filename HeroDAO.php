<?php

require_once( __DIR__ . '/DAO.php');

class HeroDAO extends DAO {

  public function selectAllHeroes(){
    $sql = "SELECT * FROM `heroes`";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function selectHeroByAlignment($alignment){
    $sql = "SELECT * FROM `heroes` WHERE `alignment` = :alignment";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':alignment', $alignment);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function selectHeroById($id){
    $sql = "SELECT * FROM `heroes` WHERE `id` = :id";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':id', $id);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

  // Deze functie selecteert alle unieke alignments (in dit geval met als resultaat "good", "bad" en "neutral")
  public function selectAlignments(){
    $sql = "SELECT DISTINCT `alignment` FROM `heroes` ORDER BY `alignment`";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

}
