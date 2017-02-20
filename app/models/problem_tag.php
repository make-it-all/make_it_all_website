<?php

/*
  ProblemTag (Model)
  The problemTag model is a php represntation of the table named `problem_tags`.
  See \Chronicle\Base for more infomation.

  @contributers Jack Delancey
*/

class ProblemTag extends ApplicationModel {

  public static $table_name = 'problem_tags';

  public function get_submitted_by() {
    return User::find($this->get_attribute('submitted_by')->get());
  }

  public static $validations = [
    'name' => ['presence'=>true, 'length'=>['max',255], 'uniqueness'=>true],
    'updated_by' => ['presence'=>true, 'numericality'=>true, 'length'=>['max',11]],
    'updated_at' => ['presence'=>true, 'format'=>true],
    'created_by' => ['presence'=>true, 'numericality'=>true, 'length'=>['max',11]],
    'created_at' => ['presence'=>true, 'format'=>true]

  ];

}
