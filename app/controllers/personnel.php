<?php

require Application::$paths['models'].'/personnel.php';

class PersonnelController extends Controller\Base {

  public $view_folder = 'personnel';

  public function index(){
    $this->personnels = Personnel::all();
  }

  public function edit(){

  }

  public function new(){

  }
}
