<?php

require $_SERVER['DOCUMENT_ROOT'].'/app/models/user.php';

class PagesController extends Controller\Base {

  public $view_folder = 'pages';

  public function home() {
    $this->user = User::last();
  }
}
