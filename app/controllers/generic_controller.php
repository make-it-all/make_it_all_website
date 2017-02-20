<?php

/*
  Controller (Generic)
  The Generic Controller provide a way to pass needed data to the views.
  They control what happens when recieving any HTTP requests.
  They act upon data and decided whether render a view or redirect to another url.
  See Controller\Base for more information.

  @contributers Henry Morgan, Chris Head, Zach Nurcombe
*/

class GenericController extends ApplicationController {

  public function index() {
    if ($this->params['q']) {
      $users = User::where($this->params['q']);
    } else {
      $users = User::all();
    }
  }
  public function show() {
    $user = User::find($this->params['id']);
  }
  public function new() {
    $user = new User();
  }
  public function create() {
    $user = new User($this->user_params());
    if ($user->save()) {
      $this->redirect_to('index', ['flash'=>'user created']);
    } else {
      $this->render('new');
    }
  }
  public function edit() {
    $user = User::find($this->params['id']);
  }
  public function update() {
    $user = User::find($this->params['id']);
    if ($user->update($this->user_params())) {
      $this->redirect_to('index', ['flash'=>'user updated']);
    } else {
      $this->render('edit');
    }
  }
  public function destory() {
    $user = User::find($this->params['id']);
    $user->destroy();
    $this->redirect_to('index', ['flash'=>'user deleted']);
  }

  private function user_params() {
    $this->params->require('user')->permit('name', 'email', 'password', 'personnel_id');
  }

}
