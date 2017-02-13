<?php

class UsersController extends Controller\Base {

  public $view_folder = 'users';

  public function index(){
    $this->user = User::all();
  }

  public function edit(){

  }

  public function new(){

  }
}
