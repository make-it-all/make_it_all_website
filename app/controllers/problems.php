<?php

class ProblemsController extends Controller\Base {

  public $view_folder = 'problems';

  public function index(){
    $this->problem = Problem::all();
  }

  public function edit(){

  }

  public function new(){

  }
}
