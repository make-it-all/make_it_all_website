<?php

/*
  Controller (Users)
  The Users Controller provide a way to pass needed data to the views.
  They control what happens when recieving any HTTP requests.
  They act upon data and decided whether render a view or redirect to another url.
  See Controller\Base for more information.

  @contributers Henry Morgan, Chris Head, Zach Nurcombe
*/


class UsersController extends ApplicationController {

  public function index() {
    $this->total_records = User::where(['is_lboro_admin' => false])->count();
    $this->offset = (($this->params['page'] ?? 1)-1)*10;
    $this->users = User::where(['is_lboro_admin' => false])->offset($this->offset)->limit(10)->results();
  }

  public function new() {
    $this->user = User::new();
  }

  public function create() {
    var_dump($this->user_params());
    $this->user = User::new($this->user_params());
    if ($this->user->save()) {
      $this->redirect_to('index', ['success'=>'user created']);
    } else {
      $this->render('new');
    }
  }

  public function edit() {
    $this->user = User::find($this->params['id']);
  }

  public function update() {
    $this->user = User::find($this->params['id']);
    if ($this->user->update($this->user_params())) {
      $this->redirect_to('index', ['success'=>'user updated']);
    } else {
      $this->render('edit');
    }
  }

  public function destroy() {
    $user = User::find($this->params['id']);
    $user->destroy();
    $this->redirect_to('/users', ['success'=>'User deleted']);
  }

  private function user_params() {
    return $this->params->require('user')->permit('name', 'email', 'password', 'personnel_id');
  }

}
