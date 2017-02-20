<?php

/*
  Controller (Application)
  The Aplication Controller provide a way to pass needed data to the views.
  They control what happens when recieving any HTTP requests.
  They act upon data and decided whether render a view or redirect to another url.
  See Controller\Base for more information.

  @contributers Henry Morgan, Chris Head, Zach Nurcombe
*/

class ApplicationController extends \Controller\Base {

  public $layout = 'application';

  public function before_action($action) {
    session_start();
    if (get_called_class() !== 'SessionsController' && !$this->logged_in()) {
      $this->redirect_to('/login');
    }
    $this->current_user = $this->current_user();
  }

  public function current_user() {
    if (!isset($this->current_user)) {
      $this->current_user = User::find_by(['id' => $_SESSION['user_id'] ?? -1]);
    }
    return $this->current_user;
  }

  public function logged_in() {
    return $this->current_user() !== null;
  }

}
