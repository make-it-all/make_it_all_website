<?php

class Hardware extends ApplicationModel {

  public static $table_name = 'hardware';

  public static $validations = [
  	'name' => ['presence'=>true, 'length'=>['max',255]],
  	'manufacturer' => ['length'=>['max',255]],
  	'model' => ['length'=>['max',255]],
    'hardware_id' => ['presence'=>true, 'numericality'=>true, 'length'=>['max',11]],
    'updated_by' => ['presence'=>true, 'numericality'=>true, 'length'=>['max',11]],
    'updated_at' => ['presence'=>true, 'format'=>true],
    'created_by' => ['presence'=>true, 'numericality'=>true, 'length'=>['max',11]],
    'created_at' => ['presence'=>true, 'format'=>true]


  ];

}
