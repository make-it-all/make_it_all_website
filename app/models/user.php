<?php

Chronicle\Base::setup_connection([
  'driver'   => 'mysql',
  'host'     => 'localhost',
  'username' => 'root',
  'password' => '',
  'database' => 'chronicle_test'
]);

class User extends Chronicle\Base {

  public static $table_name = 'users';

}
