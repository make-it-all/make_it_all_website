<?php

class Setting extends Chronicle\Base {

  public static $table_name = 'settings';

  public function get_submitted_by() {
    return User::find($this->get_attribute('submitted_by')->get());
  }

  public static $validations = [
    'user_id' => ['presence'=>true, 'numericality'=>true, 'length'=>['max',11]],
    'updated_by' => ['presence'=>true, 'numericality'=>true, 'length'=>['max',11]],
    'updated_at' => ['format'=>true],
    'created_by' => ['presence'=>true, 'numericality'=>true, 'length'=>['max',11]],
    'created_at' => ['format'=>true]

  ];

}
