<?php

require Application::$paths['models'].'/user.php';

class UsersController extends Controller\Base {

  public $view_folder = 'users';

  public function index(){
    $this->users = User::all();
  }

  public function edit(){
    $this->id = $this->params['id'];
    // $this->user = User::where($id);
  }

  public function new(){

  }

  public function create() {
    var_dump($_POST);
  }
}
