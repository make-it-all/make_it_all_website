<?php

class Description extends Chronicle\Base {

  public static $table_name = 'descriptions';

  public static $validations = [
    'body' => ['presence'=>true],
    'language_id' => ['presence'=>true, 'length'=>['max',11], 'numericality'=>true],
    'describable_type' => ['presence'=>true, 'length'=>['max',255]],
    'describable_id' => ['presence'=>true, 'length'=>['max',11], 'numericality'=>true],
    'author_id' => ['presence'=>true, 'length'=>['max',255], 'numericality'=>true, 'uniqueness'=>true],
    'updated_by' => ['presence'=>true, 'numericality'=>true, 'length'=>['max',11]],
    'updated_at' => ['presence'=>true, 'format'=>true],
    'created_by' => ['presence'=>true, 'numericality'=>true, 'length'=>['max',11]],
    'created_at' => ['presence'=>true, 'format'=>true]

  ];

}
