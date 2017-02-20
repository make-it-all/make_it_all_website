<?php

/*
  SpecializationUser (Model)
  The specializationUser model is a php represntation of the table
  named `specialization_users`.
  See \Chronicle\Base for more infomation.

  @contributers Chris Head
*/

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
