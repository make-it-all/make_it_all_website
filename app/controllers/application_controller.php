<?php

class ApplicationController extends \Controller\Base {

  public $layout = 'application';

  public static function before_action($controller, $action) {
    if ($_SESSION['uid'] === null) {
      $controller->redirect_to('/login');
    }
  }

}
