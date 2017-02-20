<?php
//ch
class ApplicationModel extends \Chronicle\Base {

  public function before_create() {
    $this->created_at = new DateTime();
  }

  public function before_save() {
    $this->updated_at = new DateTime();
  }

}
