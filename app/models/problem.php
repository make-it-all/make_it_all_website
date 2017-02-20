<?php

class Problem extends Chronicle\Base {

  public static $table_name = 'problems';

  public function get_submitted_by() {
    return User::find($this->get_attribute('submitted_by')->get());
  }

}
