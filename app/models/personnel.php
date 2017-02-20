<?php

class Personnel extends Chronicle\Base {

  public static $table_name = 'personnel';

  public static $validations = [
    'name' => ['presence'=>true, 'length'=>['max', 255]],
    'job_title' => ['presence'=>true, 'length'=>['max', 255]],
    'email' => ['presence'=>true, 'length'=>['max', 255], 'format'=>true, 'uniqueness'=>true],
    'telephone_number' => ['presence'=>true, 'length'=>['max', 255], 'numericality'=>true, 'uniqueness'=>true],
    'branch_id' => ['presence'=>true, 'numericality'=>true, 'length'=>['max',11]],
    'department_id' => ['presence'=>true, 'numericality'=>true, 'length'=>['max',11]],
    'updated_by' => ['presence'=>true, 'numericality'=>true, 'length'=>['max',11]],
    'updated_at' => ['format'=>true],
    'created_by' => ['presence'=>true, 'numericality'=>true, 'length'=>['max',11]],
    'created_at' => ['format'=>true]
  ];

}
