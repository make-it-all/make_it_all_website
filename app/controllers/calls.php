<?php

class CallsController extends Controller\Base {

  public $view_folder = 'calls';

  public function index(){
    $this->call = Call::all();
  }

  public function edit(){

  }

  public function new(){

  }
}
