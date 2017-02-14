<?php

require Application::$paths['models'].'/call.php';

class CallsController extends Controller\Base {

  public $view_folder = 'calls';

  public function index(){
    $this->calls = Call::all();
  }

  public function edit(){
    $this->id = $this->params['id'];
  }

  public function new(){

  }
}
