<?php

/*
  User (Model)
  The user model is a php represntation of the table named `users`.
  See \Chronicle\Base for more infomation.

  @contributers Henry Morgan, Chris Head, Zach Nurcombe
*/

class User extends ApplicationModel {

  private $roles;

  public static $table_name = 'users';

  public static $validations = [
    'name' => ['presence'=>true, 'length'=>['max', 255]],
    'email' => ['presence'=>true, 'length'=>['max', 255], 'format'=>true, 'uniqueness'=>true],
    'password_digest' => ['presence'=>true, 'length'=>['max', 255]],
    'current_sign_in_at' => ['format'=>true],
    'current_sign_in_ip' => ['length'=>['max',10], 'numericality'=>true, 'uniqueness'=>true],
    'last_sign_in_at' => ['format'=>true],
    'last_sign_in_ip' => ['length'=>['max',10], 'numericality'=>true],
    'personnel_id' => ['numericality'=>true, 'length'=>['max',11], 'uniqueness'=>true],
    'is_specialist' => ['presence'=>true, 'numericality'=>true, 'length'=>['equal',1], 'inclusion'=>['0','1']],
    'is_operator' => ['presence'=>true, 'numericality'=>true, 'length'=>['equal',1], 'inclusion'=>['0','1']],
    'is_admin' => ['presence'=>true, 'numericality'=>true, 'length'=>['equal',1], 'inclusion'=>['0','1']],
    'is_lboro_admin' => ['presence'=>true, 'numericality'=>true, 'length'=>['equal',1], 'inclusion'=>['0','1']],
    'last_seen_at' => ['format'=>true],
    'updated_by' => ['presence'=>true, 'numericality'=>true, 'length'=>['max',11]],
    'updated_at' => ['presence'=>true, 'format'=>true],
    'created_by' => ['presence'=>true, 'numericality'=>true, 'length'=>['max',11]],
    'created_at' => ['presence'=>true, 'format'=>true]

  ];

  public static function new($attrs=[]) {
    $record = parent::new();
    $record->add_attribute('password');
    $record->assign_attributes($attrs);
    return $record;
  }

  public function before_validation() {
    if ($this->password !== null) {
      $this->password_digest = $this->hash_password($this->password);
    }
  }

  public function hash_password($password) {
    return password_hash($password, PASSWORD_DEFAULT);
  }

  public function authenticate($password) {
    $authed = password_verify($password, $this->password_digest);
    return $authed ? $this : false;
  }


  public function personnel() {
    return Personnel::find_by(['id' => $this->personnel_id]);
  }

  public function roles() {
    if (is_null($this->roles)) {
      $this->roles = [];
      if ($this->is_operator) {
        $roles[] = 'Operator';
      }
      if ($this->is_specialist) {
        $roles[] = 'Specialist';
      }
      if ($this->is_admin) {
        $roles[] = 'Admin';
      }
      if ($this->is_lboro_admin) {
        $roles[] = 'Lboro Admin';
      }
    }
    return $roles;
  }



}
