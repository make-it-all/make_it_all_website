<?php

class Language extends Chronicle\Base {

  public static $table_name = 'languages';

  public static $validations = [
    'name' => ['presence'=>true, 'length'=>['max', 255]],
    'rtl' => ['presence'=>true, 'numericality'=>true, 'length'=>['max',1]],
    'updated_by' => ['presence'=>true, 'numericality'=>true, 'length'=>['max',11]],
    'updated_at' => ['format'=>true],
    'created_by' => ['presence'=>true, 'numericality'=>true, 'length'=>['max',11]],
    'created_at' => ['format'=>true]

  ];

}
