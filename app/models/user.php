<?php

class User extends Chronicle\Base {

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
    'is_specialist' => ['presence'=>true, 'numericality'=>true, 'length'=>['equal',1]],
    'is_operator' => ['presence'=>true, 'numericality'=>true, 'length'=>['equal',1]],
    'is_admin' => ['presence'=>true, 'numericality'=>true, 'length'=>['equal',1]],
    'is_lboro_admin' => ['presence'=>true, 'numericality'=>true, 'length'=>['equal',1]],
    'last_seen_at' => ['format'=>true],
    'updated_by' => ['presence'=>true, 'numericality'=>true, 'length'=>['max',11]],
    'updated_at' => ['format'=>true],
    'created_by' => ['presence'=>true, 'numericality'=>true, 'length'=>['max',11]],
    'created_at' => ['format'=>true]

  ];

  public static function new($attrs=[]) {
    $record = parent::new($attrs);
    $record->add_attribute('password');
    return $record;
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
