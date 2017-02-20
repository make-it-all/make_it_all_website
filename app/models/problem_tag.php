<?php

class ProblemTag extends Chronicle\Base {

  public static $table_name = 'problem_tags';

  public function get_submitted_by() {
    return User::find($this->get_attribute('submitted_by')->get());
  }

  public static $validations = [
    'hardware_id' => ['numericality'=>true, 'length'=>['max',11]],
    'software_id' => ['numericality'=>true, 'length'=>['max',11]],
    'specialization_id' => ['numericality'=>true, 'length'=>['max',11]],
    'submitted_by' => ['presence'=>true, 'numericality'=>true, 'length'=>['max',11]],
    'assigned_to' => ['numericality'=>true, 'length'=>['max',11]],
    'worked_on' => ['presence'=>true, 'numericality'=>true, 'length'=>['equal',1], 'inclusion'=>['0','1']],
    'solution_id' => ['numericality'=>true, 'length'=>['max',11]],
    'updated_by' => ['presence'=>true, 'numericality'=>true, 'length'=>['max',11]],
    'updated_at' => ['format'=>true],
    'created_by' => ['presence'=>true, 'numericality'=>true, 'length'=>['max',11]],
    'created_at' => ['format'=>true]

  ];

}
