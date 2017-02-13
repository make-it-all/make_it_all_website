<?php

Chronicle\Base::setup_connection([
  'driver'   => 'mysql',
  'host'     => 'localhost',
  'username' => 'root',
  'password' => '',
  'database' => 'make-it-all'
]);

class User extends Chronicle\Base {

  public static $table_name = 'users';

}
