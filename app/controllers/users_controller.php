<?php

class UsersController extends ApplicationController {

  public function index() {
    $this->users = User::all()->results();
  }

  public function new() {
    $this->user = new User();
  }

  public function create() {
    $this->user = new User($this->user_params());
    if ($this->user->save()) {
      $this->redirect_to('index', ['flash'=>'user created']);
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
      $this->redirect_to('index', ['flash'=>'user updated']);
    } else {
      $this->render('edit');
    }
  }

  public function destory() {
    $this->user = User::find($this->params['id']);
    $this->user->destroy();
    $this->redirect_to('index', ['flash'=>'user deleted']);
  }

  private function user_params() {
    $this->params->require('user')->permit('name', 'email', 'password', 'personnel_id');
  }

}
