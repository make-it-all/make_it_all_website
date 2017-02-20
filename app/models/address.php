<?php

/*
  Address (Model)
  The address model is a php represntation of the table named `addresses`.
  See \Chronicle\Base for more infomation.

  @contributers Chris Head
*/

class Address extends ApplicationModel {

  public static $table_name = 'addresses';

  public static $validations = [
    'line_1' => ['presence'=>true, 'length'=>['max',255]],
    'line_2' => ['length'=>['max',255]],
    'line_3' => ['length'=>['max',255]],
    'province' => ['length'=>['max',255]],
    'postal_code' => ['presence'=>true, 'length'=>['max',255]],
    'country_id' => ['presence'=>true, 'numericality'=>true, 'length'=>['max',11]],
    'updated_by' => ['presence'=>true, 'numericality'=>true, 'length'=>['max',11]],
    'updated_at' => ['presence'=>true, 'format'=>true],
    'created_by' => ['presence'=>true, 'numericality'=>true, 'length'=>['max',11]],
    'created_at' => ['presence'=>true, 'format'=>true]

  ];

}
