<?php

/*
  Specialization (Model)
  The specialization model is a php represntation of the table
  named `specializations`.
  See \Chronicle\Base for more infomation.

  @contributers Chris Head
*/

class Specialization extends ApplicationModel {

  public static $table_name = 'specializations';

  public static $validations = [
     'name' => ['presence'=>true, 'length'=>['max',255], 'uniqueness'=>true,],
     'parent_id' => ['presence'=>true, 'numericality'=>true, 'length'=>['max',11]],
     'updated_by' => ['presence'=>true, 'numericality'=>true, 'length'=>['max',11]],
     'updated_at' => ['presence'=>true, 'format'=>true],
     'created_by' => ['presence'=>true, 'numericality'=>true, 'length'=>['max',11]],
     'created_at' => ['presence'=>true, 'format'=>true]

  ];

}
