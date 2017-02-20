<?php

class Language extends ApplicationModel {

  public static $table_name = 'languages';

  public static $validations = [
    'name' => ['presence'=>true, 'length'=>['max', 255]],
    'rtl' => ['presence'=>true, 'numericality'=>true, 'length'=>['max',1]],
    'updated_by' => ['presence'=>true, 'numericality'=>true, 'length'=>['max',11]],
    'updated_at' => ['presence'=>true, 'format'=>true],
    'created_by' => ['presence'=>true, 'numericality'=>true, 'length'=>['max',11]],
    'created_at' => ['presence'=>true, 'format'=>true]

  ];

}
