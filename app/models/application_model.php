<?php
/*
  ApplicationModel (Model)
  The applicationModel is a unique model as it does not represent a database table,
  instead it is the parent of all other models and thus can provide common functionality
  without the need to repeat code.
  See \Chronicle\Base for more infomation.

  @contributers Henry Morgan
*/
class ApplicationModel extends \Chronicle\Base {

  public function before_create() {
    $this->created_at = new DateTime();
  }

  public function before_save() {
    $this->updated_at = new DateTime();
  }

}
