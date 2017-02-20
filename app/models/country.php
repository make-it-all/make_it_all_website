<?php

class Country extends Chronicle\Base {

  public static $table_name = 'countries';

  public static $validations = [
    'name' => ['presence'=>true, 'length'=>['max',255]], 'uniqueness'=>true],
    'iso2' => ['presence'=>false, 'length'=>['equal',2]], 'uniqueness'=>true],
    'iso3' => ['presence'=>false, 'length'=>['equal',3]], 'uniqueness'=>true],
    'iso_num' => 'presence'=>false, 'numericality'=>true, 'length'=>['equal',3], 'uniqueness'=>true],
    'updated_at' => ['format'=>true],
    'created_at' => ['format'=>true]

  ];

}
