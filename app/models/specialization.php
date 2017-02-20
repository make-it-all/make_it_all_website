<?php

class Specialization extends Chronicle\Base {

  public static $table_name = 'specializations';

  public static $validations = [
     'name' => ['presence'=>true, 'length'=>['max',255], 'uniqueness'=>true,],
     'parent_id' => ['presence'=>true, 'numericality'=>true, 'length'=>['max',11]],
     'updated_by' => ['presence'=>true, 'numericality'=>true, 'length'=>['max',11]],
     'updated_at' => ['format'=>true],
     'created_by' => ['presence'=>true, 'numericality'=>true, 'length'=>['max',11]],
     'created_at' => ['format'=>true]

  ];

}