<?php

class Problem extends Chronicle\Base {

  public static $table_name = 'problems';

  public function specialization() {
    return Specializations::find($this->specialization_id);
  }

  public function get_assigned_to() {
    return User::find($this->get_attribute('assigned_to')->get());
  }

  public function get_submitted_by() {
    return User::find($this->get_attribute('submitted_by')->get());
  }

  public static $validations = [
    'hardware_id' => ['numericality'=>true, 'length'=>['max',11]],
    'software_id' => ['numericality'=>true, 'length'=>['max',11]],
    'specialization_id' => ['numericality'=>true, 'length'=>['max',11]],
    'submitted_by' => ['presence'=>true, 'numericality'=>true, 'length'=>['max',11]],
    'assigned_to' => ['numericality'=>true, 'length'=>['max',11]],
    'worked_on' => ['presence'=>true, 'numericality'=>true, 'length'=>['equal',1]],
    'solution_id' => ['numericality'=>true, 'length'=>['max',11]],
    'updated_by' => ['presence'=>true, 'numericality'=>true, 'length'=>['max',11]],
    'updated_at' => ['format'=>true],
    'created_by' => ['presence'=>true, 'numericality'=>true, 'length'=>['max',11]],
    'created_at' => ['format'=>true]

  ];

}
