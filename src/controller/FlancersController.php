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
      $flancers = $this->flancerDAO->selectAllFlancers();
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
    if(!empty($_POST["action"]) && $_POST["action"] == "createjob") {
        $jobs = $this->flancerDAO->createJob($_POST);
    }

  }

public function index() {
}
public function intro() {
}
public function job() {
  $jobs = $this->flancerDAO->selectAllJobs();
  $this->set('jobs',$jobs);

}
public function added() {
  $lastjob = $this->flancerDAO->selectLastAddedJob();
  $this->set('lastjob',$lastjob);
}
public function jobdetail() {
  if(!empty($_GET['id'])){
    $job = $this->flancerDAO->selectByJobId($_GET['id']);
  }

  $this->set('job',$job);
}


}
