<?php

/*
  ProblemTagging (Model)
  The problemTagging model is a php represntation of the table named `problem_tagging`.
  See \Chronicle\Base for more infomation.

  @contributers Jack Delancey
*/

class ProblemTagging extends ApplicationModel {

  public static $table_name = 'problem_tagging';

  public function get_submitted_by() {
    return User::find($this->get_attribute('submitted_by')->get());
  }

  public static $validations = [
    'problem_tag_id' => ['presence'=>true, 'numericality'=>true, 'length'=>['max',11]],
    'problem_id' => ['presence'=>true, 'numericality'=>true, 'length'=>['max',11]],
    'updated_by' => ['presence'=>true, 'numericality'=>true, 'length'=>['max',11]],
    'updated_at' => ['presence'=>true, 'format'=>true],
    'created_by' => ['presence'=>true, 'numericality'=>true, 'length'=>['max',11]],
    'created_at' => ['presence'=>true, 'format'=>true]

  ];

}
