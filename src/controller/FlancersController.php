<?php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../dao/FlancerDAO.php';

class FlancersController extends Controller {

  private $todoDAO;

  function __construct() {
    $this->flancerDAO = new FlancerDAO();
  }

  public function dashboard() {
    /*
    if (!empty($_POST['action'])) {
      if ($_POST['action'] == 'insertFlancer') {
        $this->handleInsertTodo();
      }
    }
    */

    $flancers = $this->flancerDAO->selectAll();

    $this->set('flancers', $flancers);

    $this->set('title', 'dashboard');
/*
>>>>>>> b3e2ab7d9c8d729fc0dca9fe28a1b382afb2c3e6
    if (strtolower($_SERVER['HTTP_ACCEPT']) == 'application/json') {

      header('Content-Type: application/json');
      echo json_encode($flancers);
      exit();
    }
  }
}
