<?php

/*
  HardwareSerialNumber (Model)
  The hardwareSerialNumber model is a php represntation of the table
  named `hardware_serial_numbers`.
  See \Chronicle\Base for more infomation.

  @contributers Jack Delancey
*/

class HardwareSerialNumber extends ApplicationModel {

  public static $table_name = 'hardware_serial_numbers';

  public static $validations = [
    'number' => ['presence'=>true, 'length'=>['max',255]],
    'hardware_id' => ['presence'=>true, 'numericality'=>true, 'length'=>['max',11]],
    'updated_by' => ['presence'=>true, 'numericality'=>true, 'length'=>['max',11]],
    'updated_at' => ['presence'=>true, 'format'=>true],
    'created_by' => ['presence'=>true, 'numericality'=>true, 'length'=>['max',11]],
    'created_at' => ['presence'=>true, 'format'=>true]

  ];

}
