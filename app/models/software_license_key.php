<?php

/*
  SoftwareLicenseKey (Model)
  The softwareLicenseKey model is a php represntation of the table
  named `software_license_keys`.
  See \Chronicle\Base for more infomation.

  @contributers Jack Delancey
*/

class SoftwareLicenseKey extends ApplicationModel {

  public static $table_name = 'software_license_keys';

  public function get_submitted_by() {
    return User::find($this->get_attribute('submitted_by')->get());
  }

  public static $validations = [
    'soft_key' => ['presence'=>true, 'length'=>['max',255],
    'software_id' => ['presence'=>true, 'numericality'=>true, 'length'=>['max',11]],
    'updated_by' => ['presence'=>true, 'numericality'=>true, 'length'=>['max',11]],
    'updated_at' => ['presence'=>true, 'format'=>true],
    'created_by' => ['presence'=>true, 'numericality'=>true, 'length'=>['max',11]],
    'created_at' => ['presence'=>true, 'format'=>true]

  ];

}
