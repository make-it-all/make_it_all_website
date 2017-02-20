<?php

class LanguageUser extends Chronicle\Base {

  public static $table_name = 'language_users';

  public static $validations = [
    'id' => ['presence'=>true, 'numericality'=>true, 'length'=>['max',11]], 'uniqueness'=>true],
    'name' => ['presence'=>true, 'length'=>['max',255]],
    'updated_by' => ['presence'=>true, 'numericality'=>true, 'length'=>['max',11]],
    'updated_at' => ['format'=>true],
    'created_by' => ['presence'=>true, 'numericality'=>true, 'length'=>['max',11]],
    'created_at' => ['format'=>true]

  ];

}
