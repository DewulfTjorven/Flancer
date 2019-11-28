<?php

require_once __DIR__ . '/Controller.php';

require_once __DIR__ . '/../dao/HeroDAO.php';
require_once __DIR__ . '/../dao/SkillDAO.php';

class HeroesController extends Controller {

  function __construct() {
    $this->heroDAO = new HeroDAO();
    $this->skillDAO = new SkillDAO();
  }

  public function index() {

    $alignments = $this->heroDAO->selectAlignments();
    $this->set('alignments', $alignments);

    if(empty($_GET['alignment']) || $_GET['alignment'] == 'all'){
      $heroes = $this->heroDAO->selectAllHeroes();
    }else{
      $heroes = $this->heroDAO->selectHeroByAlignment($_GET['alignment']);
    }

    if(empty($heroes)){
      $heroes = $this->heroDAO->selectAllHeroes();
    }

    if ($_SERVER['HTTP_ACCEPT'] == 'application/json') {
      echo json_encode($heroes);
      exit();
    }

    
    $this->set('heroes', $heroes);
    $this->set('title', 'Home');
  }

  public function detail() {

    $hero = $this->heroDAO->selectHeroById($_GET['id']);

    if(empty($hero)){
      $_SESSION['error'] = "The hero could not be found";
      header('Location: index.php');
      exit();
    }

    $this->set('hero', $hero);

    if(!empty($_POST['action'])){
      if($_POST['action'] == 'insertSkill'){
        $insertedSkill = $this->skillDAO->insertSkill($_POST);
        if(!$insertedSkill){
          $errors = $this->skillDAO->validate($_POST);
          $this->set('errors',$errors);
        }else{
          $_SESSION['info'] = 'Thanks for your skill';
          header('Location:index.php?page=detail&id=' . $_GET['id']);
          exit();
        }
      }
      }
    
    $this->set('skills', $this->skillDAO->selectSkillsByHero($_GET['id']));
    $this->set('title','Details');
  }

}
