<?php

class User implements \ArrayAccess, \Iterator {
  public static function all() {
    return new User;
  }
  public function count() {
    return 19;
  }

  //----- ArrayAccess - Methods
  public function offsetExists($key) {
    return isset($this->records()[$key]);
  }
  public function offsetUnset($key) {
    unset($this->records()[$key]);
  }
  public function offsetSet($key, $value) {
    if (is_null($key)) {
      $this->records()[] = $value;
    } else {
      $this->records()[$key] = $value;
    }
  }
  public function offsetGet($key) {
    return isset($this->records()[$key]) ? $this->records()[$key] : null;
  }

  //----- Iterator - Methods
  public function current(){
    $this->load();
    return current($this->_records);
  }
  public function next() {
    $this->load();
    return next($this->_records);
  }
  public function key() {
    $this->load();
    return key($this->_records);
  }
  public function valid() {
    $this->load();
    return $this->offsetExists($this->key());
  }
  public function rewind() {
    $this->load();
    return reset($this->_records);
  }
}

class UsersController extends ApplicationController {

  public function index(){
    $this->users = User::all();
    $this->title = 'All Users | Make it all';
    $this->facts = ['29 problems have been solved since last log on', '35 problems remain outstanding'];
  }

  public function edit(){
    // $this->id = $this->params['id'];
    //$this->user = User::find($this->params['id']);
  }

  public function new(){
    $this->id = "new";
  }

  public function create() {
    var_dump($_POST);
  }
}
