<?php
//jd
class Software extends ApplicationModel {

  public static $table_name = 'software';

  public function get_submitted_by() {
    return User::find($this->get_attribute('submitted_by')->get());
  }

  public static $validations = [
    'name' => ['presence'=>true, 'length'=>['max',255]],
    'version' => ['length'=>['max',255]],
    'updated_by' => ['presence'=>true, 'numericality'=>true, 'length'=>['max',11]],
    'updated_at' => ['presence'=>true, 'format'=>true],
    'created_by' => ['presence'=>true, 'numericality'=>true, 'length'=>['max',11]],
    'created_at' => ['presence'=>true, 'format'=>true]

  ];

}
