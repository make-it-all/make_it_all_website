<?php

/*
  HardwareType (Model)
  The hardwareType model is a php represntation of the table named `hardware_types`.
  See \Chronicle\Base for more infomation.

  @contributers Jack Delancey
*/

class HardwareType extends ApplicationModel {

  public static $table_name = 'hardware_types';

  public static $validations = [
    'name' => ['presence'=>true, 'length'=>['max',255], 'uniqueness'=>true],
    'updated_by' => ['presence'=>true, 'numericality'=>true, 'length'=>['max',11]],
    'updated_at' => ['presence'=>true, 'format'=>true],
    'created_by' => ['presence'=>true, 'numericality'=>true, 'length'=>['max',11]],
    'created_at' => ['presence'=>true, 'format'=>true]

  ];

}
