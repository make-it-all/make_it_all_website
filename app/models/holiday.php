<?php

/*
  Holiday (Model)
  The holiday model is a php represntation of the table named `holidays`.
  See \Chronicle\Base for more infomation.

  @contributers Jack Delancey
*/

class Holiday extends ApplicationModel {

  public static $table_name = 'holidays';

  public static $validations = [
    'user_id' => ['presence'=>true, 'numericality'=>true, 'length'=>['max',11]],
    'start_date' => ['presence'=>true, 'format'=>true],
    'end_date' => ['presence'=>true, 'format'=>true],
    'updated_by' => ['presence'=>true, 'numericality'=>true, 'length'=>['max',11]],
    'updated_at' => ['presence'=>true, 'format'=>true],
    'created_by' => ['presence'=>true, 'numericality'=>true, 'length'=>['max',11]],
    'created_at' => ['presence'=>true, 'format'=>true]

  ];

}
