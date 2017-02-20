<?php

class CallProblem extends ApplicationModel {

  public static $table_name = 'call_problems';

  public static $validations = [
    'call_id' => ['presence'=>true, 'numericality'=>true, 'length'=>['max',11]],
    'problem_id' => ['presence'=>true, 'numericality'=>true, 'length'=>['max',11]],
    'updated_by' => ['presence'=>true, 'numericality'=>true, 'length'=>['max',11]],
    'updated_at' => ['presence'=>true, 'format'=>true],
    'created_by' => ['presence'=>true, 'numericality'=>true, 'length'=>['max',11]],
    'created_at' => ['presence'=>true, 'format'=>true]

  ];

}
