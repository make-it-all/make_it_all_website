<?php

class User extends Chronicle\Base {

  private $roles;

  public static $table_name = 'users';

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
