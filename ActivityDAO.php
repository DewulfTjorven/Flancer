<?php

require_once( __DIR__ . '/DAO.php');

class ActivityDAO extends DAO {

  public function selectAllActivities($date, $difficulty = false) {
    $sql = "SELECT * FROM activities WHERE date >= :date";
    $bindValues = array();
    $bindValues["date"] = $date;

    if(!empty($difficulty)) {
        $sql  .= " AND difficulty = :difficulty";
        $bindValues["difficulty"] = $difficulty;
    }

    $sql .= " ORDER BY date ASC";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute($bindValues);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

public function saveTickets($data) {
	$sql = "INSERT INTO `tickets` (`email`, `quantity`) VALUES (:email, :quantity)";
	$stmt = $this->pdo->prepare($sql);
	$stmt->bindValue("quantity", $data["quantity"]);
	$stmt->bindValue("email", $data["email"]);
	$stmt->execute();
}

}
