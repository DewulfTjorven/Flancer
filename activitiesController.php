<?php

require_once __DIR__ . '/Controller.php';

require_once __DIR__ . '/../dao/ActivityDAO.php';

class ActivitiesController extends Controller {

  public function index(){
    $activityDAO = new ActivityDAO();
    $currentDate = new DateTime();

    $date = $currentDate->format('Y-m-D');
    if(!empty($_POST["date"])) {
        $date = $_POST["date"];
    }

    $difficulty = false;
    if(!empty($_POST["difficulty"])) {
        $difficulty = $_POST["difficulty"];
    }

    $activities = $activityDAO->selectAllActivities($date, $difficulty);
    $this->set('activities', $activities);
    $this->set('title', 'Home');
  }

  public function tickets() {
    $activityDAO = new ActivityDAO();

    if(!empty($_POST["action"])) {
      if($_POST["action"] == "buytickets") {
        $placeOrder = $activityDAO->saveTickets($_POST);
      }
    }
  }
}
