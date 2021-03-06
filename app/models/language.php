<?php

/*
  Language (Model)
  The language model is a php represntation of the table named `languages`.
  See \Chronicle\Base for more infomation.

  @contributers Jack Delancey
*/

class Language extends ApplicationModel {

  public static $table_name = 'languages';

  public static $validations = [
    'name' => ['presence'=>true, 'length'=>['max', 255]],
    'rtl' => ['presence'=>true, 'numericality'=>true, 'length'=>['max',1], 'inclusion'=>['0','1']],
    'updated_by' => ['presence'=>true, 'numericality'=>true, 'length'=>['max',11]],
    'updated_at' => ['presence'=>true, 'format'=>true],
    'created_by' => ['presence'=>true, 'numericality'=>true, 'length'=>['max',11]],
    'created_at' => ['presence'=>true, 'format'=>true]

  ];

}
