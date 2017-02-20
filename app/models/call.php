<?php

class Call extends ApplicationModel {

  public static $table_name = 'calls';

  public function caller(){
    return Personnel::find($this->caller_id);
  }

  public function operator(){
    return User::find($this->operator_id);
  }

  public function updated_by(){
    return User::find($this->updated_by);
  }

  public static $validations = [
    'operator_id' => ['presence'=>true, 'numericality'=>true, 'length'=>['max',11]],
    'caller_id' => ['presence'=>true, 'numericality'=>true, 'length'=>['max',11]],
    'updated_by' => ['presence'=>true, 'numericality'=>true, 'length'=>['max',11]],
    'updated_at' => ['presence'=>true, 'format'=>true],
    'created_by' => ['presence'=>true, 'numericality'=>true, 'length'=>['max',11]],
    'created_at' => ['presence'=>true, 'format'=>true]

  ];

}
