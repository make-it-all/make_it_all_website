<?php

/*
  Department (Model)
  The department model is a php represntation of the table named `departments`.
  See \Chronicle\Base for more infomation.

  @contributers Chris Head
*/

class Department extends ApplicationModel {

  public static $table_name = 'departments';

  public static $validations = [
    'name' => ['presence'=>true, 'length'=>['max',255], 'uniqueness'=>true],
    'updated_by' => ['presence'=>true, 'numericality'=>true, 'length'=>['max',11]],
    'updated_at' => ['presence'=>true, 'format'=>true],
    'created_by' => ['presence'=>true, 'numericality'=>true, 'length'=>['max',11]],
    'created_at' => ['presence'=>true, 'format'=>true]

  ];

}
