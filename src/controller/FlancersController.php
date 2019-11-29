<?php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../dao/FlancerDAO.php';

class FlancersController extends Controller {

  function __construct() {
    $this->flancerDAO = new FlancerDAO();
  }

  public function dashboard() {

    if (!empty($_GET['action']) && $_GET['action'] == 'filter' && $_GET['orderby'] == 'recommendations') {
      $flancers = $this->flancerDAO->filterByRecommendations();
    }else if(!empty($_GET['action']) && $_GET['action'] == 'filter' && $_GET['orderby'] == 'pricelow'){
      $flancers = $this->flancerDAO->filterByPrice();
    }else if(!empty($_GET['action']) && $_GET['action'] == 'filter' && $_GET['orderby'] == 'location'){
      $flancers = $this->flancerDAO->filterByLocation();
    }else{
      $flancers = $this->flancerDAO->selectAll();
    }

    $this->set('flancers', $flancers);
    $this->set('title', 'dashboard');

  }

  public function detail() {
    if(!empty($_GET['id'])){
     $flancer = $this->flancerDAO->selectById($_GET['id']);
   }

   $this->set('flancer',$flancer);

 }

 public function form() {
    if(!empty($_POST["action"])) {
      if($_POST["action"] == "createjob") {
        $job = $this->flancerDAO->createJob($_POST);
      }
    }
  }

public function index() {
}
public function intro() {
}
public function job() {
}


}
