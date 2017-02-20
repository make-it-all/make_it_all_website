<?php

class SpecializationUser extends Chronicle\Base {

  public static $table_name = 'specialization_users';

  public static $validations = [
	'specialization_id' => ['presence'=>true, 'numericality'=>true, 'length'=>['max',11]], 
    'user_id' => ['presence'=>true, 'numericality'=>true, 'length'=>['max',11]],
    'updated_by' => ['presence'=>true, 'numericality'=>true, 'length'=>['max',11]],
    'updated_at' => ['format'=>true],
    'created_by' => ['presence'=>true, 'numericality'=>true, 'length'=>['max',11]],
    'created_at' => ['format'=>true],

  ];

}
