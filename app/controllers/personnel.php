<?php

class PersonnelController extends Controller\Base {

  public $view_folder = 'personnel';

  public function index(){
    $this->personnel = Personnel::all();
  }

  public function edit(){

  }

  public function new(){

  }
}
