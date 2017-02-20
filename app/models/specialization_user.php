<?php

class SpecializationUser extends ApplicationModel {

  public static $table_name = 'specialization_users';

  public static $validations = [
	  'specialization_id' => ['presence'=>true, 'numericality'=>true, 'length'=>['max',11]],
    'user_id' => ['presence'=>true, 'numericality'=>true, 'length'=>['max',11]],
    'updated_by' => ['presence'=>true, 'numericality'=>true, 'length'=>['max',11]],
    'updated_at' => ['presence'=>true, 'format'=>true],
    'created_by' => ['presence'=>true, 'numericality'=>true, 'length'=>['max',11]],
    'created_at' => ['presence'=>true, 'format'=>true],

  ];

}
