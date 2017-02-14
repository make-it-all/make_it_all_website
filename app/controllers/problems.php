<?php

require Application::$paths['models'].'/problem.php';

class ProblemsController extends Controller\Base {

  public $view_folder = 'problems';

  public function index(){
    $this->problems = Problem::all();
  }

  public function edit(){
    $this->id = $this->params['id'];
  }

  public function new(){

  }
}
