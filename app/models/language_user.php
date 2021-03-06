<?php

/*
  LanguageUser (Model)
  The languageUser model is a php represntation of the table named `language_users`.
  See \Chronicle\Base for more infomation.

  @contributers Jack Delancey
*/

class LanguageUser extends ApplicationModel {

  public static $table_name = 'language_users';

  public static $validations = [
    'preferred' => ['presence'=>true, 'numericality'=>true, 'length'=>['max',1], 'inclusion'=>['0','1']],
    'user_id' => ['presence'=>true, 'numericality'=>true, 'length'=>['max',11]],
    'language_id' => ['presence'=>true, 'numericality'=>true, 'length'=>['max',11]],
    'updated_by' => ['presence'=>true, 'numericality'=>true, 'length'=>['max',11]],
    'updated_at' => ['presence'=>true, 'format'=>true],
    'created_by' => ['presence'=>true, 'numericality'=>true, 'length'=>['max',11]],
    'created_at' => ['presence'=>true, 'format'=>true]

  ];

}
