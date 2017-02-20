<?php

class Branch extends Chronicle\Base {

  public static $table_name = 'branches';

  public static $validations = [
    'name' => ['presence'=>true, 'length'=>['max',255]],
    'address_id' => ['presence'=>true, 'numericality'=>true, 'length'=>['max',11], 'uniqueness'=>true],
    'updated_by' => ['presence'=>true, 'numericality'=>true, 'length'=>['max',11]],
    'updated_at' => ['presence'=>true, 'format'=>true],
    'created_by' => ['presence'=>true, 'numericality'=>true, 'length'=>['max',11]],
    'created_at' => ['presence'=>true, 'format'=>true]

  ];

}
