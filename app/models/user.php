<?php

class User extends Chronicle\Base {

  private $roles;

  public static $table_name = 'users';

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

  public function get_is_admin() {
    return $this->attribute_methods['get_is_admin']() || $this->is_lboro_admin;
  }

}
