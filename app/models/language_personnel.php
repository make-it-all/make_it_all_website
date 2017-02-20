<?php

class LanguagePersonnel extends Chronicle\Base {

  public static $table_name = 'language_personnel';

  public static $validations = [
    'preferred' => ['presence'=>true, 'numericality'=>true, 'length'=>['max',1], 'inclusion'=>['0','1']],
    'personnel_id' => ['presence'=>true, 'numericality'=>true, 'length'=>['max',11]],
    'language_id' => ['presence'=>true, 'numericality'=>true, 'length'=>['max',11]],
    'updated_by' => ['presence'=>true, 'numericality'=>true, 'length'=>['max',11]],
    'updated_at' => ['format'=>true],
    'created_by' => ['presence'=>true, 'numericality'=>true, 'length'=>['max',11]],
    'created_at' => ['format'=>true]

  ];

}
