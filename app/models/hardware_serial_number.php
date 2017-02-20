<?php

class HardwareSerialNumber extends Chronicle\Base {

  public static $table_name = 'hardware_serial_numbers';

  public static $validations = [
    'number' => ['presence'=>true, 'length'=>['max',255]],
    'hardware_id' => ['presence'=>true, 'numericality'=>true, 'length'=>['max',11]],
    'updated_by' => ['presence'=>true, 'numericality'=>true, 'length'=>['max',11]],
    'updated_at' => ['format'=>true],
    'created_by' => ['presence'=>true, 'numericality'=>true, 'length'=>['max',11]],
    'created_at' => ['format'=>true]

  ];

}
