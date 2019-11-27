<?php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../dao/FlancerDAO.php';

class FlancersController extends Controller {

  private $todoDAO;

  function __construct() {
    $this->flancerDAO = new FlancerDAO();
  }

  public function dashboard() {

    $flancers = $this->flancerDAO->selectAll();

    $this->set('flancers', $flancers);

    if (strtolower($_SERVER['HTTP_ACCEPT']) == 'application/json') {

      header('Content-Type: application/json');
      echo json_encode($flancers);
      exit();
    }
  }
}
